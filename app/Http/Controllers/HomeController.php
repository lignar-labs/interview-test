<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //TODO: Set middleware
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('auth/login');
    }

    public function home()
    {
        $users = User::all();

        return view('home', compact('users'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        // dd(json_decode(json_encode($user)));
        return view('edit', compact('user'));
    }
    public function save($id, Request $request)
    {
        $user = User::find($id);
        $user->update($request->all());
        return redirect()->route('truehome');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('truehome');

        // else
        // {
        //     return redirect()->back()->with('error', __('Some Thing Is Wrong!'));
        // }
    }
    public function createUserPage()
    {

        return view('createuser');
    }
    public function create(Request $request)
    {
        //TODO:create user registration logic
        // return User::create([
        //     'name'     => $data['name'],
        //     'email'    => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]);
        // dd($request->all());
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();
        return redirect()->route('truehome')->with('success');
    }
}
