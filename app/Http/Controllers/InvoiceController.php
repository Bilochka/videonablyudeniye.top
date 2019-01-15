<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(){

        if(view()->exists('admin.index')){
//            $data = ['title' => 'Панель Адміністратора'];
            return view('admin.index');
        }

    }
}
