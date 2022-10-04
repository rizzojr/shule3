<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Supporty;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index()
    {
        $posts = Post::count();
        $supporters = Supporty::count();
        $users = User::where('role_as', '0')->count();
        $admins = User::where('role_as', '1')->count();
         return view('admin.dashboard' , compact('posts', 'supporters', 'users', 'admins'));
    }
}
