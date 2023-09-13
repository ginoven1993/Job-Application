<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
     /** @var UserRepository */
     private $userRepository;

     public function __construct(UserRepository $userRepo)
     {
         $this->userRepository = $userRepo;
     }
 

     /**
      * Show the form for editing the specified User.
      *
      * @return JsonResponse
      */
      
     public function editProfile()
     {
         $user = getAuth()::user();
 
         return $this->sendResponse($user, 'User retrieved successfully.');
     }
}
