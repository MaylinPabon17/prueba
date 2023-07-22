<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DuviController extends Controller
{
    public function index() {
        return response()->json(['data' => 'welcome to duvi controller']);
    }
}
