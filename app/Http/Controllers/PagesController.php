<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function getIndex(){
       // return view('pages.welcome');
    }

    public function getAbout(){
        return view('pages.about');
    }

    public function getCreator(){
        $first = 'Gowrab Das';
        $last = 'Dip';
        $fullname = $first ." ". $last;
        $email = 'dipdas.dip@gmai.com';
        $phone = '+8801724416980';
        $data = [];
        $data['fullname'] = $fullname;
        $data['email'] = $email;
        $data['phone'] = $phone; 
        return view('pages.creator')->withData($data);
    }

    public function getSignIn(){
        return view('register.signin');
    }
}
