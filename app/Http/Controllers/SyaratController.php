<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SyaratController extends Controller
{
    public function miskin()
    {
        return view('syarat.miskin'); // akan menampilkan resources/views/syarat/miskin.blade.php
    }  

    public function domisili()
    {
        return view('syarat.domisili'); // nanti tampilkan resources/views/syarat/domisili.blade.php
    }

    public function kematian()
    {
        return view('syarat.kematian'); // nanti tampilkan resources/views/syarat/domisili.blade.php
    }

    public function skck()
    {
        return view('syarat.skck'); // nanti tampilkan resources/views/syarat/domisili.blade.php
    }

    public function usaha()
    {
        return view('syarat.usaha'); // nanti tampilkan resources/views/syarat/domisili.blade.php
    }

}
