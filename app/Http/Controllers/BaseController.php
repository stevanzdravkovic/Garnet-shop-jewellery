<?php
    /**
     * Created by PhpStorm.
     * User: Steva
     * Date: 3/2/2019
     * Time: 6:15 AM
     */

    namespace App\Http\Controllers;

    use App\Models\ModelAdmin;
    use App\Models\ModelMeni;
    use App\Models\ModelProduct;
    use App\Models\ModelUser;

    abstract class BaseController
    {
        protected $data;
        protected $model;
        protected $adminMeni;


        public function __construct()
        {
            $meniBaza= new ModelMeni();
            $this->data['meni']=$meniBaza->getMeni();
            $this->model =new ModelUser();


            $meniadminbaza= new ModelAdmin();
            $this->adminMeni['meni']=$meniadminbaza->getAdminMeni();




        }

    }

