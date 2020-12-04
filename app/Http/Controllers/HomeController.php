<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resource;
use App\Accelerator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $resources = Resource::inRandomOrder()->take(3)->get();
        $accelerators = Accelerator::inRandomOrder()->take(3)->get();

        return view('home')->with([
            'resources'=> $resources,
            'accelerators' => $accelerators,
        
        ]);
    }
}
