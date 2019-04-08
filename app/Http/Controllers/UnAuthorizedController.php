<?php
    /**
     * Created by PhpStorm.
     * User: Steva
     * Date: 3/2/2019
     * Time: 6:16 AM
     */

    namespace App\Http\Controllers;
    use App\Models\ModelCart;
    use App\Models\ModelLatestProducts;
    use App\Models\ModelMeni;
    use App\Models\ModelOrders;
    use App\Models\ModelProduct;
    use App\Models\ModelSlider;
    //use Illuminate\Support\Facades\Request;
    use Illuminate\Http\Request;

    use Illuminate\Support\Facades\Mail;


    class UnAuthorizedController extends BaseController
    {

        public function  __construct()
        {

            $product = new ModelProduct();

            $this->data['earrings']= $product->allEarrings();
            $this->data['rings']= $product->allRings();
            $this->data['necklaces']= $product->allNecklaces();

            parent::__construct();



        }



        public function index()
        {
            $bazaSlider= new ModelSlider();
            $this->data['slider']=$bazaSlider->slider();

            $bazaLatestProducts= new ModelLatestProducts();
            $this->data['najnoviji']=$bazaLatestProducts->getLatestProducts();

            return view ('pages.index',$this->data);



        }

        public function showsingleProduct($id)
        {
            $model=new ModelProduct();
            $this->data['prikaz']=$model->showSingle($id);
            $bazaLatestProducts= new ModelLatestProducts();
            $this->data['najnoviji']=$bazaLatestProducts->getLatestProducts();



            return view('pages.prikazjednog',$this->data);
        }





        public function showNecklaces()
        {


            $bazaLatestProducts= new ModelLatestProducts();
            $this->data['najnoviji']=$bazaLatestProducts->getLatestProducts();
            return view('pages.necklaces',$this->data);

        }


        public function showEarrings()
        {

            return view('pages.earrings',$this->data);

        }


        public function showRings()
        {

            return view ('pages.rings',$this->data);
        }


        public function getAddToCart(Request $req , $id)

        {



            $product = new ModelProduct();

            $product= $product->showSingle($id);


            $oldCart=\Session::has('cart') ? \Session::get('cart') : null;
            $cart = new ModelCart($oldCart);

            $cart->add($product,$product->id_product);

            $req->session()->put('cart',$cart);
            return redirect()->route('home');


        }

        public function getCart()
        {
            if(!\Session::has('cart'))
            {
                return view('pages.cart',$this->data);
            }

            $oldCart =\Session::get('cart');
            $cart= new ModelCart($oldCart);

            return view('pages.cart',$this->data,['products'=>$cart->items,'totalPrice'=>$cart->totalPrice]);
        }




        public function deleteproductCart($id)
        {

            $oldCart=\Session::has('cart') ? \Session::get('cart') : null;
            $cart = new ModelCart($oldCart);
            $cart->reduceByOne($id);

            \Session::put('cart',$cart);


            return redirect('/cart');

        }



        public function getRemoveitem($id)
        {
            $oldCart = \Session::has('cart') ? \Session::get('cart') : null;
            $cart = new ModelCart($oldCart);
            $cart->removeItem($id);
            \Session::put('cart', $cart);


            return redirect('/cart');

        }

        public function getCheckout()
        {

            if(!\Session::has('cart'))
            {
                return view('pages.cart',$this->data);
            }

            $oldCart=\Session::get('cart');
            $cart= new ModelCart($oldCart);
            $total = $cart->totalPrice;

            return view ('pages.checkout',$this->data,['total'=>$total,'products'=>$cart->items,]);

        }


        public function insertOrder(Request $req)

        {
            if(!session()->has('cart'))
            {
                return redirect(route('getCart'));
            }

            $oldCart=session()->get('cart');
            $cart = new ModelCart($oldCart);

            $order = new ModelOrders();

            $p=$order->cart =serialize($cart);
            $address=$req->input('address');
            $country=$req->input('country');
            $city=$req->input('city');
            $phone=$req->input('phone');
            $userId=$req->session()->get('user')->id_user;


            $order->insertOrder($address,$country,$city,$phone,$p,$userId);
            session()->forget('cart');
            return redirect(route(('home')))->with('message','Your Order has been placed successfully!');


        }



        public function doContact(Request $request)
        {

            $this->data[]=$request->input('message2');
            \Mail::send('pages.contact',$this->data,function($mail) use ($request){

                $mail->from($request->input('email2'));
                $mail->to('stevan.zdravkovic.309.16@ict.edu.rs')->subject($request->input('message2'));



            });

            return redirect()->back()->with('uspesno','Uspesno ste poslali mail. Uskoro ce Vas kontaktirati nasi operateri!');

        }


        public function contact()
        {

            return view('pages.contact', $this->data);

        }

        public function about()
        {

            return view('pages.about',$this->data);
        }


    }