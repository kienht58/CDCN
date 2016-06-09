<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Illuminate\Http\Request;
use Response;
use Auth;
use Mail;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';
    protected $username = 'username';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(Request $request)
    {
        $avatar = $request->file('avatar');
        $destinationPath = "uploads/logo";
        $fileName = "ava".$request->username;
        $success = $avatar.move($destinationPath, $fileName);

        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'activation_code' => str_random(60) .  $data['email'],
            'role' => 'user',
        ]);
    }

    public function postLogin(Request $request)
    {
        $active = User::where('username', $request->username)->value('active');

        if ($active == 0) {
            return redirect()->back()->with('message', 'Chưa kích hoạt tài khoản. Kiểm tra lại email để kích hoạt');
        }
        return $this->login($request);
    }

    public function doRegister(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $user = $this->create($request);

        $data = [
            'username' => $user->username,
            'code' => $user->activation_code
        ];

        $input = $request->all();

        $this->sendEmail($data, $input);
        return redirect()->route('dashboard.index');
    }

    public function sendEmail($data, $input)
    {
        Mail::send('auth.emails.register', $data, function($message) use ($input) {
            $message->from('cdcn.linkneverdie@gmail.com', 'Link Never Die');
            $message->to($input['email'], $input['username'])->subject('Please verify your account registration!');
        }); 
    }

    public function activate($code)
    {
        $user = User::where('activation_code', $code)->first();
        
        if($user){
            $user->update(['active' => 1]);
            \Auth::login($user);
            return redirect()->route('dashboard.index');
        }    
    }
}
