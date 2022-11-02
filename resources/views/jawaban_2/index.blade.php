@extends('Layout.master')

@section('body-content')
<div class="form-group d-flex justify-content-center text-center">
    <label>Objective : Logika Matematika, Teori Himpunan, Relasi dan Fungsi, Induksi Matematika, Graph, dan Pohon / Tree.</label>
</div>
<div class="accordion form-group" id="accordionExample">
    <div class="accordion-item" style="width: 100%">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            Logika Informatika
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="form-group" style="width:50%;">
                    <label>Ingkaran atau Negasi</label>
                    <input required name="ingkaran" id="ingkaran" class="form-control biner number" maxlength="1" placeholder="(Masukkan 0 atau 1)" />
                    <span class="text-success" id="result-ingkaran">Hasil akan muncul disini.</span>
                </div>
                <div class="form-group" style="width:50%;">
                    <label>Konjungsi</label>
                    <input required name="konjungsi_a" id="konjungsi-a" class="form-control biner number" maxlength="1" placeholder="(Masukkan 0 atau 1)" />
                    <input required name="konjungsi_b" id="konjungsi-b" class="form-control biner number" maxlength="1" placeholder="(Masukkan 0 atau 1)" />
                    <span class="text-success" id="result-konjungsi">Hasil akan muncul disini</span>
                </div>
                <div class="form-group" style="width:50%;">
                    <label>Disjungsi</label>
                    <input required name="disjungsi_a" id="disjungsi-a" class="form-control biner number" maxlength="1" placeholder="(Masukkan 0 atau 1)" />
                    <input required name="disjungsi_b" id="disjungsi-b" class="form-control biner number" maxlength="1" placeholder="(Masukkan 0 atau 1)" />
                    <span class="text-success" id="result-disjungsi">Hasil akan muncul disini</span>
                </div>
                <div class="form-group" style="width:50%;">
                    <label>Implikasi</label>
                    <input required name="implikasi_a" id="implikasi-a" class="form-control biner number" maxlength="1" placeholder="(Masukkan 0 atau 1)" />
                    <input required name="implikasi_b" id="implikasi-b" class="form-control biner number" maxlength="1" placeholder="(Masukkan 0 atau 1)" />
                    <span class="text-success" id="result-implikasi">Hasil akan muncul disini</span>
                </div>
                <div class="form-group" style="width:50%;">
                    <label>Biimplikasi</label>
                    <input required name="biimplikasi_a" id="biimplikasi-a" class="form-control biner number" maxlength="1" placeholder="(Masukkan 0 atau 1)" />
                    <input required name="biimplikasi_b" id="biimplikasi-b" class="form-control biner number" maxlength="1" placeholder="(Masukkan 0 atau 1)" />
                    <span class="text-success" id="result-biimplikasi">Hasil akan muncul disini</span>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item" style="width: 100%">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Teori Himpunan
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="form-group" style="width:50%;">
                    <label>Himpunan A = &#123;{{$himpunanA}}&#125;</label>
                </div>
                <div class="form-group" style="width:50%;">
                    <label>Keanggotaan (x &isin; A)</label>
                    <input required name="keanggotaan" id="keanggotaan" class="form-control number" maxlength="1" placeholder="(Masukkan angka x)" />
                    <span class="text-success" id="result-keanggotaan">Hasil akan muncul disini</span>
                </div>
                <div class="form-group" style="width:50%;">
                    <label>Bilangan Prima</label>
                    <input required name="prima" id="prima" class="form-control number" maxlength="2" placeholder="(Masukkan angka)" />
                    <span class="text-success" id="result-prima">Hasil akan muncul disini</span>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item" style="width: 100%">
        <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Relasi dan Fungsi
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="form-group" style="width:50%;">
                    <label>Relasi</label><br>
                    <button value="1" class="relasi btn btn-sm btn-outline-primary">Show Relasi 1</button>
                    <button value="2" class="relasi btn btn-sm btn-outline-primary">Show Relasi 2</button><br>
                    <span class="text-success" id="result-relasi">Hasil akan muncul disini</span>
                </div>
            </div>
            <div class="accordion-body">
                <div class="form-group" style="width:50%;">
                    <label>Fungsi : f(x) = 3x + 3</label>
                    <input required name="fungsi" id="fungsi" class="form-control number" maxlength="2" placeholder="(Masukkan angka x)" />
                    <span class="text-success" id="result-fungsi">Hasil akan muncul disini</span>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item" style="width: 100%">
        <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            Induksi Matematika
            </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form id="form-1" style="width:100%">
                    <div class="form-group">
                        <input required name="jumlah" class="form-control form-control-sm number jumlah" maxlength="2" placeholder="Masukkan Jumlah Kelompok Belajar (1 - 40)" />
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-fw fa-sm fa-paper-plane"></i> Buat</button>
                </form>
            </div>
        </div>
    </div>
    <div class="accordion-item" style="width: 100%">
        <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            Graph
            </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form id="form-1" style="width:100%">
                    <div class="form-group">
                        <input required name="jumlah" class="form-control form-control-sm number jumlah" maxlength="2" placeholder="Masukkan Jumlah Kelompok Belajar (1 - 40)" />
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-fw fa-sm fa-paper-plane"></i> Buat</button>
                </form>
            </div>
        </div>
    </div>
    <div class="accordion-item" style="width: 100%">
        <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
            Pohon / Tree
            </button>
        </h2>
        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form id="form-1" style="width:100%">
                    <div class="form-group">
                        <input required name="jumlah" class="form-control form-control-sm number jumlah" maxlength="2" placeholder="Masukkan Jumlah Kelompok Belajar (1 - 40)" />
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-fw fa-sm fa-paper-plane"></i> Buat</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="form-group d-flex justify-content-center text-center">
    <div class="form-group">
        <a type="button" href="{{url('/')}}" class="btn btn-sm btn-outline-success"><i class="fas fa-fw fa-sm fa-home"></i> Homepage</a>
    </div>
</div>
@endsection

@section('script-content')
<script>
    $(document).on("input", "#ingkaran", function (e) {
        $.ajax({
            url: "/jawaban/no-2/ingkaran/" + $("#ingkaran").val(),
            cache: false,
            method: "GET",
            dataType: "json",
            success:function(data)
            {
                $("#result-ingkaran").text(data.success);
            }
        });
    });

    $(document).on("input", "#konjungsi-a,#konjungsi-b", function (e) {
        $.ajax({
            url: "/jawaban/no-2/konjungsi/" + $("#konjungsi-a").val() + "/" + $("#konjungsi-b").val(),
            cache: false,
            method: "GET",
            dataType: "json",
            success:function(data)
            {
                $("#result-konjungsi").text(data.success);
            }
        });
    });

    $(document).on("input", "#disjungsi-a,#disjungsi-b", function (e) {
        $.ajax({
            url: "/jawaban/no-2/disjungsi/" + $("#disjungsi-a").val() + "/" + $("#disjungsi-b").val(),
            cache: false,
            method: "GET",
            dataType: "json",
            success:function(data)
            {
                $("#result-disjungsi").text(data.success);
            }
        });
    });

    $(document).on("input", "#implikasi-a,#implikasi-b", function (e) {
        $.ajax({
            url: "/jawaban/no-2/implikasi/" + $("#implikasi-a").val() + "/" + $("#implikasi-b").val(),
            cache: false,
            method: "GET",
            dataType: "json",
            success:function(data)
            {
                $("#result-implikasi").text(data.success);
            }
        });
    });

    $(document).on("input", "#biimplikasi-a,#biimplikasi-b", function (e) {
        $.ajax({
            url: "/jawaban/no-2/biimplikasi/" + $("#biimplikasi-a").val() + "/" + $("#biimplikasi-b").val(),
            cache: false,
            method: "GET",
            dataType: "json",
            success:function(data)
            {
                $("#result-biimplikasi").text(data.success);
            }
        });
    });

    $(document).on("input", "#keanggotaan", function (e) {
        $.ajax({
            url: "/jawaban/no-2/keanggotaan/" + $("#keanggotaan").val(),
            cache: false,
            method: "GET",
            dataType: "json",
            success:function(data)
            {
                $("#result-keanggotaan").text(data.success);
            }
        });
    });

    $(document).on("input", "#prima", function (e) {
        $.ajax({
            url: "/jawaban/no-2/prima/" + $("#prima").val(),
            cache: false,
            method: "GET",
            dataType: "json",
            success:function(data)
            {
                $("#result-prima").text("{" + data.success + "}");
            }
        });
    });

    $(document).on("click", ".relasi", function (e) {
        $.ajax({
            url: "/jawaban/no-2/relasi/" + $(this).attr('value'),
            cache: false,
            method: "GET",
            dataType: "json",
            success:function(data)
            {
                $("#result-relasi").text('Data ' + data.success.user_id + " : " + data.success.user.name + " " + data.success.user.jk);
            }
        });
    });

    $(document).on("input", "#fungsi", function (e) {
        $.ajax({
            url: "/jawaban/no-2/fungsi/" + $("#fungsi").val(),
            cache: false,
            method: "GET",
            dataType: "json",
            success:function(data)
            {
                $("#result-fungsi").text(data.success);
            }
        });
    });

    $(document).on("input change keydown", ".biner", function (e) {
        if ($(this).val() > 1)
            $(this).val($(this).val().replace($(this).val(), 1));
    });
</script>
@endsection
