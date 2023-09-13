<?php

namespace App\Http\Controllers;

use App\Http\Resources\User as UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class ApiAuthController extends Controller
{
    /**
     * @group  Api Authentification User
     *
     */
    public function login(Request $request)
    {
        $args = array();
        $args['error'] = false;
        $email = $request->email;
        $password = $request->password;
        try {
            if (User::where(['email' => $email])->first()) {
                $user = User::where(['email' => $email, 'password' => $password])->first();
                $args['user'] = new UserResource($user);
                $args['message'] = "Informations recovered successfully!";
            } else {
                $otp = getRamdomInt(4);
                $args['error'] = true;
                $args['otp'] = $otp;
            }

        } catch (\Exception $e) {
            $args['error'] = true;
            $args['error_message'] = $e->getMessage();
            $args['message'] = "Error in recovered  information";
        }
        return response()->json($args);
    }

    /**
     * @group  Api Authentification User
     *
     */
    public function register(Request $request)
    {
        $args = array();
        $args['error'] = false;
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        try {
            if (!User::where(['email' => $email])->first()) {
               
                $user = User::create([
                    'name' => $name,
                    'token' => getRamdomText(20),
                    'email' => $email,
                    'password' => $password,
                    'status' => 1,
                ]);  

           

            $user = User::where(['email' => $email])->first();
            $args['user'] = new UserResource($user);
            $args['message'] = "User register successfully!";
        } else {
            $args['error'] = true;
        }

    } catch (\Exception $e) {
        $args['error'] = true;
        $args['error_message'] = $e->getMessage();
        $args['message'] = "Error with registration ";
    }
    return response()->json($args);
}
}
