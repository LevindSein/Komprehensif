@extends('Layout.master')

@section('body-content')
<h1 class="text-center">Komprehensif</h1>
<label>Soal :</label>
<div class="d-flex justify-content-center">
    <ol style="padding-left: 1rem;">
        <li class="text-sm">Buat program yang memiliki sequential search, branching, looping, array, dan fungsi.</li>
        <li class="text-sm">Buat program yang memiliki Logika Matematika, Teori Himpunan, Relasi dan Fungsi, Induksi Matematika, Graph, dan Pohon / Tree.</li>
        <li class="text-sm">Software Development Life Cycle</li>
    </ol>
</div>
<label>Pilih Jawaban :</label>
<div class="d-flex justify-content-center text-center">
    <div class="form-group">
        <a type="button" href="{{url('jawaban/no-1')}}" class="btn btn-sm btn-outline-primary">Jawaban No.1 (Done)</a>
    </div>&nbsp;&nbsp;
    <div class="form-group">
        <a type="button" href="{{url('jawaban/no-2')}}" class="btn btn-sm btn-outline-success">Jawaban No.2 (Done)</a>
    </div>&nbsp;&nbsp;
    <div class="form-group">
        <a type="button" href="{{url('jawaban/no-3')}}" class="btn btn-sm btn-outline-danger disabled">Jawaban No.3</a>
    </div>
</div>
@endsection
