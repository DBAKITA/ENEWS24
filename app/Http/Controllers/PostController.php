<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){
        $posts = Post::all();


        return view('main.posts-index', ['posts'=> $posts]);
    }

    function save_post(Request $r){
        
        $p = new Post();
        $p->title = $r->title;
        $p->category_id= $r->category_id;
        $p->body= $r->body;
        $p-> photo= '';
        $p-> user_id= 1;

        if($p-> save()){
            return redirect(url('posts'));
         
         }
 
         else{
             die('Failed to save the post. Try Again.');
         }
 
         die("Saving.....");
 

               
        die("Saving.....");
     
    }


    function create(){
                       $cats = Category::all();
        return view('main.posts-create', ['categories' => $cats]);
    }
}

