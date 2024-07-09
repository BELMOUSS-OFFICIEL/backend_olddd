<?php

// namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
// use Socialite;
// use App\Models\User;
// use Exception;
// use Illuminate\Http\Request;
// use Laravel\Socialite\Facades\Socialite;

// class socilaliteControllerApi extends Controller
// {
    //
// public function redirectToGoogle(){
  // return Socialite::driver('google')->redirect();
  // return Socialite::driver('google')->redirect();
  // return Socialite::driver('google')->stateless()->redirect();
  // return Socialite::driver('google')->redirect();

// }

// public function handleGoogleCallback(Request $request){
  // try{
    // $request->setLaravelSession(app('session')->driver());
    // $request->setLaravelSession(app('session')->driver());
    //     $user = Socialite::driver('google')->user();
    // $user = Socialite::driver('google')->user();
    // dd($user);
    // $finduser=User::where('social_id',$user->id)->first();
    // if($finduser){
    //   return response()->json([
    //     'error'=>true,
    //     'message'=>'get to login',
    //   ]);
      
    // }else{
      
      // $user=User::create([
      //   'name'=>$user->name,
      //   'email'=>$user->email,
      //  'social_id'=>$user->id,
      // ]);
      // return response()->json([
      //   'error'=>false,
      //  'message'=>'get to register',
      //   'data'=>$user,
      // ]);
    // }
  
//   }catch(Exception $e){
// dd($e->getMessage());
//   }

// try {
  // $user = Socialite::driver('google')->stateless()->user();
  // يمكنك استخدام $user للحصول على بيانات المستخدم والتحقق منها هنا
  // $request->setLaravelSession(app('session')->driver());
  // return response()->json(['user' => $user->getName()]);
// } catch (\Exception $e) {
//   return response()->json(['error' => $e->getMessage()], 500);
// }
// }


    
// }
