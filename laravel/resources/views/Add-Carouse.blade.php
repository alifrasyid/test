<!DOCTYPE html>

<head>
    <!--BOOTSTRAP 5--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--CODE-->
    <title>{{$title}}-Dashboard</title>
    <!--CSS-->
    <link rel="stylesheet" href="./Component/NavBar.css">
</head>

<body style="background-color: #C394E8;">
    <!--NAVBAR-->
    @component('Component.Navbar')
    @endcomponent

    <!--Konten-->
    <div class="container mt-5">
        <div class="card" style="background-color: #DCD0FF;">
            <div class="card-body">
                <form class="form-group" method="post" action="{{$action}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="{{ $method }}" />
                    <div class="mb-3">
                        <label for="title">Judul:</label>
                        <input type="text" class="form-control" id="title" name="Judul" placeholder="Selamat Datang" value="{{ isset($data)?$data->Judul:'' }}">
                    </div>
                    <div class="row mb-3">
                        <label for="file" style="cursor: pointer;">
                            <div class="card" style="background-color: #DCD0FF; border: 2px dashed #000;">
                                <div class="card-body">
                                    <center>
                                        <img src="./Image/Timeline/UploadIcon-removebg-preview.png" alt="Upload Gambar" style="width: 50px; height: 50px;"><br>
                                        <p>Upload Gambar</p>
                                        <input type="file" id="file" name="Image">
                                    </center>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class="mb-3">
                        <label for="content">Deskripsi :</label>
                        <textarea class="form-control" id="content" name="Deskripsi" rows="5" placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, voluptatum quae eveniet iusto quod
                        quaerat sed consequatur perspiciatis sequi nisi cumque quas eum distinctio nesciunt numquam
                        nostrum quibusdam iste voluptate.">{{ isset($data)?$data->Deskripsi:'' }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
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