<!DOCTYPE html>

<head>
    <!--BOOTSTRAP 5--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--CODE-->
    <title>{{$title}}-Timeline</title>
    <!--CSS-->
    <link rel="stylesheet" href="./Component/NavBar.css">
</head>

<body style="background-color: #C394E8;">
    <!--NAVBAR-->
    @component('Component.Navbar')
    @endcomponent

    <!--Konten-->
    <div class="container" style="margin-top:7%;">
        <div class="row">
            <div class="col-2">
                <img src="{{url('public/Image/'.$prods->Image)}}" alt="BigMan" class="rounded-circle"
                    style="width: 100%; position: relative;">
            </div>
            <div class="col-10">
                <form class="form-group" method="POST" action="{{$action}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="{{ $method }}" />
                    <label for="Username" class="float-start" name="Username"
                        style="font-size: large; font-weight: bold; position: relative;">{{
                        $prods->Username }}
                    </label><br>
                    <label for="upload" style="cursor: pointer; width: 100%;">
                        <div class="card" style="background-color: #C394E8; border: 2px dashed #000;">
                            <div class="card-body text-center">
                                <img src="/Image/Timeline/UploadIcon-removebg-preview.png" alt="Upload Gambar"><br>
                                <p>Upload Gambar</p>
                                <input type="file" id="upload" name="Image">
                            </div>
                        </div>
                    </label>
                    <div class="mt-3">
                        <textarea class="form-control" rows="4" style="background-color: aqua;" name="Message"
                            placeholder="Send Message...">{{ isset($prods)?$prods->Message:'' }}</textarea>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary float-end">Submit</button>
                    </div>
                </form>
            </div>
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