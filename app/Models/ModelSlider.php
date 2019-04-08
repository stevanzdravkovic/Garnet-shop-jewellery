<?php
    /**
     * Created by PhpStorm.
     * User: Steva
     * Date: 3/5/2019
     * Time: 1:23 AM
     */

    namespace App\Models;
    use Illuminate\Support\Facades\DB;

    class ModelSlider
    {

        public function slider()
        {
            return DB::table('slider')->get();

        }

    }