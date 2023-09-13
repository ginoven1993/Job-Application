<?php

namespace App\Http\Controllers;

use App\Http\Resources\Partenaire as PartenaireResource;
use App\Http\Resources\User as UserResource;
use App\Models\Admins;
use App\Models\Feedbacks;
use App\Models\Partenaires;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * @group  Api Token
     * Update the authenticated user's API token.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function setToken(Request $request)
    {

       $token = "Task@2023";
       User::where(['id' => 1])->update([
           'token' => bcrypt($token)
       ]);

       return ['token' => $token];
   }

}
