<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function getDashboard($username)
    {
        $user = User::where('username', $username)->first();

        if (!$user) {
          abort(404);
        }
        return view('profile.index')->with('user', $user);
        // Fetch from the DB baseed on slug
        // $user = User::where('slug', '=', $slug)->first();
        // return the view and pass in the post object
        // return view('dashboard')->withUser($user);
    }

    public function postSignUp(Request $request)
    {


        $this->validate($request, [
          'email' => 'required|email|unique:users',
          'firstname' => 'required|max:120',
          'username' => 'required|max:120',
          'password' => 'required|min:4'
        ]);

        $email = $request['email'];
        $firstname = $request['firstname'];
        $username = $request['username'];
        $slug = $request['slug'];
        $password = bcrypt($request['password']);
        $user = new User();
        $user->email = $email;
        $user->firstname = $firstname;
        $user->username = $username;
        $user->slug = $username;
        $user->password = $password;
        $user->save();
        Auth::login($user);
        return redirect()->route('timeline');
    }

    public function postSignIn(Request $request)
    {
        $this->validate($request, [
          'email' => 'required',
          'password' => 'required'
        ]);
        if (!Auth::attempt($request->only(['email', 'password']), $request->has('remember'))) {
          return redirect()->back();
        }

        return redirect()->route('timeline');
    }

    public function getLogout()
    {
      Auth::logout();
      return redirect()->route('home');
    }
}
