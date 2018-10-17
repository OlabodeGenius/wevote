<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Image;
use App\Candidate;

class BackController extends Controller
{
    public function getIndex() {
        
        $parties = DB::table('parties')->count();

        $governorship = DB::table('candidates')->where('candidate_type', '=', 'Governorship Candidate')->count();
        $presidential = DB::table('candidates')->where('candidate_type', '=', 'Presidential Candidate')->count();

        return view('back.dashboard',compact('parties', 'governorship', 'presidential'));
    }

    public function candidate() {
        $parties = DB::table('parties')->get();
        return view('back.candidate', compact('parties'));
    }

    public function postCandidate(Request $request) {

        $this->validate($request,[
            'party' => 'required',
            'state' => 'required',
            'lga' => 'required',
            'candidate_type' => 'required',
            'name' => 'required',
            'photo' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $file_name = $request->file('photo')->getRealPath();;
        Cloudder::upload($file_name, null);
        list($width, $height) = getimagesize($file_name);
        $public_Id = Cloudder::getPublicId();
        $file_url= Cloudder::show($public_Id, ["width" => $width, "height"=>$height]);
        
        // $originalImage= $request->file('photo');
        // $thumbnailImage = Image::make($originalImage);
        // $originalPath = public_path().'/img/candidate/';
        // $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());
        // $thumbnailImage->resize(150,150);
    
        $candidate = new Candidate();
        $candidate->name = $request->input('name');
        $candidate->state_id = $request->input('state');
        $candidate->lga_id = $request->input('lga');
        $candidate->candidate_type = $request->input('candidate_type');
        $candidate->bio = $request->input('bio');
        $candidate->party_id = $request->input('party');
        // $candidate->photo = time().$originalImage->getClientOriginalName();
        $candidate->photo = $file_url;
        $candidate->save();
        
        return back()->with('success', 'Candidate added successfully');

    }

    public function getGovernorship() {

        $governors = DB::table('candidates')
        ->join('parties', 'candidates.party_id', '=', 'parties.id')
        ->select('candidates.*', 'parties.name as party')
        ->where('candidate_type', '=', 'Governorship Candidate')->get();
        return view('back.governship-candidate', compact('governors'));
    }

    public function getPresidential() {

        $presidents = DB::table('candidates')
        ->join('parties', 'candidates.party_id', '=', 'parties.id')
        ->select('candidates.*', 'parties.name as party')
        ->where('candidate_type', '=', 'Presidential Candidate')->get();
        return view('back.presidential-candidate', compact('presidents'));
    }

    public function getparties() {

        $parties = DB::table('parties')->get();
        return view('back.party', compact('parties'));
    }
}
