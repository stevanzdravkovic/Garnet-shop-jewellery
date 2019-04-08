<?php
    /**
     * Created by PhpStorm.
     * User: Steva
     * Date: 3/5/2019
     * Time: 3:00 AM
     */

    namespace App\Models;
    use Illuminate\Support\Facades\DB;

    class ModelLatestProducts
    {

        public function getLatestProducts()
        {
            return DB::table('products')
                ->orderBy('updated_at', 'desc')
                ->take(5)
                ->get();

        }


    }