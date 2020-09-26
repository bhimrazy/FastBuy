<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Auth;

class EsewaController extends Controller
{
    public function success(Request $request)
    {

        if( isset($request->oid) && isset($request->amt) && isset($request->refId))
        {
            $order = Order::where('order_number', $request->oid)->first();
            if( $order)
            {   $url = "https://uat.esewa.com.np/epay/transrec";
                $data =[
                    'amt'=> $order->grand_total,
                    'rid'=> $request->refId,
                    'pid'=> $order->order_number,
                    'scd'=> 'epay_payment'
                ];

                $curl = curl_init($url);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($curl);
                //dd($response);
                curl_close($curl);

                $response_code = $this->get_xml_node_value('response_code',$response );
                if( trim($response_code) == 'Success')
                {
                    $order->status = 'processing';
                    $order->payment_status = 1;
                    $order->transaction_id=$request->refId;
                    $order->payment_method='eSewa';
                    $order->save();
                    Auth::user()->customerOrders()->save($order);
                    return redirect()->route('my-account')->with('success', 'Transaction completed.');
                }else{
                $order->delete();
                return redirect()->route('my-account')->with('danger', ' You have cancelled your transaction .');
            }
            }


        }
        $order->delete();
        return redirect()->route('my-account')->with('error', ' You have cancelled your transaction .');

    }

    public function fail(Request $request)
    {   if($request->oid){
            $order = Order::where('order_number', $request->oid)->first();
            $order->delete();
        }

        return redirect()->route('my-account')->with('error', ' You have cancelled your transaction .');
    }

    public function get_xml_node_value($node, $xml) {
        if ($xml == false) {
            return false;
        }
        $found = preg_match('#<'.$node.'(?:\s+[^>]+)?>(.*?)'.
            '</'.$node.'>#s', $xml, $matches);
        if ($found != false) {

            return $matches[1];

        }

        return false;
    }

    public function payment_response()
    {
        return route('my-account');
    }
}
