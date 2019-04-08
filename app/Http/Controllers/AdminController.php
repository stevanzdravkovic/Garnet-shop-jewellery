<?php
    /**
     * Created by PhpStorm.
     * User: Steva
     * Date: 3/13/2019
     * Time: 4:18 PM
     */

    namespace App\Http\Controllers;


    use App\Models\ModelAdmin;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\File;

    class AdminController extends BaseController
    {
        private $admin;
        public function  __construct()
        {

            $this->admin = new ModelAdmin();

            parent::__construct();

        }

        public function adminPanel()
        {
            return view ('pages.insertForm',$this->adminMeni);
        }

        public function showInsertForm()
        {
            return view('pages.insertForm',$this->adminMeni);
        }

        public function Insert(Request $request)
        {

            $name = $request->input('ProductName');
            $price = $request->input('productPrice');


            $category = $request->input('productCategory');
            $image = $request->file('productImage'); //instanca fajla



            $tmp_path = $image->getPathName();
            $extension = $image->getClientOriginalExtension();
            $file_name = time() . '.' .$extension;
            $path = './image/'.$file_name;
            if($image->isValid()) {
                File::move($tmp_path, $path);

                $this->admin->doInsert($name, $price, $path,  $category);
                return redirect()->back()->with('message', 'Product has been added succesfully!');
            }
            else{
                return redirect()->back()->with('message', 'Error!');
            }


        }

        public function showSliderInsertForm()
        {
            return view('pages.showSliderForm',$this->adminMeni);
        }

        public function doInsertSlider(Request $req)
        {
            $alt=$req->input('imgDescription');
            $image=$req->file('sliderImage');
            $tmp_path=$image->getPathname();
            $extension=$image->getClientOriginalExtension();
            $file_name=time() . '.' . $extension;
            $path='./image/'.$file_name;
            if($image->isValid())
            {
                File::move($tmp_path,$path);
                $this->admin->doInsertSlider($path,$alt);
                return redirect()->back()->with('message', 'Product has been added succesfully!');
            }
            else{
                return redirect()->back()->with('message', 'Error!');

            }

        }

        public function showAll()
        {

            $this->adminMeni['podaci']=$this->admin->showAll();


            return view ('pages.showDeleteForm',$this->adminMeni);
        }

        public function deleteSliderImage($id)

        {
            $this->admin->deleteImgSlider($id);
            return redirect()->back()->with('message', 'Product has been deleted succesfully!');
        }


        public function showUpdateForm()
        {
            $this->adminMeni['podaci']= $this->admin->showAllProducts();
            return view('pages.showUpdateForm',$this->adminMeni);
        }

        public function showUpdateOneForm($id)
        {
            $this->adminMeni['podaci']=$this->admin->updateProduct($id);


            return view('pages.updateOneProduct',$this->adminMeni);
        }

        public function updateProduct(Request $req,$id)
        {
            $name=$req->input('ProductName');

            $price=$req->input('productPrice');

            $categoryID=$req->input('productCategory');


            $image=$req->file('productImage');
            $extension= $image->getClientOriginalExtension();
            $tmp_path=$image->getPathname();

            $file_name=time() . '.' . $extension;
            $path='./image/'.$file_name;
            if($image->isValid()) {
                File::move($tmp_path, $path);


                $this->adminMeni['podaci'] = $this->admin->updateProducts($id, $name, $price, $path, $categoryID);
                return redirect(route('showUpdateForm'))->with('message', 'Product has been deleted succesfully!');
            }
            else{
                return redirect()->back()->with('message', 'Error!');

            }
        }

        public function showProducts()
        {
            $this->adminMeni['podaci']=$this->admin->showAllProudcts();
            return view ('pages.deleteProducts',$this->adminMeni);
        }

        public function deleteProducts($id)
        {
            $this->admin->deleteProduct($id);
            return redirect()->back()->with('message', 'Product has been deleted succesfully!');
        }


        public function showOrders()
        {


            $orders=$this->adminMeni['podaci']=$this->admin->getOrders();
            $orders->transform(function($order){
                $order->cart=unserialize($order->cart);
                return $order;
            });
            return view('pages.orders',$this->adminMeni);


        }

        public function activities()
        {
            $this->adminMeni['podaci']=$this->admin->showActivities();
            return view ('pages.activities',$this->adminMeni);
        }




    }