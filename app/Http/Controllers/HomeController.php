<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        DB::table('posts')->insert([
            [
                'title'=>'This is a test Data',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, numquam aliquid. Excepturi enim, animi obcaecati at ipsam ea eos officia fugiat autem aliquam. Nesciunt, facilis aspernatur voluptatum odio recusandae mollitia.',
                'status'=>1,
                'publish_date'=>date('Y-m-d'),
                'user_id'=>1,
                'category_id'=>1
            ],
            [
                'title'=>'This is a test Data',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, numquam aliquid. Excepturi enim, animi obcaecati at ipsam ea eos officia fugiat autem aliquam. Nesciunt, facilis aspernatur voluptatum odio recusandae mollitia.',
                'status'=>1,
                'publish_date'=>date('Y-m-d'),
                'user_id'=>1,
                'category_id'=>2
            ],
            [
                'title'=>'This is a test Data',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, numquam aliquid. Excepturi enim, animi obcaecati at ipsam ea eos officia fugiat autem aliquam. Nesciunt, facilis aspernatur voluptatum odio recusandae mollitia.',
                'status'=>1,
                'publish_date'=>date('Y-m-d'),
                'user_id'=>1,
                'category_id'=>3
            ]
        ]);
        dd('success');

        // DB::table("posts")->delete(56);

        // DB::table("posts")->where('id',56)->update(
        //     [
        //         'title'=>'new title again id 59',
        //         'description'=>'this is a new description id 59'
        //     ]
        // );


        // DB::table('posts')->insert([
        //     [
        //         'title'=>'This is a test Data',
        //         'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, numquam aliquid. Excepturi enim, animi obcaecati at ipsam ea eos officia fugiat autem aliquam. Nesciunt, facilis aspernatur voluptatum odio recusandae mollitia.',
        //         'status'=>1,
        //         'publish_date'=>date('Y-m-d'),
        //         'user_id'=>1
        //     ],
        //     [
        //         'title'=>'This is a test Data 2',
        //         'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, numquam aliquid. Excepturi enim, animi obcaecati at ipsam ea eos officia fugiat autem aliquam. Nesciunt, facilis aspernatur voluptatum odio recusandae mollitia.',
        //         'status'=>1,
        //         'publish_date'=>date('Y-m-d'),
        //         'user_id'=>1
        //     ],
        // ]);
      
        // $blogs=[
        //     [
        //         'title'=>'Title one',
        //         'body'=> 'this is a body',
        //         'status'=>1
        //     ],
        //     [
        //         'title'=>'Title two',
        //         'body'=> 'this is a body',
        //         'status'=>0
        //     ],
        //     [
        //         'title'=>'Title three',
        //         'body'=> 'this is a body',
        //         'status'=> 1
        //     ],
        //     [
        //         'title'=>'Title four',
        //         'body'=> 'this is a body',
        //         'status'=> 1
        //     ]
        // ];
        // return view('home', compact('blogs'));
    }
}
