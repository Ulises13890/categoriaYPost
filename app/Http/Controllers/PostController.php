<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function getAll(){
        $posts=Post::all()->toArray();
        
        return response()->json([
            'code'=>200,
            'status'=>true,
            'data'=>$posts
        ]);
    }
    public function store(Request $request){
        $newPost=[
            'category_id'=>$request->category_id,
            'name'=>$request->name,
            'description'=>$request->description,
            'state'=>$request->state
        ];
        Post::create($newPost);
    }
    public function update(Request $request, $id){
        Post::find($id)->update($request->all());
        
    }
    public function destroy($id){
        Post::destroy($id);

    }

}
