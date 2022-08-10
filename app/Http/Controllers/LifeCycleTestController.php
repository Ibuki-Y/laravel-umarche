<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class LifeCycleTestController extends Controller {
    public function showServiceContainer() {
        app()->bind('lifeCycleTest', function () {
            return 'life cycle test';
        });

        $test = app()->make('lifeCycleTest');

        /* not use service container */
        // $message = new Message(); // 一度インスタンス化
        // $sample = new Sample($message);
        // $sample->run();

        /* use service container */
        app()->bind('sample', Sample::class); // 自動で依存関係を解決
        $sample = app()->make('sample');
        $sample->run();

        dd($test);
    }
}

class Sample {
    public $message;

    // DI(Dependency Injection)
    public function __construct(Message $message) {
        $this->message = $message;
    }

    public function run() {
        $this->message->send();
    }
}

class Message {
    public function send() {
        echo ('message');
    }
}
