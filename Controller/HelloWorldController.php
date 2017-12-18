<?php

namespace PhpBenchmarksCakePhp\Controller;

use Cake\Controller\Controller;
use Cake\Http\Response;

class HelloWorldController extends Controller
{
    public function helloWorld()
    {
        return new Response(['body' => 'Hello World !']);
    }
}
