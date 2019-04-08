<?php
    /**
     * Created by PhpStorm.
     * User: Steva
     * Date: 3/6/2019
     * Time: 9:19 PM
     */

    namespace App\Models;
    use Illuminate\Support\Facades\DB;

    class ModelProduct
    {

        public function showSingle($id)
        {
            return DB::table('products')
                ->where('id_product','=',$id)
                ->first();

        }

        public function allNecklaces()
        {
            return DB::table('products')
                ->where('products.id_category','=',1)
                ->paginate(2)
                ;


        }
        public function allEarrings()
        {
            return DB::table('products')
                ->where('products.id_category','=',2)
                ->paginate(2)
                ;


        }

        public function allRings()
        {
            return DB::table('products')
                ->where('products.id_category','=',3)
                ->paginate(2)
                ;

        }



    }