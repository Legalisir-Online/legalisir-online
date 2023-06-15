<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <title>Sistem Legalisir Online</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/kuesioner.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar-footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dropdown.css') }}">
</head>



<body>
    @include('alumni.includes.navbar')
    <div class="container">
        <div class="container-head">
            Isi Kuesioner
        </div> <br> <br>

        <form action="" method="POST">
            @foreach ($pertanyaans as $pertanyaan)
                @if ($pertanyaan->status == 1)
                    <div class="content">
                        <div class="content-pertanyaan">
                            {{ $pertanyaan->pertanyaan }}
                        </div>
                        @if ($pertanyaan->jenis == 0)
                            <div class="content-essay">
                                <ul>
                                    @foreach ($opsis as $opsi)
                                        @if ($pertanyaan->id == $opsi->id_pertanyaan)
                                            <li><label for="radio-1">{{ $opsi->opsi }}</label> <input type="radio"
                                                    name="opinions" id="radio-1" /> </li>
                                        @endif
                                    @endforeach
                                    <ul>
                                        <!-- <input type="text" class="content-essay" placeholder="Jawaban"> -->
                            </div>
                        @else
                            <div>
                                <input type="text" class="content-essay" placeholder="Jawaban">
                            </div>
                        @endif
                    </div>
                    <br>
                @endif
            @endforeach

            <br>
            <input type="submit" value="Ajukan Legalisir">
        </form>
    </div>
</body>

@include('alumni.includes.footer')

</html>
