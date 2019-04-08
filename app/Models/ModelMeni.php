<?php

    namespace App\Models;

    use Illuminate\Support\Facades\DB;

    class ModelMeni
    {

        public function getMeni()
        {
            $rez= DB::table('meni')->get();
            return $rez;
        }





    }
