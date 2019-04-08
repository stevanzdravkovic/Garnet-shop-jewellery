<?php
    /**
     * Created by PhpStorm.
     * User: Steva
     * Date: 3/6/2019
     * Time: 8:09 PM
     */

    namespace App\Models;
    use Illuminate\Support\Facades\DB;

    class ModelUser
    {




        public function insert($name,$lastname,$pass,$mail,$role)
        {
            DB::table('user')
                ->insert([

                    'id_user'=>null,
                    'name'=>$name,
                    'lastname'=>$lastname,
                    'password'=>md5($pass),
                    'email'=>$mail,
                    'idRole'=>$role



                ]);
        }

        public function getUser($mail, $sifra)
        {

            return DB::table('user')
                ->join('roles','user.idRole','=','roles.role_id')
                ->where([
                    ['user.email', '=', $mail],
                    ['user.password', '=', md5($sifra)],
                ])
                ->first();


        }


        public function getAdmin($mail, $sifra)
        {

            return DB::table('user')
                ->join('roles','user.idRole','=','roles.role_id')
                ->where([
                    ['user.email', '=', $mail],
                    ['user.password', '=', md5($sifra)],
                    ['idRole','=',1]
                ])
                ->first();


        }




    }