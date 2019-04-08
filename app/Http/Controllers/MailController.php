<?php
    /**
     * Created by PhpStorm.
     * User: Steva
     * Date: 3/12/2019
     * Time: 7:23 PM
     */

    namespace App\Http\Controllers;
    use Illuminate\Http\Request;


    class MailController extends UnAuthorizedController
    {
        public function doContact(Request $request)
        {

            $this->data[]=$request->input('message2');



            \Mail::send('pages.mail',
                ['Message' =>$request->input('message2')],
                function($mail) use ($request){

                    $mail->from($request->input('email2'));
                    $mail->to('stevan.zdravkovic.309.16@ict.edu.rs')->subject('Customer Enquiry');

                });

            return redirect()->back()->with('message','Thanks for contacting us !');

        }

        public function contact()
        {

            return view('pages.contact', $this->data);

        }


    }