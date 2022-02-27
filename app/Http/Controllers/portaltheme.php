<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portaltheme extends Controller
{
    public function index(){
        return view('portal-theme-bs5/index');
       }
       public function about(){
        return view('portal-theme-bs5/account');
       }
       public function contact(){
        return view('portal-theme-bs5/help');
       }
       public function charts(){
        return view('portal-theme-bs5/charts');
       }
       public function docs(){
        return view('portal-theme-bs5/docs');
       }
       public function login(){
        return view('portal-theme-bs5/login');
       }
       public function notifications(){
        return view('portal-theme-bs5/notifications');
       }
       public function orders(){
        return view('portal-theme-bs5/orders');
       }
       public function reset_password(){
        return view('portal-theme-bs5/reset-password');
       }
       
}
