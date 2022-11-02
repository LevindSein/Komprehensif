<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class No2Controller extends Controller
{
    public function index(){
        $a = [1,2,3,4,5,6,7,8];
        $himpunanA = implode(',' , $a);
        Session::put('himpunanA', $a);
        $b = [1,3,5,7,9];
        $himpunanB = implode(',' , $b);;
        Session::put('himpunanB', $a);

        return view('jawaban_2.index', [
            'himpunanA' => $himpunanA,
            'himpunanB' => $himpunanB
        ]);
    }

    public function ingkaran($val){
        return response()->json(['success' => !$val]);
    }

    public function konjungsi($a, $b){
        if($a && $b){
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }

    public function disjungsi($a, $b){
        if($a || $b){
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }

    public function implikasi($a, $b){
        if($a == $b || (!$a && $b)){
            return response()->json(['success' => true]);
        }
        else {
            return response()->json(['success' => false]);
        }
    }

    public function biimplikasi($a, $b){
        if($a == $b){
            return response()->json(['success' => true]);
        }
        else {
            return response()->json(['success' => false]);
        }
    }

    public function keanggotaan($val){
        return response()->json(['success' => in_array($val, Session::get('himpunanA'))]);
    }

    public function prima($val){
        $data = [];
        for($i=1; $i<=$val; $i++){
            $a=0;
            for($j=1; $j<=$i; $j++){
                if($i % $j == 0){
                    $a++;
                }
            }
            if($a == 2){
                $data[$i] = $i;
            }
        }
        $data = implode(',', $data);
        return response()->json(['success' => $data]);
    }

    public function relasi($val){
        $data = Data::with('user')->find($val);
        return response()->json(['success' => $data]);
    }

    public function fungsi($val){
        $data = $val * 3 + 3;
        return response()->json(['success' => $data]);
    }
}
