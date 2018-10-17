<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vote;
use Auth;
use Session;
use DB;

class VoteController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function vote(Request $request) {

        // $hasvote = DB::table('votes')->get();

        // $hasvote = $hasvote[0];

        // $voter_id = Auth::user()->id;

        // if($hasvote->voter_id == $voter_id && $hasvote->has_vote == true) {
        //     Session::flash('warning', 'You already voted');
        //     return redirect()->back();
        // }

        $vote = Vote::create([
            'candidate_id' => $request->input('candidate'),
            'voter_id' => Auth::user()->id,
            'state_id' => $request->input('state'),
            'has_vote' => true,
        ]);
        
        Session::flash('success', 'vote successfully');
        return redirect()->back();
        
      
    }
}
