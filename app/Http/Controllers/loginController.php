<?php

namespace App\Http\Controllers;

use App\Models\loginModel;
use Illuminate\Http\Request;
use App\Models\userAccount;

use function Laravel\Prompts\password;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        //
        return view('login.login');
    }

    public function signup()
    {
        //
        return view('login.signup');
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function check_login(Request $request)
    {
        //
        $check_email = loginModel::where(['email' => $request->email, 'password' => $request -> password])
        ->count();
        
        if($check_email == 1)
        {
            $userData = loginModel::where(['email' => $request->email, 'password' => $request->password])->first();
            $username = $userData->username;
            $id = $userData->id;
            $request->session()->put(['username'=> $username, 'id'=> $id]);
            return redirect('user/home');
        }
        else
        {
            return redirect('login/login')->with('error_msg', 'invalid credentials');
        }

       //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //


        $data = new loginModel;
        $data -> firstname = request('fname');
        $data -> lastname = request('lname');
        $data -> email = request('email');
        $data -> password = request('password');
        $data -> username = request('username');
        $data -> tel = request('tel');
        $data -> save();
        $request->session()->put('username', $data->username);
        $userId = $data->id;
        $request->session()->put('id', $userId);

        $user = new userAccount;
        $user -> email = request('email');
        $user -> user_id = $data->id;
        $user -> username = request('username');

        $user -> save();

        return redirect('user/home');

    }

    /**
     * Display the specified resource.
     */
    public function home(Request $request)
    {
        //
        $username = $request->session()->get('username');
        $id = $request->session()->get('id');
        $data = ['username' => $username, 'id' => $id];

        return view('user.home', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
