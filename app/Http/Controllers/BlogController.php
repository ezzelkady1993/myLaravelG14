<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function create(){
        return view('blogs.create');
    }

    public function store(Request $request){
        $formInput=$request->except('image');
        $this->validate($request,[
            'title'   => 'required|string',
            'content' => 'required|min:50',
            'image'   => 'required|image|mimes:jpeg,jpg,png,gif'
        ]);

        $image=$request->image;
        if($image){
            $imageName=time().'.'.$image->getClientOriginalName();
            $image->move('uploads',$imageName);
            $formInput['image']=$imageName;
        }
        return view('blogs.store',compact('formInput'));
    }
}