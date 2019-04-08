<?php
    /**
     * Created by PhpStorm.
     * User: Steva
     * Date: 3/17/2019
     * Time: 12:02 PM
     */

    namespace App\Models;
    use \Illuminate\Support\Facades\DB;

    class ModelOrders
    {
        public function insertOrder($address,$country,$city,$phone,$cart,$userId)
        {

            return DB::table('orders')
                ->insert([
                    'id_order'=>null,
                    'address'=>$address,
                    'country'=>$country,
                    'city'=>$city,
                    'phone'=>$phone,
                    'cart'=>$cart,
                    'user_id'=>$userId

                ]);
        }

    }