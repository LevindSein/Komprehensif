<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\User;
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

        $dataTable = Data::get();
        $userTable = User::get();

        return view('jawaban_2.index', [
            'himpunanA' => $himpunanA,
            'himpunanB' => $himpunanB,
            'dataTable' => $dataTable,
            'userTable' => $userTable
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

    public function induksi($val){
        $uang = str_replace('.', '', $val);

        $data = '';

        $ratusan = $uang % 100000;
        $limapuluhan = $ratusan % 50000;
        $duapuluribuan = $limapuluhan % 20000;
        $sepuluhribuan = $duapuluribuan % 10000;
        $limaribuan = $sepuluhribuan % 5000;
        $duaribuan = $limaribuan % 2000;
        $seribuan = $duaribuan % 1000;
        $limaratusan = $seribuan % 500;
        $seratusan = $limaratusan % 100;
        $limapuluh = $seratusan % 50;

        //hitung jumlah lembar
        $a = ($uang - $ratusan) / 100000;
        $b = ($ratusan - $limapuluhan) / 50000;
        $c = ($limapuluhan - $duapuluribuan) / 20000;
        $d = ($duapuluribuan - $sepuluhribuan) / 10000;
        $e = ($sepuluhribuan- $limaribuan) / 5000;
        $f = ($limaribuan - $duaribuan) / 2000;
        $g = ($duaribuan - $seribuan) / 1000;
        $h = ($seribuan - $limaratusan) / 500;
        $i = ($limaratusan - $seratusan) / 100;
        $j = ($seratusan - $limapuluh) / 50;

        if($a!=0) $data .= "Jumlah Rp.100.000 : $a lembar<br>";
        if($b!=0) $data .= "Jumlah Rp.50.000 : $b lembar<br>";
        if($c!=0) $data .= "Jumlah Rp.20.000 :$c lembar<br>";
        if($d!=0) $data .= "Jumlah Rp.10.000 : $d lembar<br>";
        if($e!=0) $data .= "Jumlah Rp.5000 : $e lembar<br>";
        if($f!=0) $data .= "Jumlah Rp.2000 : $f lembar<br>";
        if($g!=0) $data .= "Jumlah Rp.1000 : $g lembar<br>";
        if($h!=0) $data .= "Jumlah Rp.500 : $h lembar<br>";
        if($i!=0) $data .= "Jumlah Rp.100 : $i lembar<br>";
        if($j!=0) $data .= "Jumlah Rp.50 : $j lembar<br>";

        return response()->json(['success' => $data]);
    }

    public function pohon(){
        $MyArray = array(10, 1, 23, 50, 7, -4);
        $n = sizeof($MyArray);
        $original = $this->PrintArray($MyArray, $n);

        $this->heapsort($MyArray, $n);
        $sorted = $this->PrintArray($MyArray, $n);

        return response()->json(['success' => [$original, $sorted]]);
    }

    public function heapsort(&$Array, $n) {
        for($i = (int)($n/2); $i >= 0; $i--) {
            $this->heapify($Array, $n-1, $i);
        }

        for($i = $n - 1; $i >= 0; $i--) {
            //swap last element of the max-heap with the first element
            $temp = $Array[$i];
            $Array[$i] = $Array[0];
            $Array[0] = $temp;

            //exclude the last element from the heap and rebuild the heap
            $this->heapify($Array, $i-1, 0);
        }
    }

    function heapify(&$Array, $n, $i) {
        $max = $i;
        $left = 2*$i + 1;
        $right = 2*$i + 2;

        //if the left element is greater than root
        if($left <= $n && $Array[$left] > $Array[$max]) {
            $max = $left;
        }

        //if the right element is greater than root
        if($right <= $n && $Array[$right] > $Array[$max]) {
            $max = $right;
        }

        //if the max is not i
        if($max != $i) {
            $temp = $Array[$i];
            $Array[$i] = $Array[$max];
            $Array[$max] = $temp;
            //Recursively heapify the affected sub-tree
            $this->heapify($Array, $n, $max);
        }
    }

    function PrintArray($Array, $n) {
        $data = [];
        for ($i = 0; $i < $n; $i++)
            $data[] = $Array[$i];


        return implode(',', $data);
    }
}
