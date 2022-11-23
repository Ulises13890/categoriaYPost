<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getAll(){
        $categories=Category::all()->toArray();
        
        return response()->json([
            'code'=>200,
            'status'=>true,
            'data'=>$categories
        ]);
    }
    public function store(Request $request){
        $newCategory=[
            'name'=>$request->name,
            'description'=>$request->description
        ];
        Category::create($newCategory);
    }
    public function update(Request $request, $id){
        Category::find($id)->update($request->all());

    }
    public function destroy($id){
        Category::destroy($id);

    }
}
