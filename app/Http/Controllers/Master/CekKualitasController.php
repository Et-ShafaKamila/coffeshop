<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;

class CekKualitasController extends Controller
{
    public function index(){
        return view('cek_kualitas.index');
    }
}
