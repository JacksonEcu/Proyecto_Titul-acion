<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListadoController extends Controller
{
    public function index(){
        $query=DB::table('documento')->get();
        return view('PDF/listado',['datos'=>$query]);
    }
    
 
 }