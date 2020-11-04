<?php

namespace App\Http\Controllers;

use App\Background;
use App\Crud;
use App\Image;
use App\Price;
use App\Service;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
     //   $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $background = Background::all()->first();
        $price = Price::all()->first();
        $video = Video::all()->first();
        $services = Service::all();
        return view('home', compact('background','price','video','services'));
    }

    public function about()
    {
        $video = Video::all()->first();
        $logos = Image::all();
        $part1 = Crud::where('web_page', 'part1')->paginate(50);
        return view('about', compact('part1','video','logos'));
    }

    public function contactus()
    {
        $video = Video::all()->first();
        $logos = Image::all();
        $part1 = Crud::where('web_page', 'part1')->paginate(50);
        return view('contactus', compact('part1','video','logos'));
    }


    public function services()
    {
        $video = Video::all()->first();
        $services = Service::all();
        $part2 = Crud::where('web_page', 'part2')->paginate(50);
        return view('services', compact('part2','services','logos'));
    }

}
