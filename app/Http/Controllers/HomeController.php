<?php

namespace App\Http\Controllers;
Use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User
;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function create()
    {
        return view('dashboard.register');
        return redirect('/home');
    }

    public function store(Request $request)
    {
      $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
         ]);

      $user = new User;
          $user-> name       = $request->name;
          $user -> email        = $request->email;
          $user -> password          = Hash::make($request->password);
          $user->save();
    return redirect('/home')->with('success','User berhasil dibuat!');

    }

    public function edit($id)
    {
      $user = User::find($id);
      if(!$user)
      abort(404);

      return view('dashboard/edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
      $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|',
        'password' => 'required|string|min:6|confirmed',
         ]);

    $user = User::find($id);
    $user-> name        = $request->name;
    $user -> email      = $request->email;
    $user -> password   = Hash::make($request->password);
    $user->save();
    return redirect('/home')->with('success','Data User berhasil dirubah!');
    }



}
