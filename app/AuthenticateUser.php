<?php
namespace App;

use Illuminate\Contracts\Auth\Guard;
use Laravel\Socialite\Facades\Socialite;
use App\User;

class AuthenticateUser {

  private $socialite;
  private $auth;

  public function __construct( Socialite $socialite, Guard $guard) {
    $this->socialite = $socialite;
    $this->auth = $guard;
  }
  public function execute($hasCode, $listener, $provider) {

    if ( ! $hasCode) {
      return $this->getAuthorizationFirst($provider);
    }
    //dd(Socialite::driver($provider)->user());
    $user = $this->findOrCreateUser($this->getSocialUser($provider), $provider);

    $this->auth->login($user, true);

    return redirect('dash');
  }

  private function getAuthorizationFirst($provider) {
    //dd(Socialite::driver($provider));
      return Socialite::driver($provider)->redirect();
  }

  private function getSocialUser($provider) {
      return Socialite::driver($provider)->user();
  }

  private function findOrCreateUser($socialUser, $provider)
    {

        if ($authUser = User::where('email', $socialUser->email)->first()) {
            return $authUser;
        }
        //dd($socialUser);
        return User::create([
            'name' => $socialUser->name,
            'email' => $socialUser->email,
            'avatar' => $socialUser->avatar,
            'provider' => $provider,
            'provider_id' => $socialUser->id,
        ]);

    }

}
