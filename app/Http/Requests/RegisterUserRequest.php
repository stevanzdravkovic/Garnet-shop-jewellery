<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class RegisterUserRequest extends FormRequest
    {
        /**
         * Determine if the user is authorized to make this request.
         *
         * @return bool
         */
        public function authorize()
        {
            return true;
        }

        /**
         * Get the validation rules that apply to the request.
         *
         * @return array
         */
        public function rules()
        {
            return [
                'email'=>'required|email|unique:user,email|max:60',
                'name'=>'required|regex:/^[A-Z][a-z]{2,11}$/',
                'lastName'=>'required|regex:/^[A-Z][a-z]{2,13}$/',

            ];
        }
    }
