<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GrandChildController extends Controller
{
    public function getGrandChild(){
        return DB::table('grandchild')->get();
    }

    public function getGrandDaughter(){
        return DB::table('grandchild')->where('gender','F')->first();
    }

    public function getMaleCousin(){
        return DB::table('grandchild')->where('gender','M')->get();
    }
}
