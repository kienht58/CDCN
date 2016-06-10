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
use App\Models\Category;

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
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $destinationPath = "upload/avatar";
            $fileName = $request->username . $avatar->getClientOriginalName();
            $success = $avatar->move($destinationPath, $fileName);
        }
        else {
            $fileName = "avadefault.png";
        }

        return User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'activation_code' => str_random(60) .  $request->email,
            'role' => 'user',
            'avatar' => $fileName,
        ]);
    }

    public function showLoginForm_2()
    {
        $categories = Category::all();

        return view('auth.login', compact('categories'));
    }

    public function showRegistrationForm_2()
    {
        $categories = Category::all();
        return view('auth.register', compact('categories'));
    }

    public function postLogin(Request $request)
    { 
        $active = User::where('username', $request->username)->value('active');
        //dd($active);
        if ($active === null) {
            return redirect()->back()->with('message', 'Tài khoản không tồn tại. Hãy đăng ký tài khoản mới');
        }
        if ($active == 0) {
            return redirect()->back()->with('message', 'Chưa kích hoạt tài khoản. Kiểm tra lại email để kích hoạt');
        }
        return $this->login($request);
    }

    public function doRegister(Request $request)
    {
        //dd($request);
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
