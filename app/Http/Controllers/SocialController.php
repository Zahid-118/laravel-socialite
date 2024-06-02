<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    public function provider($provider)
    {
        $provider = $provider === 'linkedin' ? 'linkedin-openid' : $provider;
        return Socialite::driver($provider)->redirect();
    }

    public function providerCallback($provider)
    {
        $provider = $provider === 'linkedin' ? 'linkedin-openid' : $provider;
        $user = Socialite::driver($provider)->stateless()->user();
        $data = User::where('email',$user->email)->first();

            if(is_null($data)){
                $users['name'] = $user->name;
                $users['email'] = $user->email;
                $users['password'] = 'kaleem';
                $data = User::create($users);
            }

            Auth::login($data);
            return redirect('');
    }
}
