<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Mail\virefierMail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    //
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'nom'=>'required|string',
            'prenom'=>'required|string',
            'tele'=>'required|string',
        ]);
        try {
            if ($request) {
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => $request->password,
                ]);
                if ($user) {
                    $profile = Profile::create([
                        'nom' => $request->nom,
                        'prenom' => $request->prenom,
                        'tele' => $request->tele,
                        'user_id' => $user->id,


                    ]);
                    if(!$profile){
                        User::destroy($user->id);
                    }else{
                        $token=$user->createToken("personal access token")->plainTextToken;
                        $user->token=$token;
                        $user->nom=$profile->nom;
                        $user->prenom=$profile->prenom;
                        $user->tele=$profile->tele;
                    };
                    Mail::to($request->email)->send(new virefierMail($user,$profile));
                    
// dd($user);
                    return response()->json([
                        'message' => 'success',
                        // 'message' =>'regester seccussfuly',
                        'data' =>$user,
                    ]);
                }

                // $token=$user->createToken("personal access token")->plainTextToken;
                // $user->token=$token;
            }
        } catch (Exception $e) {
            return response()->json([
                'error' => true,
                'message' => $e->getMessage(),
            ]);
        }
    }



    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        $user = User::with('profile')
            ->where('email', $request->email)
            
            ->first();
        if ($user && Hash::check($request->password, $user->password)) {
            $token = $user->createToken('password');
            $user->token=$token->plainTextToken;
            if($user->email_verified_at==null){
              return response()->json(
                  [
                     'status' => 'error',
                     'message' =>'email not verified',

                  ]);
            }
            return response()->json([
                'status' => 'success',
                'message' =>'login seccussfuly',
                'data' =>$user,
            ]);
        }else{
        return response()->json(
            [
                'status' =>'error',
                'message'=> 'not authenticated'

            ]);
    }

    }
    public function verifierEmail($token){
      $tokenD=explode('///',base64_decode($token));
      $id=  $tokenD[1];
      $createdAt=  $tokenD[0];
      // dd($tokenD);
      $user=User::findOrFail($id);
      $user->email_verified_at=time();
      $user->save();
      $nom=$user->profile->nom;
      return view('emails.success',compact('nom'));
    }
}
