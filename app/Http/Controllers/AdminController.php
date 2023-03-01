<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class AdminController extends Controller
{
    public function index()
    {
     if(Auth::id())
     {
        $usertype = Auth()->user()->usertype;
        if($usertype =='user'){
            return view('dashboard');
        }
        else if($usertype =='admin'){
            return view('admin.index');
        }
        else{
            return redirect()->back();
        }
     }

    }
    public function post_page()
    {
        return view('admin.post_page');
    }
    public function add_post(Request $request)
    {
        $post=new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->post_status = 'active';


        $image=$request->image;
        if($image)
        {

        

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('postimage',$imagename);

        $post->image = $imagename;
        }

        $post->save();
        return redirect()->back();
        
    }
    
}
