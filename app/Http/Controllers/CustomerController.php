<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function loginCustomer() {
        if (session('customer_id')) {
            return redirect('/storeIndex');
        }
        return view('storePage.Login_Customer.login_customer');
    }

    public function login_customerProcess(Request $request) {
        $customer = Customer::where('email','=',$request->email)->first();
        $password = Customer::where('password','=',$request->password)->first();
        if ($customer == true) {
            if ($password == true) {
                $request->session()->put('customer_id', $customer->customer_id);
                $request->session()->put('customer_name', $customer->customer_name);
                $request->session()->put('password', $customer->password);
                return redirect('storeIndex');
            }
            else {
                return back()->with('fail','Password does not match');
            }
        }
        else {
            return back()->with('fail','This email is not registered');
        }
    }

    public function logout_customer(Request $request) {
        $request->session()->forget('customer_id');
        $request->session()->forget('customer_name');
        $request->session()->forget('password');
        $request->session()->forget('shopping_cart');
        return redirect('storeIndex');
    }

    public function register_customer() {
        if (session('customer_id')) {
            return redirect('/storeIndex');
        }
        return view('storePage.Login_Customer.register');
    }

    public function register_customer_process(Request $request) {
        $customer_name = $request->customer_name;
        $email = $request->email;
        $phone_number = $request->phone_number;
        $address = $request->address;
        $customer_password = $request->customer_password;
        $customer_confirm_password = $request->customer_confirm_password;
        if ($customer_password == $customer_confirm_password) {
            DB::table('customers')->insert([
                'customer_name' => $customer_name,
                'email' => $email,
                'phone_number' => $phone_number,
                'address' => $address,
                'password' => $customer_confirm_password
            ]);
            return view('storePage.Login_Customer.login_customer')->with('notification', 'Register successful!');;
        }
        else {
            return back()->with('notification', 'Incorrect new password or confirm new password! Please try again');
        }
    }

    public function customer_profile() {
        $customer_info = Customer::where('customer_id', '=', session('customer_id'))->get();
        return view('storePage.Customer.customer_profile', compact('customer_info'));
    }

    public function edit_profile($customer_id)
    {
        $obj = Customer::find($customer_id);
        return view('storePage.Customer.edit_customer_profile', compact('obj'));
    }
    public function update_profile(Request $request, $customer_id) {
        $customer_name = $request->customer_name;
        $email = $request->email;
        $phone_number = $request->phone_number;
        $address = $request->address;
        DB::table('customers')->where(["customer_id" => $customer_id])->update([
            'customer_name' => $customer_name,
            'email' => $email,
            'phone_number' => $phone_number,
            'address' => $address
        ]);
        session()->put('customer_name', $customer_name);
        return redirect("/storeIndex/customer_profile")->with('notification', 'Update Profile Successfully!');
    }

    public function change_password($customer_id) {
        $obj = Customer::find($customer_id);
        return view('storePage.Customer.Customer_Password.change_password', compact('obj'));
    }

    public function update_password(Request $request, $customer_id) {
        if ($request->password === session('password')) {
            $new_pass = $request->new_password;
            $confirm_pass = $request->confirm_new_password;
            if ($new_pass === $confirm_pass) {
                DB::table('customers')->where(["customer_id" => $customer_id])->update([
                    'password' => $confirm_pass
                ]);
                session()->put('password', $confirm_pass);
                return redirect("/storeIndex/customer_profile")->with('notification', 'Update Password Successfully!');
            }
            else {
                return back()->with('notification', 'Incorrect new password or confirm new password! Please try again');
            }
        }
        else {
            return back()->with('notification', 'Incorrect current password! Please try again');
        }
    }
}
