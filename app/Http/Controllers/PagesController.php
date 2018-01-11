<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravels!!!';
        return view('pages.index',  compact('title'));
    }

    public function about(){
        return view('pages.about');
    }
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Designs', 'Programming','SEO']
        );
        return view('pages.services')->with($data) ;
    }
}
