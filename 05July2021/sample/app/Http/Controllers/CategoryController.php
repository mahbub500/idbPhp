<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function AllCat(){
        // echo"Hello This is by Mahbub";
        return view('admin.category.index');
    }
}
