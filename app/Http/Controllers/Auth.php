<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Auth as Authorization;
use stdClass;
use Illuminate\Support\Facades\Session;

class Auth extends Controller
{
    protected function getBlankObject(): \stdClass
    {
        return new \stdClass();
    }
    public function index(){        
        if(Authorization::check()):
            return redirect('admin/dashboard');
        endif;
        return view('admin.login');
    }
    
    
    public function userCheck(Request $request)
    {
        try {
            if ($request->ajax() && $request->isMethod('post')) {
                $validated = $request->validate([
                    'Email' => 'required|email',
                    'password' => 'required',
                ]);
    
                $credentials = $request->only('Email', 'password','user_type');
    
                // Authenticate the user
                if (!Authorization::attempt($credentials)) {
                    return response()->json([
                        'status' => false,
                        'data' => $this->getBlankObject(),
                        'message' => 'Invalid log In credentials!',
                        'redirect' => ''
                    ]);
                } 
                $user = Authorization::user();
    
                // Check user's authorization level
             if($validated){
                if ($user->user_type === 1) {
                    return response()->json([
                        'status' => true,
                        'data' => $this->getBlankObject(),
                        'message' => 'Welcome admin!',
                        'redirect' => '/admin/dashboard'
                    ]);
                }else {
                    // Session::flash();
                    Authorization::logout();

                    return response()->json([
                        'status' => false,
                        'data' => $this->getBlankObject(),
                        'message' => 'User not authorized!',
                        'redirect' => ''
                    ]);
                }
             }
            }   
            return view('admin.login');
    
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'data' => $this->getBlankObject(),
                'message' => 'Oops! Something went wrong!',
                'error' => $e->getMessage(),
            ]);
        }
    }
    
    public function logout(){
        Session::flush();
        Authorization::logout();
        return redirect('/admin/login');
    }

    

    // public function showDashboard()
    // {
        
    //     return view('admin.dash');
    // }

    // //sinup
    // public function singup(Request $request){
    //     return view('admin.Singup');
    //     try{
    //         if($request->ajax() && $request->isMethode('post')){
    //             $validated = $req->validate([
    //                 'username' => 'required',
    //                 'Email' => 'Email|required',
    //                 'password' =>'required'
    //             ]);
    //             dd($validated) ;
    //             dd($request->all());
    //             if($validated){
    //                 $faker=Faker::create();
    //                 $user = new User();
    //                 $user->$Email = $faker->Email;
    //                 $password=  $user->password = $faker->password;
    //                 $cpassword =  $user->cpassword = $faker->cpassword;
    //                 $userSave=$user->save();

    //                 if($password == $cpassword){
                        
    //                 if($userSave){
    //                     return response()->json([
    //                         'status'=>true,
    //                         'data'=>$this->getBlankObject(),
    //                         'meassege'=>'User create successfully',
    //                         'redirect'=>'/admin/login'
    //                     ]);
    //                 }
    //                 else{
    //                     return redirect()->json([
    //                         'status'=>false,
    //                         'data'=>$this->getBlankObject(),
    //                         'meassege'=>'User not create successfully',
    //                         'redirect'=>'/admin/Singup'
    //                     ]);
    //                 }
    //                 }
    //                 else{
    //                     return redirect()->json([
    //                         'status'=>false,
    //                         'data'=>$this->getBlankObject(),
    //                         'messege'=>'password is not match with the confiem password',
    //                         'redirect'=>'/admin/Singup'
    //                     ]);
    //                 }
    
    //             }
    //         }
    //     }
    //     catch(Exception $e){
    //         dd($e);

    //         return response()->json([
    //             'status' => false,
    //             'data' => $this->getBlankObject(),
    //             'error' => $e->getMessege(),
    //             'message' => 'Opps! Error in user created',
    //             'redirect' => '/admin/Singup'
    //         ]);
    //     }
    // }

} 
