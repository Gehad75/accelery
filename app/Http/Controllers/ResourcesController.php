<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resource;


class ResourcesController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $resources= Resource::get();

        return view('resources')->with([
            'resources'=> $resources,        
        ]);
    }
}
