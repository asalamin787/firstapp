<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class PageController extends Controller
{
    public function home()  {
        return view('Dashboard.home');
    }
    
    

    public function category(){
        return view('Dashboard.Category.category');
    }
    
    
    public function store(Request $request){
        Category::create([
            'name'=>$request->name,
            'slug'=>$request->slug,
            
            
        ]);

        return redirect('/category');
    }
    
    public function category_view(){
        $categorys=Category::latest()->get();
        return view('Dashboard.Category.category_view', compact('categorys'));
    }
    public function category_edit($id){
        $category=Category::where('id',$id)->first();
        return view('Dashboard.Category.category_edit', compact('category'));
    }
   
    public function update($id, Request $request){
        $category=Category::where('id',$id)->first();

        $category->update([
            'name'=>$request->name,
            'slug'=>$request->slug,
        ]);
        return redirect('/category');
    }


   //end models Category//
    
   // start models Post// 
    public function post_create(){
        $categories=Category::latest()->get();

        return view('Dashboard.Post.post_create',compact('categories'));
    }
    public function stores(Request $request){
        Post::create([
            'name'=>$request->name,
            'slug'=>$request->slug,
            'details'=>$request->details,
            'category_id'=>$request->category,
            'image'=>$request->file('image')->store('public/posts'),
        ]);
        return redirect('/post');
    }

    public function post_view (){
        $posts=Post::latest()->get();
        return view('Dashboard.Post.post_view', compact('posts'));
    }
    
    public function post_edit($id){
        $categories=Category::latest()->get();
        $post=Post::where('id',$id)->first();
        return view('Dashboard.Post.post_edit', compact('post', 'categories'));
    }

    public function update_post($id, Request $request){
        $post=Post::where('id', $id)->first();

        $post->update([
            'name'=>$request->name,
            'slug'=>$request->slug,
            'details'=>$request->details,
            'category_id'=>$request->category,
        ]);
        return redirect('/post');
    }
    // end models Post// 


    public function blog(){
        
        if(request('search')){
            $posts=Post::where('name','like','%'.request('search').'%')->orWhere('details','like','%'.request('search').'%')->get();
        }else{
            $posts=Post::latest()->limit(4)->get();
        }
        
        $recentposts=Post::latest()->limit(4)->get();
        $instagram_posts=Post::latest()->limit(6)->get();
        $categorys=Category::latest()->limit(6)->get();
        return view('/blog', compact('posts','recentposts', 'instagram_posts', 'categorys'));
    }
   
    public function usercategory(Post $post){
        $sl_post=Post::latest()->limit(2)->get();
        $recent_post=Post::latest()->limit(4)->get();
        $list_category=Category::latest()->limit(6)->get();
        $nstagram_post1=post::latest()->limit(6)->get();
        $tag_post=post::latest()->limit(8)->get();
    
        return view('/usercategory', compact('post','sl_post', 'recent_post', 'list_category', 'nstagram_post1','tag_post'));
    }
    public function comment_store( Post $post, Request $request){
        Comment::create([
            'comment'=>$request->comment,
            'post_id'=>$post->id,
            'user_id'=>auth()->id(),
        ]);
        return redirect('/usercategory/'.$post->id);
    }
}
