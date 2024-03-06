<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LDAP\Result;

class HaiController extends Controller
{
    public function index(Request $request, $nama)

    {
        $result = "Hai world".$request->nama;
        return $result;
    }
    public function Provinsi (Request $request, $asal)

    {
        $result = "Hai".$request->nama. " asal kamu di ".$request->asal;
        return $result;

    }
    

}
