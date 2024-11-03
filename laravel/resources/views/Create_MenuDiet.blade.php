<!DOCTYPE html>

<head>
    <!--BOOTSTRAP 5--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--CODE-->
    <title>{{$title}}-MenuDiet</title>
    <!--CSS-->
    <link rel="stylesheet" href="./Component/NavBar.css">
</head>

<body style="background-color: #C394E8;">
    <!--NAVBAR-->
    @component('Component.Navbar')
    @endcomponent
    <!--Konten-->
    <div class="container">
        <form action="{{$action}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="{{ $method }}"/>
            <div class="row mb-3">
                <div class="col-md-12">
                    <h6 class="form-label text-start mb-3 mt-3">Upload Foto</h6>
                    <div class="border p-2">
                        <center>
                            <label for="upload" style="cursor: pointer;">
                                <img src="/Image/Timeline/UploadIcon-removebg-preview.png" alt="Upload" class="text-center">
                                <p class="form-text text-center">Upload Gambar</p>
                                <input type="file" name="Image" id="upload">
                            </label>
                        </center>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <h6 class="form-label text-start mb-2">Nama Makanan</h6>
                    <input type="text" name="Judul" id="Food-id" class="form-control" placeholder="Oseng Buncis" value="{{ isset($data)?$data->Judul:'' }}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <h6 class="form-label text-start mb-2">Kalori Makanan (Kal)</h6>
                    <input type="number" name="SubJudul" id="Food-id" class="form-control" placeholder="2100" value="{{ isset($data)?$data->Subjudul:'' }}" >
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <h6 class="form-label text-start mb-2">Deskripsi</h6>
                    <!-- <input type="text" name="Deskripsi" id="Food-id" class="form-control" placeholder="Isi Deskripsi Disini" value="{{ isset($data)?$data->Deskripsi:'' }}" style="width : 1500px;"> -->
                    <textarea class="form-control" name="Deskripsi" placeholder="Isi Deskripsi Disini" id="Food-id" style="height : 350px;">{{ isset($data)?$data->Deskripsi:'' }}</textarea>

                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <input type="submit" value="Submit" class="btn btn-primary float-end">
                </div>
            </div>
        </form>
    </div>

</body>

<script src="/Default.js"></script>
<script>
    window.onload = function() {
        cekLogin();
        cekAdmin();
    };
</script>