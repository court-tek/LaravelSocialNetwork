<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use Illuminate\Http\Request;


class SearchController extends Controller
{
    public function getResults(Request $request)
    {
        $query = $request->input('query');

        if (!$query) {
          return redirect()->route('timeline');
        }

        $users = User::where(DB::raw("CONCAT(firstname, ' ', username)"), 'LIKE', "%{$query}%")->get();

        return view('results')->with('users', $users);
    }
 }
