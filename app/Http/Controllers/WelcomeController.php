<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        // $user = User::find(1); 
        // // //     // $user = User::query()->create([
        // // //     //     'name' => 'Felipe',
        // // //     //     'email' => 'felipe@email.com',
        // // //     //     'password' => 'jeremias',

        // // //     // ]);

        // // //       dd($user->email_verified_at) ;
             


        // Auth::login($user);
        return view('welcome'); 
    }
}
