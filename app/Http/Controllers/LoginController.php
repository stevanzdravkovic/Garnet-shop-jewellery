<?php
    /**
     * Created by PhpStorm.
     * User: Steva
     * Date: 3/5/2019
     * Time: 2:37 PM
     */

    namespace App\Http\Controllers;


    use Illuminate\Database\QueryException;
    use Illuminate\Http\Request;

    class LoginController extends BaseController
    {

        public function showRegisterForm()
        {
            return view ('pages.register',$this->data);
        }

        public function doRegister(\App\Http\Requests\RegisterUserRequest $req)
        {
            $ime = $req->input('name');
            $prezime = $req->input('lastName');
            $sifra = $req->input('pwd');
            $mail = $req->input('email');
            $uloga = 2;


            try {
                $this->model->insert($ime, $prezime, $sifra, $mail, $uloga);
                return redirect('/login')->with('success','You are registered now, please sign in  ! ');
            }

            catch (QueryException $e)
            {

                \Log::info("neuspela registracija.." . $e->getMessage());
            }
        }



        public function showLoginForm()
        {


            return view('pages.login',$this->data);
        }



        public function doLogin(Request $req)
        {

            try
            {
                $user= $this->model->getUser($req->input('username'),$req->input('password'));
                session()->put('user',$user);

                $admin= $this->model->getAdmin($req->input('username'),$req->input('password'));
                session()->put('admin',$admin);

                if(session()->get('admin'))
                {
                    return redirect()->route('admin');

                }

                elseif(session()->get('user')) {
                    return redirect()->route('home');
                }
                else
                {
                    return redirect()->back()->with('message','Failed login');
                }
            }


            catch(QueryException $e)
            {
                \Log::info('Failed login!'.$e->getMessage());
            }



        }

    }