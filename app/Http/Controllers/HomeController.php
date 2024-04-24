<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function get_all_category() {
        // $a = DB::select('select * from category');

        $a = DB::table('category')
        ->select('id', 'name', 'name as name1')
        ->where('id', '=', 1)
        // ->where([
        //     ['id', '=', 1],
        //     ['name', '=', 'name'],
        // ])

        ->where([
            'id' => 1,
            'name' => 'nam',
        ])



        // ->get()//lay tat ca
        ->first();//lay ra ban ghi dau tien

        dd($a);








        return view('home');
    }

    public function get_detail_category($id) {
        
    }

    public function update_category($id) {
        
    }

    public function add_category() {
        
    }

}
