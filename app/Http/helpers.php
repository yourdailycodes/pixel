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


function shorten($text, $length=100, $strip=true){
    $text = $strip ? strip_tags($text) : $text;
    return mb_strlen($text) > $length ? (mb_substr($text, 0, $length, 'utf8').'...') : $text;
}