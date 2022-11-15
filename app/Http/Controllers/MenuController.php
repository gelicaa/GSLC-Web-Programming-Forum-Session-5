<?php

namespace App\Http\Controllers;
use Nette\Utils\ArrayList;

class MenuController extends Controller{

    public function index(){
        return view('menu');
    }

}