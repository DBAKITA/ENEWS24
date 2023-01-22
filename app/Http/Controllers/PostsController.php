<?php

namespace App\Http\Controllers;
use App\models\Posts;
use App\models\Category;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //all posts will be handled here

//function index () {return "All Posts";}
function index(){
    return view('main.posts-index');
}

//function create () {return "Create a new post";}
function create(){
    $cats = Category::all();
    return view('main.posts-create' [
        'categories'-> $cats
     ] );
}

function view_post () {
    return "Display a single post";
}

function delete_post () {
    return "Delete a single post";
}
}
