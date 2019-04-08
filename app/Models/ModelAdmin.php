<?php
    /**
     * Created by PhpStorm.
     * User: Steva
     * Date: 3/13/2019
     * Time: 5:51 PM
     */

    namespace App\Models;
    use Illuminate\Support\Facades\DB;

    class ModelAdmin
    {


        public function getAdminMeni()
        {

            $meni= DB::table('adminmeni')
                ->get();
            foreach ($meni as $m)
            {

                $m->submeni= DB::table('adminmeni')
                    ->where('parent_id','=',$m->id_meni)
                    ->get();
            }
            return $meni;
        }

        public function doInsert ($productName,$productPrice,$path,$id_category)
        {
            DB::table('products')
                ->insert([

                    'id_product'=>null,
                    'product_name'=>$productName,
                    'price'=>$productPrice,
                    'path'=>$path,
                    'id_category'=>$id_category

                ]);




        }


        public function doInsertSlider($path,$alt)
        {
            DB::table('slider')
                ->insert([
                    'path'=>$path,
                    'alt'=>$alt
                ]);
        }

        public function showAll()
        {
            return DB::table('slider')
                ->get();
        }

        public function deleteImgSlider($id)
        {
            return DB::table('slider')
                ->where('id','=',$id)
                ->delete();

        }


        public function showAllProudcts()
        {
            return DB::table('products')
                ->get();


        }
        public function deleteProduct($id)
        {
            return DB::table('products')
                ->where('id_product','=',$id)
                ->delete();

        }

        public function showAllProducts()
        {
            return DB::table('products')
                ->get();
        }

        public function updateProducts($id,$name,$price,$path,$categoryID)
        {
            return DB::table('products')
                ->where('id_product','=',$id)
                ->update([
                    'product_name'=>$name,
                    'price'=>$price,
                    'path'=>$path,
                    'id_category'=>$categoryID
                ]);

        }
        public function updateProduct($id)
        {
            return DB::table('products')
                ->where('id_product','=',$id)
                ->get();

        }


        public function getRole()
        {
            return DB::table('user')
                ->get();
        }


        public function updateRole($id,$newRole)
        {

            return DB::table('user')
                ->where('id_user','=',$id)
                ->update ([
                    'idRole'=>$newRole
                ]);
        }


        public function showActivities()
        {
            return DB::table('activities')
                ->paginate(10);
        }

        public function getOrders()
        {

            return DB::table('orders')
                ->join('user','orders.user_id','=','user.id_user')
                ->paginate(2);
        }


    }