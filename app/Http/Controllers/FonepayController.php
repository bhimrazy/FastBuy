<?php

namespace App\Http\Controllers;

use App\Order;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FonepayController extends Controller
{
    public function fonepay_response( Request $request)
    {

        if( isset( $request->PRN) && isset($request->PID) && isset($request->AMT))
        {

            $order = Order::where('order_number', $request->PRN)->first();
            if( $order)
            {
                $url = 'https://clientapi.fonepay.com/api/merchantRequest/verificationMerchant';

                $data =  'NBQM'.',';
                $data .= $order->grand_total .',';
                $data .= $request->PRN .',';
                $data .= $request->BID .',';
                $data .= $request->UID ;


                $DV = hash_hmac('sha512', $data, 'a7e3512f5032480a83137793cb2021dc');

                $PRN = $request['PRN'];
                $PID = $request['PID'];
                $BID = $request['BID'];
                $AMT = $order->grand_total;
                $RU  = $request['RU'];
                $UID = $request['UID'];

                $queryString = "PRN=$PRN&PID=$PID&BID=$BID&AMT=$AMT&RU=$RU&UID=$UID&DV=$DV";
                $url   = 'https://dev-clientapi.fonepay.com/api/merchantRequest/verificationMerchant?' . $queryString;


                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $content  = curl_exec($ch);

                //dd($content );

                $response = simplexml_load_string($content);
                //dd($response);
                if($response->success == 'true')
                {
                    if( $response->response_code == 'successful' && $response->statusCode == 0)
                    {
                        $order->status = 'processing';
                        $order->delivery = 'pending';
                        $order->payment_status = 1;
                        $order->transaction_id=$UID;
                        $order->payment_method='fonepay';
                        $order->save();
                        Auth::user()->customerOrders()->save($order);
                        Transaction::create([
                            'order_number'=>$order['order_number'],
                            'transaction_id'=>$order['transaction_id'],
                            'customer_name'=>$order['first_name'].' '.$order['last_name'],
                            'transaction_amount'=>$order['grand_total'],
                            'payment_method'=>$order->payment_method,
                            'payment_status'=>1
                        ]);
                        return redirect()->route('my-account')->with('success', 'Transaction completed.');

                    }
                }else{
                    $order->delete();
                    return redirect()->route('my-account')->with('danger', ' You have cancelled your transaction .');
                }


            }


        }
        $order->delete();
        return redirect()->route('my-account')->with('error', ' You have cancelled your transaction .');
    }
}
