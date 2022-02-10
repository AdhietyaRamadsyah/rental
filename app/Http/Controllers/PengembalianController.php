<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class PengembalianController extends Controller
{
    public function index()
    {
        return view('pengembalian.index');
    }
}
    