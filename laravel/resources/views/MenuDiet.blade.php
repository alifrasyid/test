<!DOCTYPE html>

<head>
    <!--BOOTSTRAP 5--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--JQUERY-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!--Code-->
    <title>Menu diet</title>
    <!--CSS-->
    <link rel="stylesheet" href="./Component/NavBar.css">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!--NAVBAR-->
    @component('Component.Navbar')
    @endcomponent
    <!--ISI KONTEN MENU DIET-->
    <!--Konten Admin-->

    <!-- COBA BARIS KE 1 -->
    <div class="container mb-3" style="margin-top:5%;">
        @if(session('statusAdmin') === true)
        @component('Component.Admin')
        @endcomponent
        @endif
        <div class="row">
            <h1>Most Related</h1>
        </div>
        <div class="row">
            @foreach($prods as $d)
            <!--Food1-->
            <div class="card col m-lg-2 ">
                <div class="card-body">
                    @if(session('statusAdmin') === true)
                    <div class="d-flex flex-row-reverse">
                        <form method="post" action="/menudiet/{{ $d->id }}/delete" style="display:inline"
                            onsubmit="return confirm('Yakin hapus?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"><i class="fa fa-close"></i></button>
                        </form>
                    </div>
                    @endif
                    <h5 class="card-title">{{$d->Judul}}</h5>
                    <img src="{{url('public/Image/'.$d->Image)}}" class="img-thumbnail" alt="...">
                    <p class="card-text">{{$d->Subjudul}} Kal</p>
                    <a href="/menudiet/{{$d->id}}/food" class="btn btn-primary">Selengkapnya</a>
                    @if(session('statusAdmin') === true)
                    <div>
                        <a href="/menudiet/{{$d->id}}/edit"><button type="button" class="btn btn-secondary" data-dismiss="modal">Update</button></a>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!--Baris ke-2 Konten-->
    <div class="container mb-3" style="margin-top:5%;">
        <div class="row">
            <h1>Recommended</h1>
        </div>
        <div class="row">
            @foreach($prods as $d)
            <!--Food1-->
            <div class="card col m-lg-2 ">
                <div class="card-body">
                    @if(session('statusAdmin') === true)
                    <div class="d-flex flex-row-reverse">
                        <form method="post" action="/menudiet/{{ $d->id }}/delete" style="display:inline"
                            onsubmit="return confirm('Yakin hapus?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"><i class="fa fa-close"></i></button>
                        </form>
                    </div>
                    @endif
                    <h5 class="card-title">{{$d->Judul}}</h5>
                    <img src="{{url('public/Image/'.$d->Image)}}" class="img-thumbnail" alt="...">
                    <p class="card-text">{{$d->Subjudul}} Kal</p>
                    <a href="/menudiet/{{$d->id}}/food" class="btn btn-primary">Selengkapnya</a>
                    @if(session('statusAdmin') === true)
                    <div>
                        <a href="/menudiet/{{$d->id}}/edit"><button type="button" class="btn btn-secondary" data-dismiss="modal">Update</button></a>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

<script src="{{ asset('Default.js') }}"></script>
<script>
    window.onload = function () {
        cekLogin();
        cekAdmin();
    };
</script>