<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller
{
    public function post() 
    {
        $users = User::joinRelationship('posts')->offset(0)->limit(10)->get();
        foreach ($users as $user) {
            echo '使用者編號 ' . $user->id . '，姓名為 ' . $user->name . '，貼文標題為 ' . $user->posts[0]['title'] . PHP_EOL;
        }
    }
}
