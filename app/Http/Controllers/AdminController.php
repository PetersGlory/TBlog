<?php

namespace TechObserversBlog\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use TechObserversBlog\Admin;
use TechObserversBlog\Article;
class AdminController extends Controller
{
	public $name;
    public function index(){
    	$articles = Article::whereLive(1)->paginate(10);
        return view('admin.index', compact('articles'));
    }
    public function login(){
    	return view('admin.login');
    }
    public  function aLog(){
    	if (auth()->attempt(request(['email','password']))==false) {
    		return back()->withErrors([
    			'message'=> 'The Email or Password you entered was incorrect, pleaser try again'
    		]);
    	}
    	return redirect('/admin');
    }
    public function aReg(Request $request){
   		Admin::create($request->all());
   		return redirect("/admin_login");
    }
    public function AdminR(){
    	return view('admin.create');
    }
    public function show($id){
    	$article = Article::findOrFail($id);
    	return view('admin.show', compact("article"));
    }
    //  public function edit($id)
    // {
    //     $article = Article::findOrFail($id);
    //     return view('admin.editA', compact("article"));
    // }
    //   public function destroy($id)
    // {
    //     Article::destroy($id);
    //     return redirect('/TBlog');
    // }
    public function create()
    {
        return view('admin.aCreate');
    }
}
