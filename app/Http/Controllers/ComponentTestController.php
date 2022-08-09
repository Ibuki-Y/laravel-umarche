<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class ComponentTestController extends Controller {
    public function showComponent1() {
        $message = 'message';

        return view('tests.component-1', compact('message'));
    }

    public function showComponent2() {
        return view('tests.component-2');
    }
}
