<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class ChildController extends Controller
{
    public function getAllKids(){
        $kids = DB::table('child')->get();
        return $kids ;
    }

    public function getAunt(){
        return DB::table('child')->where('gender','F')->first();
    }
}
