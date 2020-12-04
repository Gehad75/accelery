<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accelerator;

class AcceleratorsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $accelerators= Accelerator::get();

        return view('accelerators')->with([
            'accelerators'=> $accelerators,
        ]);
    }
}
