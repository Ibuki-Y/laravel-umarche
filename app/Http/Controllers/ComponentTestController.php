<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class ComponentTestController extends Controller {
    public function showComponent1() {
        return view('tests.component-1');
    }

    public function showComponent2() {
        return view('tests.component-2');
    }
}
