<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\User;
use App\Cart;
use App\Http\Requests\LoginRequest;

class UserController extends Controller
{



    public function loginRegister()
    {
        return view('front.register');
    }

    public function registerusers(Request $request)
    {
        if($request-> isMethod('post')){

            $data = $request->all();
            // echo "<pre>"; print_r($data); die;

            // check user already exist
            $userCount=User::where('email',$data['email'])->count();
            if($userCount>0){
                // $message="Email already exists!";
                // session::flash('error_message',$message);
                return redirect()->back()->with('message','Email alredy exists') ;

            }else{
                $user = new User;

                $user -> name = $data['name'];
                $user -> email = $data['email'];
                $user -> password = bcrypt($data['password']);
                $user -> status = 0;
                $user -> role = 1;

                $user->save();

                // Send SMS



                // Email Verification
                $email = $data['email'];
                $messageData=[
                    'email' => $data['email'],
                    'name' => $data['name'],
                    'code' => base64_encode($data['email'])
                ];
                Mail::send('front.emails.confirmation',$messageData,function($message) use($email){
                    $message->to($email)->subject('Confirm your Email Account ');
                } );
                // SMS
                // $message= "Thank You for registering your order";
                // $mobile="7470553230";
                // SMS::sendSMS('$message','$mobile');

                // return user with success message
                return redirect()->back()->with('message','Mail has been sent to your registered Email! Kindly verify your account.') ;


                return redirect('cart');
            }
        }
    }

    public function checkEmail(Request $request)
    {
        $data = $request->all();
        $emailCount = User::where('email',$data['email'])->count();
        if($emailCount > 0)
        {
            return "false";
        }else{
           return "true";
        }
    }

    public function confirmAccount($email)
    {
        $email = base64_decode($email);
        // Check EMaill in database
        $userCount = User::where('email',$email)->count();
        if($userCount>0){
            // User Email already activated
            $userDetails = User::where('email',$email)->first();
            if($userDetails->status == 1){
                return redirect('signin')->with('message','Your Account is already activated. please login.');
            }else{
                User::where('email',$email)->update(['status' =>1]);

                // // Send register email
                // $email= $user['email'];

                // $messageData= [
                //     'name'=>$data['name'],
                //     'email'=>$data['email']
                // ];
                // Mail::send('front.emails.emailregister',$messageData,function($message)use($email){
                //     $message->to($email)->subject('Welcome to Bookshelf Ecommerce');

                // });


                return redirect('signin')->with('message','Account Activated Successfully. kindly login!');



            }
        }else{
            abort(404);
        }
    }

    public function login()
    {
        return view('front.login');
    }


    public function loginUser(LoginRequest $request)
    {

        $session_id=Session::getId();
        $data=$request->all();
        // dd($data);
        $check_role=User::where('email',$data['email'])->first();
        // dd($check_role);

        if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'role'=>$data['role']]))
        {
            if($check_role->role==0)
            {
                return redirect('dashboard')->with('l_success','Admin Login Successfull');
            }elseif($check_role->role==1){

                 // Check User Verification
                     $userStatus = User::where('email',$data['email'])->first();
                    if($userStatus->status == 0){
                        Auth::logout();
                        return redirect()->back()->with('error','Your Account is not activated yet. Kindly verify your Email.');
                    }
            Session::put('armaanbanoriya',$data['email']);

            Cart::where('session_id',$session_id)->update(['useremail'=>$data['email']]);
    		return redirect('cart')->with('l_success','Login Successfull');

            $email=Auth::users()->email;
            $cart=Cart::where(['session_id'=>$session_id])->get();
            DB::table('carts')->where('session_id',$session_id)->update(['email',$email]);
            // print_r($session_id);
            // die;

            }else{
                return redirect('cart')->with('l_success','Admin Login Successfull');
            }

        }else{
            return redirect()->back()->with('error','Invalid Username & Password');
        }

    }

    public function logout()
    {

        Auth::logout();
        Session::forget('armaanbanoriya');
        return redirect('/')->with('lo_success','Logout Successfull');
    }

    public function forgotpassword(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            $emailCount=User::where('email',$data['email'])->count();
            if ($emailCount==0) {
                return redirect()->back()->with('message','Email does not exists');
            }
            // Random Password
            $random_password = Str::random(8);
            // encode new password
            $new_password= bcrypt($random_password);

            // update password
            User::where('email',$data['email'])->update(['password'=>$new_password]);

            // User Name
            $userName= User::select('name')->where('email',$data['email'])->first();
            // send password
            $email=$data['email'];
            $name=$userName->name;
            $messageData=[
                'email' => $email,
                'name'  => $name,
                "password" => $random_password

            ];
            Mail::send('front.emails.forgotpassword',$messageData,function($message)use($email){
                $message->to($email)->subject('New Password - Bookshelf');
            });
            return redirect('signin')->with('message','Password sent to your email successfully');
        }
        return view('front.forgot');
    }


    // New Code ENd





}
