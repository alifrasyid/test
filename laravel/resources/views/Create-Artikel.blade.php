<!DOCTYPE html>

<head>
    <!--BOOTSTRAP 5--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--CODE-->
    <title>Create-Artikel</title>
    <!--CSS-->
    <link rel="stylesheet" href="./Component/NavBar.css">
</head>

<body style="background-color: #C394E8;">
    <!--NAVBAR-->
    @component('Component.Navbar')
    @endcomponent

    <!--Konten-->
    <div class="container" style="margin-top: 100px;">
        <div class="card" style="background-color: #DCD0FF;">
            <div class="card-body">
                <form class="form-group" method="POST" action="{{$action}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="{{ $method }}" />
                    <div class="mb-3">
                        <label for="title">Judul:</label>
                        <input type="text" class="form-control" id="title" name="Judul" placeholder="Masukkan judul artikel" value = "{{ isset($prods)?$prods->Judul:'' }}">
                    </div>
                    <div class="row mb-3">
                        <label for="file" style="cursor: pointer;">
                            <div class="card" style="background-color: #DCD0FF; border: 2px dashed #000;">
                                <div class="card-body">
                                    <center>
                                        <img src="/Image/Timeline/UploadIcon-removebg-preview.png" alt="Upload Gambar" style="width: 50px; height: 50px;"><br>
                                        <p>Upload Gambar</p>
                                        <input type="file" id="file" name="Image">
                                    </center>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class="mb-3">
                        <label for="content">Isi Artikel:</label>
                        <textarea class="form-control" id="content" name="Deskripsi" rows="5" placeholder="Tulis artikel Anda di sini">{{ isset($prods)?$prods->Deskripsi:'' }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </form>
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