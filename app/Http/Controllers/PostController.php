<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use function Laravel\Prompts\form;

class PostController extends Controller
{
    public function set() {
        // return response('text')->cookie('name', 'dolbaeb', 10);

        Cookie::queue('name', 'eblan', 10);
        return response('test');
    }
    public function get(Request $request) {
        $value = $request->cookie('name');
        dump($value);
    }
    public function counter(Request $request) {
        
        $count = $request->cookie('count');
        $count++;
        var_dump($count);
        
        return response($count)->cookie('count', $count, 10);
    }
    
    public function index(Request $request) {

        $count = $request->session()->get('count');
        $count++;
        $request->session()->put('count', $count);
        dump($request->session()->get('count'));

        if(!$request->session()->has('firstTime')) {
            $firstTime = now();
            $request->session()->put('firstTime', $firstTime);

        }
        
        dump($request->session()->get('firstTime'));

        dump($request->session()->all());
    }
    public function resetSession(Request $request) {
        $request->session()->flush();
    }


    public function show1() {
        return redirect('post/show2');

        echo "
        
        ";
    }
    public function show2() {
        return 'show2';
    }

    public function formCheckView() {
        return view('form');
    }

    public function formCheck(Request $request) {
        if($request->number < 10 and $request->number>0) {
            return redirect('/post/show2');
        }
    }
}

