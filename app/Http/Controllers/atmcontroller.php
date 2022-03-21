<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;

class atmcontroller extends Controller
{

    public function login(){
        return view('login');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function signup(){
        return view('signup');
    }

    public function transaction(){
        $name = session('uniname');
        $balance = DB::table('atmuser')->where('name', '=' ,$name)->value('balance');
        return view('transaction',['name' => $name , 'balance' => $balance]);
    }

    public function loginvalidation(Request $request){

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

     $user = DB::table('atmuser')->where('username', '=', $username)->where('password', '=', $password)->get();
     $usercount = $user->count();
     $name = DB::table('atmuser')->where('username', '=' ,$username)->where('password', '=', $password)->pluck('name');

     $request->session()->put('uniname', $name);
     
     $balance = DB::table('atmuser')->where('username', '=' ,$username)->where('password', '=', $password)->pluck('balance');

        if (!$usercount == 0) {
            return view('transaction', ['name' => $name , 'balance' => $balance]);
        }
        else {
            return view('login');
        }

    }

    public function signupvalidation(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $name = $request->input('name');
        $username = $request->input('username');
        $password = $request->input('password');
        $type = 'Newly SignedUp';
        $balance = 3000;
        $data=array('name'=>$name,"username"=>$username,"password"=>$password,"balance"=>$balance,"created_at" =>  \Carbon\Carbon::now(),"updated_at" => \Carbon\Carbon::now());
        DB::table('atmuser')->insert($data);
        $data2=array('name'=>$name,"username"=>$username,"type"=>$type,"transacmoney"=>$balance,"created_at" =>  \Carbon\Carbon::now(),"updated_at" => \Carbon\Carbon::now());
        DB::table('history')->insert($data2);

        return view('login');

    }

    public function withdraw(Request $request){

        $this->validate($request, [
            'withdraw' => 'required'
        ]);

        $value = session('uniname');

        $withdraw = (int)$request->input('withdraw');
        $type = 'Withdraw';

        $balance = DB::table('atmuser')->where('name', '=' ,$value)->value('balance');
        $username = DB::table('atmuser')->where('name', '=' ,$value)->pluck('username');

            $newbalance =  $balance - $withdraw;
            DB::table('atmuser')->where('name', $value)->update(array('balance' => $newbalance));
            $data=array('name'=>$value,"username"=>$username,"type"=>$type,"transacmoney"=>$withdraw,"created_at" =>  \Carbon\Carbon::now(),"updated_at" => \Carbon\Carbon::now());
            DB::table('history')->insert($data);

            return view('login');

    }

    public function deposit(Request $request){
        $this->validate($request, [
            'deposit' => 'required'
        ]);

        $value = session('uniname');

        $deposit = (int)$request->input('deposit');
        $type = 'Deposit';

        $balance = DB::table('atmuser')->where('name', '=' ,$value)->value('balance');
        $username = DB::table('atmuser')->where('name', '=' ,$value)->pluck('username');

            $newbalance =  $balance - $deposit;
            DB::table('atmuser')->where('name', $value)->update(array('balance' => $newbalance));
            $data=array('name'=>$value,"username"=>$username,"type"=>$type,"transacmoney"=>$deposit,"created_at" =>  \Carbon\Carbon::now(),"updated_at" => \Carbon\Carbon::now());
            DB::table('history')->insert($data);

            return view('login');
    }


}
