<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;
use DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Mail;
use App\Mail\VerifyMail;
use App\Mail\WelcomeMail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function register(Request $request) { 

        $validator = Validator::make($request->input(),
        [
                'email' => 'required|email|unique:users',
                'name' => 'required|string',
                'mobile' => 'digits_between:11,13',
                'state' => 'exists:states,id',
                'lga' => 'exists:lgas,id',
                'password' => 'required|min:8',
                'confirm_password' => 'required|same:password',
            ]);

        if($validator->fails()) {
            $response['alert-type'] = 'warning';
            $response['message'] = $validator->errors();
            return redirect()->back()->withInput()->withErrors($response['message']);
        }
        
            
            $postData = $request->all();

            $insertData['name'] = $request->input('name');
            $insertData['email'] = $request->input('email');
            $insertData['mobile'] = $request->input('mobile');
            $insertData['user_type'] = $request->input('user_type');
            $insertData['dob'] = $request->input('dob');
            $insertData['state'] = array_key_exists('state', $postData) ? $request->input('state') : null;
            $insertData['lga'] = array_key_exists('lga', $postData) ? $request->input('lga') : null;
            $insertData['activation_token'] = Str::random(40);
            $insertData['remember_token'] = Str::random();
            $insertData['password'] = $password = Hash::make($request->input('password'));
            $insertData['created_at'] = Carbon::now();
            $insertData['updated_at'] = Carbon::now();

            $user = User::create($insertData);
            if(!$user) {
                $response['alert-type'] = 'danger';
                $response['error'] = "Unable to create account. Please try again";
    
                return $response;
            }

            Mail::to($user->email)->send(new VerifyMail($user));

            return redirect()->to('/login')->with('success', 'Registration successful, kindly check your email to activate your account');    
        
    }

    public function signupActivate($token)
    {
        $user = User::where('activation_token', $token)->first();
        if(isset($user) ){
            if(!$user->email_verified) {
                $user->email_verified = true;
                $user->activation_token = '';
                $user->save();
                $status = "Your e-mail is verified. You can now login.";
                Mail::to($user->email)->send(new WelcomeMail($user));
            }else{
                $status = "Your e-mail is already verified. You can now login.";
            }
        }else{
            return redirect('/login')->with('warning', "Sorry your email cannot be identified.");
        }
 
        return redirect('/login')->with('status', $status);

    }
}
