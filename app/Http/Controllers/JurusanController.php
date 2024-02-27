<?php

namespace App\Http\Controllers;

use App\Models\jurusan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index(){
        return view('jurusan.jurusan');
    }
}
