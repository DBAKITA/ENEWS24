<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //all posts will be handled here

function index () {
    return "All Posts";
}

function create () {
    return "Create a new post";
}

function view_post () {
    return "Display a single post";
}

function delete_post () {
    return "Delete a single post";
}
}
