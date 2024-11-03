<!DOCTYPE html>

<head>
    <!--BOOTSTRAP 5--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--CODE-->
    <title>Timeline</title>
    <!--CSS-->
    <link rel="stylesheet" href="./Component/NavBar.css">
</head>

<body style="background-color: #C394E8;">
    <!--NAVBAR-->
    @component('Component.Navbar')
    @endcomponent
        
    <!--Konten-->
    <div class="container" style="margin-top:6%;">
        
        <div class="container text-center">
                @foreach($prods as $d)
                <div class="row items-center mb-4">
                    <div class="col-2 p-2" style="background-color: aqua;">
                        <img src="{{url('public/Image/'.$d->Image)}}" alt="BigMan" class="rounded-circle w-20"
                            style="width: 120px; position: relative;">
                    </div>
                    <div class="col p-2" style="background-color: aqua;">
                    @if(session('username')==$d->Username)
                        @component('Component.CompTimeline', ['data' => $d, 'page' => 'timeline'])
                        @endcomponent
                    @endif
                        <label for="Name" class="float-start"
                            style="background-color: white; position: relative;">{{$d->Username}}</label><br>
                        <p class="float text-start" style="background-color: aqua;">
                            {{$d->Message}}
                        </p>
                    </div>
                </div>   
                @endforeach
        </div>
    </div>
</body>

<footer>
    <!--UPLOAD BUTTON-->
    <div class="position-relative">
        <a href="/timeline/{{session('id')}}/create-timeline" onclick="return AlertLogin();"><img src="./Image/Timeline/UploadIcon-removebg-preview.png" alt="Upload" class="rounded-circle position-fixed bottom-0 end-0"></a>
    </div>

</footer>

<script src="{{ asset('Default.js') }}"></script>
<script>
    window.onload = function() {
        cekLogin();
        cekAdmin();
    };
</script>
