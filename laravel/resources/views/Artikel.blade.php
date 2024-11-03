<!DOCTYPE html>

<head>
    <!--BOOTSTRAP 5--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--Code-->
    <title>Artikel</title>
    <!--CSS-->
    <link rel="stylesheet" href="./Dashboard.css">
    <link rel="stylesheet" href="./Component/NavBar.css">
</head>

<body>
    <!--NAVBAR-->
    @component('Component.Navbar')
    @endcomponent
    <!--KONTEN-->
    <div class="container" style="margin-top:100px;">
        <!--ITEM 1-->
        @foreach($prods as $d)
        <div class="card mt-5 mb-3">
            <div class="row mb-2">
                <div class="col-md-4">
                    <img src="{{url('public/Image/'.$d->Image)}}" alt="Food-1" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    @if(session('username')==$d->Created_by || session('username')=='ADMIN')
                        @component('Component.CompTimeline', ['data' => $d, 'page' => 'artikel'])
                        @endcomponent
                    @endif
                        <h5 class="card-title">{{$d->Judul}}</h5>
                        <p class="card-text">{{$d->Deskripsi}}</p>
                        <a href="/Artikel/{{$d->id}}"><input type="button" value="More" class="card-text btn btn-info"></a>
                    </div>  
                </div>
            </div>
        </div>
        @endforeach
     
        <div class="row mt-3 mb-3 items-center">
            <input type="button" value="More" class="btn btn-primary">
        </div>
        <div class="row mb-5 text-center">
            <a href="/artikel/{{session('id')}}/create-artikel"><input type="button" value="Create" class="btn btn-primary" id="CreateArtikel" style="width: 1310px"></a>
        </div>
        <!--ITEM 4-->
    </div>
</body>

<script src="/Default.js"></script>

<script>
    window.onload = function() {
        cekLogin();
        cekAdmin();
    };
</script>