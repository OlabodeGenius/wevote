<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class IndexController extends Controller
{
    public function index() {

        $parties = DB::table('parties')->count();
        $users = DB::table('users')->count();
        $votes = DB::table('votes')->count();
        $candidates = DB::table('candidates')->count();


        return view('front.index', compact('parties', 'users', 'votes', 'candidates'));
    }
}
