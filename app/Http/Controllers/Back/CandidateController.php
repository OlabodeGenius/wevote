<?php

namespace App\Http\Controllers\Back;
use DB;
use Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CandidateController extends Controller
{
    public function getGovernorship() {

        $governors = DB::table('candidates')
        ->join('parties', 'candidates.party_id', '=', 'parties.id')
        ->select('candidates.*', 'parties.name as party', 'parties.photo as party_logo')
        ->where('candidate_type', '=', 'Governorship Candidate')->get();

       $governor = $governors[0];

        $userId = Auth::user()->id;
       
        $vote = DB::table('votes')
        ->where('candidate_id', '=',  $governor->id)
        ->where('voter_id', '=', $userId)
        ->first();

        if(empty($vote)) {
            // $vote->has_vote = false;
        }

       

        return view('back.governorship', compact('governors', 'vote'));
    }

    public function getPresidential() {

        $presidents = DB::table('candidates')
        ->join('parties', 'candidates.party_id', '=', 'parties.id')
        ->select('candidates.*', 'parties.name as party','parties.photo as party_logo')
        ->where('candidate_type', '=', 'Presidential Candidate')->get();
        return view('back.presidential', compact('presidents'));
    }
}
