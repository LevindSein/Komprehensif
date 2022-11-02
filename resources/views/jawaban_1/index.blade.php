@extends('Layout.master')

@section('body-content')
<h1 class="text-center">Program Bagi Tugas Kelompok</h1>
<div class="form-group d-flex justify-content-center text-center">
    <label>Objective : Sequential Search, Branching, Looping, Array, dan Fungsi.</label>
</div>
<div class="form-group d-flex">
    <form id="form-1" style="width:100%">
        <div class="form-group">
            <input required name="jumlah" class="form-control form-control-sm number jumlah" maxlength="2" placeholder="Masukkan Jumlah Kelompok Belajar (1 - 40)" />
        </div>
        <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-fw fa-sm fa-paper-plane"></i> Buat</button>
    </form>
</div>
<div class="d-flex">
    <form id="form-search" style="width:100%">
        <div class="form-group">
            <input class="form-control form-control-sm search" id="search-input" name="search_input" placeholder="Cari Data ..." />
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-sm btn-success search"><i class="fas fa-fw fa-sm fa-search"></i> Cari</button>
            <button class="btn btn-sm btn-danger search"><i class="fas fa-fw fa-sm fa-times"></i> Hapus</button>
        </div>
    </form>
</div>
<div class="form-group d-flex">
    <table style="width:100%" class="table table-hover">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Tugas</th>
            </tr>
        </thead>
        <tbody id="table">
            <tr>
                <td colspan="2" class="text-center">No Data Available.</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="form-group d-flex justify-content-center text-center">
    <div class="form-group">
        <a type="button" href="{{url('/')}}" class="btn btn-sm btn-outline-success"><i class="fas fa-fw fa-sm fa-home"></i> Homepage</a>
    </div>
</div>
@endsection

@section('script-content')
<script>
    $(".search").hide();

    var html = '';
    html += '<tr>';
    html += '<td colspan="2" class="text-center">No Data Available.</td>';
    html += '</tr>';

    $("#table").html(html);

    $('#form-1').on('submit', function(e){
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "/jawaban/no-1",
            cache: false,
            method: "POST",
            data: $(this).serialize(),
            dataType: "json",
            beforeSend:function(){
                $.blockUI({
                    message: '<i class="fas fa-spin fa-spinner text-white"></i>',
                    baseZ: 9999,
                    overlayCSS: {
                        backgroundColor: '#000',
                        opacity: 0.5,
                        cursor: 'wait'
                    },
                    css: {
                        border: 0,
                        padding: 0,
                        backgroundColor: 'transparent'
                    }
                });
            },
            success:function(data)
            {
                if(data.success){
                    html = '';
                    $.each(data.success, function (index, value) {
                        html += '<tr>';
                        html += '<td>' + value.nama + '</td>';
                        html += '<td>' + value.daftar + '</td>';
                        html += '</tr>';
                    })

                    if(data.success.length > 0){
                        $(".search").fadeIn();
                    }

                    $("#table").html(html);
                }
            },
            error:function(data){
                if (data.status == 422) {
                    $.each(data.responseJSON.errors, function (i, error) {
                        $.notify(error[0], "error");
                    });
                }
                else{
                    $.notify("System error.", "error");
                    console.log(data);
                }
            },
            complete:function(data){
                $.unblockUI();
            }
        });
    });

    $('#form-search').on('submit', function(e){
        e.preventDefault();

        $.ajax({
            url: "/jawaban/no-1/search",
            cache: false,
            method: "GET",
            data: $(this).serialize(),
            dataType: "json",
            beforeSend:function(){
                $.blockUI({
                    message: '<i class="fas fa-spin fa-spinner text-white"></i>',
                    baseZ: 9999,
                    overlayCSS: {
                        backgroundColor: '#000',
                        opacity: 0.5,
                        cursor: 'wait'
                    },
                    css: {
                        border: 0,
                        padding: 0,
                        backgroundColor: 'transparent'
                    }
                });
            },
            success:function(data)
            {
                    html = '';
                    if(data.success.length > 0){
                        $.each(data.success, function (index, value) {
                            html += '<tr>';
                            html += '<td>' + value.nama + '</td>';
                            html += '<td>' + value.daftar + '</td>';
                            html += '</tr>';
                        });
                    } else {
                        html = '';
                        html += '<tr>';
                        html += '<td colspan="2" class="text-center">No Data Available.</td>';
                        html += '</tr>';
                    }

                    $("#table").html(html);

            },
            error:function(data){
                if (data.status == 422) {
                    $.each(data.responseJSON.errors, function (i, error) {
                        $.notify(error[0], "error");
                    });
                }
                else{
                    $.notify("System error.", "error");
                    console.log(data);
                }
            },
            complete:function(data){
                $.unblockUI();
            }
        });
    });

    $(document).on("input change keydown", ".jumlah", function (e) {
        if ($(this).val() > 40)
            $(this).val($(this).val().replace($(this).val(), 40));
    });
</script>
@endsection
