<?php

namespace TechObserversBlog\Http\Controllers;

use Illuminate\Http\Request;
use View;
use TechObserversBlog\Article;
class pagesController extends Controller
{
   public function index(){
   	if (View::exists('pages.index')) 
   		$articles = Article::whereLive(1)->paginate(10);
   		return view('pages.index', compact("articles"));
   }
   public function profile(){
   	return view('pages.profile');
   }
   public function about(){
   	return view('pages.about');
   }
   public function contact(){
   	return view('pages.contact');
   }
   public function edu(){
   	$articles = Article::whereCategory('Education')->paginate(10);
   	return view('pages.edu', compact('articles'));
   }
   public function tech(){
   	$articles = Article::whereCategory('Technology')->paginate(10);
   	return view('pages.tech', compact('articles'));
   }
   public function news(){
   	$articles = Article::whereCategory('News')->paginate(10);
   	return view('pages.news', compact('articles'));
   }
   public function enter(){
   	$articles = Article::whereCategory('Entertainment')->paginate(10);
   	return view('pages.enter', compact('articles'));
   }
   public function contacts(Request $request){
   	return $request->all();
   }

}
