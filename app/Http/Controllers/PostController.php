<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($id)
    {
        return "My id is :".$id;
    }

    public function GetName($name ){
        return $name;
    }
}
