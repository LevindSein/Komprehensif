<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class No3Controller extends Controller
{
    public function index(){
        $file = public_path()."/info.pdf";
        $headers = array('Content-Type: application/pdf',);
        return Response::download($file, 'SDLC Kerja Praktik Zaky - oleh Fahni Amsyari.pdf', $headers);
    }
}
