<?php


function makeUser($email, $password) {
    
    $user = new App\Models\User;
    
    $user->name = strstr($email, '@', true);
    $user->email = $email;
    $user->password = bcrypt($password);
    
    $now = now();
    $user->email_verified_at = $now;
    $user->remember_token = $now;
    $user->created_at = $now;
    $user->updated_at = $now;

    $user->save();

    return $user;
}