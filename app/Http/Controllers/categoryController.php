<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class categoryController extends Controller
{
    public function getCategory() {
        return response() -> json(Category::all(), 200);
    }

    public function getCategoryById($id){
        $category = Category::find($id);
        if(is_null($category)){
            return response()->json(['Message'=>'Registry not found'], 404);
        }
        return response() ->json($category::find($id),200);
    }

    public function postCategory(Request $request) {
        $category = Category::create($request->all());
        return response($category,200);
    }

    public function putCategory(Request $request, $id){
        $category = Category::find($id);
        if(is_null($category)){
            return response()->json(['Message'=>'Registry not found'], 404);
        }
        $category->update($request->all());
        return response($category, 200);
    }

    public function deleteCategory($id){
        $category = Category::find($id);
        if(is_null($category)){
            return response()->json(['Message'=>'Registry not found'], 404);
        }
        $category->delete();
        return response()->json(['Message'=>'Eliminated'], 200);
    }
}
