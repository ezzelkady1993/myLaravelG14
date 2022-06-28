<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{

    public function index(){
        // select * from users  . . .
 
        $blogs =  Blog::get();
 
 
      return view('blogs.index',['data' => $blogs]);
     }

    public function create(){
        return view('blogs.create');
    }

    public function store(Request $request){
        // $formInput=$request->except('image');
        $data = $this->validate($request,[
            'title'   => 'required|string',
            'content' => 'required|min:50',
            // 'image'   => 'required|image|mimes:jpeg,jpg,png,gif'
        ]);

        $op = Blog::create($data);
        if($op){
            $message = "Blog Created Successfully";
            session()->flash('Message-success',$message);
        }else{
            $message = "Blog Not Created";
            session()->flash('Message-error',$message);
        }
        // $image=$request->image;
        // if($image){
        //     $imageName=time().'.'.$image->getClientOriginalName();
        //     $image->move('uploads',$imageName);
        //     $formInput['image']=$imageName;
        // }
        return redirect(url('blogs/create'));
    }
}