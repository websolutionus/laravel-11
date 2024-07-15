<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index()
    {

        // Insert new data
        // DB::table('users')->insert(
        //     [
        //         [
        //             'name' => 'Artik123',
        //             'email' => 'artik123@gmail.com',
        //             'password' => '1234'
        //         ], 
        //         [
        //             'name' => 'Jhohan',
        //             'email' => 'johan@gmail.com',
        //             'password' => '1234'
        //         ]
        //     ]
        // );

        // Get data from db
        // $users = DB::table('users')->where('id', '>', 2)->get();
        // return $users;

        // Update row from db
        // DB::table('users')->where('id', 6)->update([
        //     'email' => 'test@gmail.com',
        //     'name' => 'test user'
        // ]);

        // delete row from db
        DB::table('users')->where('id', '>', 1)->delete();
        

        return view('welcome');
    }

    function showAboutPage()
    {
        return view('about');
    }
}
