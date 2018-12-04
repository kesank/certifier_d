<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;

use App\users_login;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          var_dump(csrf_token());
        //   $users= users_login::all();
        //   foreach ($users as $flight) {
        //       echo $flight->name;
        //   }
        //   var_dump($users);
          return view('content');
          
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        dd($request->input('name'));

        // users_login::firstOrCreate(['name' => $request->input('name'), 'email' => $request->input('email'), 'password' => $request->input('password'),'firstname'=>$request->input('firstname'),'phone'=>$request->input('phone'),'company'=>$request->input('company'),'nickname'=>$request->input('nickname'),'profession'=>$request->input('profession'),'statut'=>$request->input('statut')]);
        // $users= new users_login;
        // $users->name=$request->name;
        // $users->firstname=$request->firstname;
        // $users->nickname=$request->nickname;
        // $users->email=$request->email;
        // $users->company=$request->company;
        // $users->password=$request->password;
        // $users->phone=$request->phone;
        // $users->profession=$request->profession;
        // $users->statut=$request->statut;
        // // return var_dump($users);
       
        // $users->save();
        // $users= new users_login;
        // $users->name='name';
        // $users->firstname='firstname';
        // $users->nickname='nickname';
        // $users->email='email';
        // $users->company='company';
        // $users->password='assword';
        // $users->phone='phone';
        // $users->profession='profession';
        // $users->statut='statut';
        // // return var_dump($users);
       
        // $users->save();
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
    public function update(UserRequest $request, $id)
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
