<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $title = "Welcome to Laravel !!!";
        // return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        $title = "About Us";
        return view('pages.about',compact('title'));
        // return view('pages.about')->with('title',$title);
    }
    public function services(){
        $data = array(
            'title'=> 'The Services',
            'services' => ['Web design', 'Programming', 'SEO']
            
        );
        // return view('pages.services')->with($data);
        // dd($data);
        return view('pages.services',compact('data'));
    }
}
