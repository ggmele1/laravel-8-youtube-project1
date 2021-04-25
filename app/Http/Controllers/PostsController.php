<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
        $posts = DB::select('select * from posts');

        // Select the body from all 
        // $posts = DB::table('posts')
        //     ->select('body')
        //     ->get();

        // orWhere() executes no matter what 
        // $posts = DB::table('posts')
        // ->where('created_at', '<', now()->subDay())
        // ->orWhere('title', 'Dr.')
        // ->get();

        // Insert into database
        // $posts = DB::table('posts')
        // ->insert([
        //     'title' => 'New Post', 'body' => 'New Body'
        // ]);

        // Update in database 
        // $posts = DB::table('posts')
        //     ->where('id', '=', 5)
        //     ->update([
        //         'title' => 'Giuseppe', 'body' => 'This is my body', 'created_at' => now()
        //     ]);


        // $posts = DB::table('posts')
        //     ->where('id', '=', 5)
        //     ->delete();

        dd($posts);
    }
}
