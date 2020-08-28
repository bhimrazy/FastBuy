<?php

namespace App\Repositories;

use App\Cart;
use App\Order;
use App\Product;
use App\OrderItem;
use App\Contracts\OrderContract;

class OrderRepository extends BaseRepository implements OrderContract
{
    public function __construct(Order $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function storeOrderDetails($params)
    {   $oldCart=session()->has('cart')?session('cart'):null;
        $cart=new Cart($oldCart);
        $order = Order::create([
            'order_number'      =>  'ORD-'.strtoupper(uniqid()),
            'user_id'           => auth()->user()->id,
            'status'            =>  'pending',
            'grand_total'       =>  $cart->getSubTotal(),
            'item_count'        =>  $cart->getTotalQuantity(),
            'payment_status'    =>  0,
            'payment_method'    =>  null,
            'first_name'        =>  $params['billing_first_name'],
            'last_name'         =>  $params['billing_last_name'],
            'address'           =>  $params['billing_address'],
            'city'              =>  $params['billing_city'],
            'country'           =>  $params['billing_country'],
            'post_code'         =>  $params['billing_post_code'],
            'phone_number'      =>  $params['billing_phone'],
            //'notes'             =>  $params['notes']
        ]);
        if ($order) {
            $storedItems = $cart->getContent();
            foreach ($storedItems as $storedItem)
            {
                // A better way will be to bring the product id with the cart items
                // you can explore the package documentation to send product id with the cart
                $product = Product::where('id', $storedItem['item']->id)->first();
                $orderItem = new OrderItem([
                    'product_id'    =>  $product->id,
                    'quantity'      =>  $storedItem['qty'],
                    'price'         =>  $storedItem['price'],
                ]);

                $order->items()->save($orderItem);
            }
        }

        return $order;
    }

    public function listOrders(string $order = 'id', string $sort = 'desc', array $columns = ['*'])
    {
        return $this->all($columns, $order, $sort);
    }

    public function findOrderByNumber($orderNumber)
    {
        return Order::where('order_number', $orderNumber)->first();
    }
}
