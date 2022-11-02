<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

use App\Models\No1;

class No1Controller extends Controller
{
    //Public Function
    public function index(){
        return view('jawaban_1.index');
    }

    //Public Function
    public function store(Request $request){
        $jumlah = $request->jumlah;
        $input['jumlah_kelompok'] = $jumlah;

        Validator::make($input, [
            'jumlah_kelompok' => 'required|numeric|gte:1|lte:40'
        ])->validate();

        $dataset = array();
        $j = 1;
        for($i=0; $i<$jumlah; $i++){
            $nomor = $j++;
            $dataset[$i] = [
                'nama'   => 'Kelompok ' . $nomor,
                'daftar' => $this->generate()
            ];
        }

        Session::put('dataset', $dataset);

        return response()->json([
            'success' => Session::get('dataset')
        ]);
    }

    //Private Function
    private function generate(){
        return No1::generate();
    }

    //Sequential Search
    public function search(Request $request){
        $keywords = $request->search_input;

        $dataset = array();
        $i = 0;
        foreach (Session::get("dataset") as $index => $value) {
            if($keywords == $value['nama'] || $keywords == $value['daftar']){
                $dataset[$i] = [
                    'nama'   => $value['nama'],
                    'daftar' => $value['daftar']
                ];
                $i++;
            }
        }
        Session::put('dataset', $dataset);

        return response()->json(['success' => Session::get('dataset')]);
    }
}
