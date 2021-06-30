<?php


namespace App\Http\Controllers;



use Illuminate\Http\Request;

class UserController
{
    public function register()
    {
        return view('user.register');
    }

    public function registerProcessing(Request $request)
    {
        $firstName = $request->get('firstname');
        $lastName = $request->get('lastname');
        $country = $request->get('country');
        return sprintf('Welcome to admin page > FirstName: %s, LastName: %s, Country: %s', $firstName, $lastName, $country);
    }

    public function login(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $password = $request->get('password');
        return sprintf('Welcome to admin page: name %s , email %s , password %s ', $name, $email, $password);
    }

    public function getUserDetail($id)
    {
        return 'hello path' . $id;
    }

    public function registerCustomer()
    {
        return view('user.registerCustomer');
    }

    public function showInformation(Request $request)
    {
        $fullName = $request->get('fullName');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $address = $request->get('address');
        $identityCard = $request->get('identityCard');
//        return sprintf('Successful registration of your information is: fullName %s, email %s, phone %s, address %s, identityCard %s',
//            $fullName, $email, $phone, $address, $identityCard);
        return view('user.detail_account')
            ->with('fullName',$fullName)
            ->with('email',$email)
            ->with('phone',$phone)
            ->with('address',$address)
            ->with('idCard',$identityCard);
    }
}
