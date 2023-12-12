<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use App\Models\UserLogin;
use Session;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login')->with('err','');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userreg')->with('err','');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,UserLogin $login)
    {
        $login->Username=$request->Username;
        $login->Password=Hash::make($request->Password);
        if($request->Password==$request->CPassword)
        {
        $login->save();
        
        return view('login')->with('err','');
        }
        else
        {
        return view('userreg')->with('err','Password not matched');
            }

    }
    public function login(Request $request)
    {
        $uname=$request->input('Username');
        $pwd=$request->input('Password');
        $checklogin=UserLogin::where(['Username'=>$uname])->get();
        if(count($checklogin)>0)
        {
        $password=$checklogin[0]['Password'];
            if(Hash::check($pwd,$password))
            {
            $request->session()->put('UNAME',$uname);
            
            
        
            //return view('home');
            return redirect('/home');
            }
            else
            {
            return view('login')->with('err','Invalid Pasword');
            }
        }
        else {
        return view('login')->with('err','invalid user');
        }
    }

    public function logout(Request $request)
    {
        if($request->session()->has('UNAME')){
        $request->session()->forget('UNAME');
        }
        return redirect('/');
    }
    public function error()
    {
        return view('error');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
