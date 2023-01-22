<?php

namespace App\Http\Controllers;
use App\models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(){
        if(isset($_GET['delete'])){
            $id = ((int)($_GET['delete']));

            $cat = Category::find($id);
            if ($cat != null){
                $cat->delete();
            }
            return redirect(url('categories'));
            
        }
        return view('main.categories-index'); //to list the categories
    }

    function create(){
        return view('main.categories-create');
    }

    function save(Request $r){
        
    $cat = new category(); //cat is the category abbreviation we have chosen to use
    $cat->name = $r->name;
    $cat->details = $r->details;
    $cat->photo =""; //no image at the moment
    $cat->save();
    header('Location:' .url('categories'));
    die();
    }
    
}

