<?php

namespace Bosunski\Todo\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        return view('todo::index');
    }
}
