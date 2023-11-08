<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $blogs=[
            [
                'title'=>'Title one',
                'body'=> 'this is a body',
                'status'=>1
            ],
            [
                'title'=>'Title two',
                'body'=> 'this is a body',
                'status'=>0
            ],
            [
                'title'=>'Title three',
                'body'=> 'this is a body',
                'status'=> 1
            ],
            [
                'title'=>'Title four',
                'body'=> 'this is a body',
                'status'=> 1
            ]
        ];
        return view('home', compact('blogs'));
    }
}
