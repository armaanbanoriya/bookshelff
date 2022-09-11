<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Auth\Authenticatable;
use App\User;
use League\OAuth2\Client\Credentials\TokenCredentials;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function ___construct()
    {
        $this->middleware('guest')->except('logout');

    }


    public function redirectToProvider($service)
    {
        return Socialite::driver($service)->redirect();
    }

    public function handleProviderCallback($service)
    {
        $data= new User();

        // dd($data);
        try {

            if($service=='twitter'){

                $user = Socialite::driver($service)->user();
            }else{
                $user = Socialite::driver($service)->stateless()->user();
            }

            // $accessTokenResponseBody = $user->accessTokenResponseBody;
            $finduser = User::where('email', $user->getEmail())->first();

            if($finduser){
                Session::put('armaanbanoriya',$finduser['email']);

                Auth::login($finduser,true);

                return redirect('/');


            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,

                    'role' => 'true',
                    'password' => encrypt('FNDJK#R##*RU3483uHrereD#*URU(#*$')
                ]);

                Session::put('armaanbanoriya',$finduser['email']);

                Auth::login($newUser);

                return redirect('/');
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }



}
