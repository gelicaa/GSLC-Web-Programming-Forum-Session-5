<?php

namespace App\Http\Controllers;

class MenuController extends Controller{

    
    public function index(){
        $arrMenu= [
            'Nasi Goreng', 'Bakmi Ayam','Bakso Goreng'
        ];
        return view('menu')->with('menu', $arrMenu);
    }

}
