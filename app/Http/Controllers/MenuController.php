<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
     return view('admin.menu.add-menu');
    }
    public function saveMenu(Request $request){
        $this->validate($request , [
            'menu_type' => 'required|regx:'
        ]);
    }
    public function manageMenu(){
        return view('admin.menu.manage-menu');
    }
}
