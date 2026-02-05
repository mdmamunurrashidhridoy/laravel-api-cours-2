<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return 'index';
    }

    public function store(){
        return 'store';
    }

    public function show($id){
        return 'show '.$id;
    }
}
