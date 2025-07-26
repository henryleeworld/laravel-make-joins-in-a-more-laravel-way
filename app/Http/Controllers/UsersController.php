<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller
{
    public function post() 
    {
        $users = User::joinRelationship('posts')->skip(0)->take(10)->get();
        foreach ($users as $user) {
            echo __('User ID is ') . $user->id . __(', whose name is ') . $user->name . __(', and the post title is ') . $user->posts[0]['title'] . PHP_EOL;
        }
    }
}
