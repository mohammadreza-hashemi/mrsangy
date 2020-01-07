<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

//پرایوت بودن حتما به این احتیاجه که کاربر لاگین کرده باشه 
Broadcast::channel('article.{type}', function ($user, $type) {

    dd($user,$type);
    return false;
    
//    if($user->level == 'admin'){
//        return true;
//    }
//     return false;
    // return (int) $user->id === (int) $id;
});
