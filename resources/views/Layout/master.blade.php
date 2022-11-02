<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Komprehensif - Fahni Amsyari</title>

        {{-- CSRF --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Bootstrap --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        {{-- Fonts --}}
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            html, body {
                height: 100%;
                font-family: 'Nunito', sans-serif;
                background-color: #fcfefc;
            }

            html {
                display: table;
                margin: auto;
            }

            body {
                display: table-cell;
                vertical-align: middle;
            }

            audio{
                width: 1px;
                height: 1px;
            }

            .form-group{
                margin-bottom: 25px;
            }
        </style>

        {{-- Font Awesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    </head>
    <body>
        <div class="container">
            @yield('body-content')
            <br><br>
            <div class="d-flex justify-content-center text-center">
                <h4 class="font-weight-bold">Fahni Amsyari - 1167050058</h4>
            </div>
        </div>

        {{-- Bootstrap --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>

        {{-- JQuery --}}
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

        {{-- Vendor --}}
        <script src="{{ asset('vendor/block-ui/jquery.blockUI.js') }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/notify/notify.min.js') }}" type="text/javascript"></script>

        <script>
            $(document).on("input change keydown", ".number", function (e) {
                if ((e.which >= 37 && e.which <= 40) || e.which == 188 || e.which == 190)
                    e.preventDefault();

                if (/^[0-9\.]+$/.test($(this).val())) {
                    $(this).val(
                        parseFloat($(this).val().replace(/\./g, "")).toLocaleString("id-ID")
                    );
                } else {
                    $(this).val(
                        $(this)
                            .val()
                            .substring(0, $(this).val().length - 1)
                    );
                }
            });
        </script>

        @yield('script-content')
    </body>
</html>
