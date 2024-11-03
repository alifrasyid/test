<!DOCTYPE html>

<head>
    <!--BOOTSTRAP 5--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--JQUERY-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!--Code JUDUL WEB-->
    <title>{{$prods->Judul}}</title>
    <!--CSS-->
    <link rel="stylesheet" href="/Dashboard.css">
    <link rel="stylesheet" href="/Component/NavBar.css">
</head>

<body>
    <!--NAVBAR-->
    @component('Component.Navbar')
    @endcomponent    
    
    <!--ISI KONTEN MENU DIET-->
    <div class="container-fluid text-center">
        <img src="{{url('public/Image/'.$prods->Image)}}" alt="Artikel_1" class="img-fluid">
        <div class="row">
            <div class="col-md-8">
                <h2 class="text-start">{{$prods->Judul}}</h2>
                <p class="text-info text-start" style="font-style: italic;">Created by {{$prods->Created_by}} ({{$prods->updated_at}})</p>
                <p class="text-start">{{$prods->Deskripsi}}</p>
            </div>
        </div>
    </div>

</body>

<script src="/Default.js"></script>
<script>
    window.onload = function() {
        cekLogin();
        cekAdmin();
    };
</script>