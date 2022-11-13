<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a Listing of Resource/
     *
     * @return \Illuminate\Http\Response
     */

     public function index(){
        $users = User::all();
        return $users;
     }
}
