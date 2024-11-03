<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="profile.css">
    <title>Profil Saya</title>
</head>

<body style="background-color: #C394E8;">

    @component('Component.Navbar')
    @endcomponent

    <span role="button" id="open-sidebar" class="btn btn-primary " data-bs-toggle="offcanvas" data-bs-target="#mySidebar" aria-controls="mySidebar" style="font-size: 30px; cursor: pointer; position: absolute; top: 80px; left: 20px;">&#9776;</span>
    <!-- <a href="/Dashboard" id="home-link" style="position: absolute; top: 20px; right: 20px; font-size: 30px;">
        &#127968;
    </a> -->
    <div id="mySidebar" class="offcanvas offcanvas-start" tabindex="-1" style="background-color: #a00066;">
        <div class="offcanvas-header">
            <h2 class="offcanvas-title" style="color: white;">Profile</h2>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                <center>
                    <img src="{{url('public/Image/'.$prods->Image)}}" alt="Profil Saya" class="rounded-circle img-fluid" id="profile-image" style="width: 200px; height: 200px;">
                </center><br>
                <h4 id="usernameP" style="color: white; margin-top: 10px; padding: 10px;">{{$prods->Username}}</h4>
                <h4 id="phoneP" style="color: white; margin-top: 10px; padding: 10px;">{{$prods->NoHP}}</h4>
                <h4 id="statusP" style="color: white; margin-top: 10px; padding: 10px;">{{$prods->Status}}</h4>
                <h4 id="ageP" style="color: white; margin-top: 10px; padding: 10px;">{{$prods->Umur}}</h4>
                <h4 id="noteP" style="color: white; margin-top: 10px; padding: 10px;">{{$prods->Note}}</h4>
            </div>
        </div>
        <div class="offcanvas-footer">
            <button type="button" class="btn btn-danger w-100" data-bs-target="#hapusAkun" data-bs-toggle="modal">Delete
                Account</button>
        </div>
    </div>

    <div class="container container-shifted" style="margin-top: 100px;">
        <form method="POST" action="/{{ $action }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="{{ $method }}" />
            <div class="row">
                <div class="col-md-3">
                    <div class="card" style="background-color: #a00066;" id="gambar">
                        <div class="card-body text-center">
                            <label for="upload" style="cursor:pointer;">
                                <img src="{{url('public/Image/'.$prods->Image)}}" alt="Profil Saya" id="preview-image" class="rounded-circle img-fluid" style="width: 200px; height: 200px;">
                                <input type="file" name="Image" id="upload" style="display: none;" onchange="previewImage(this);">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header">
                            Edit Profile
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="Username" class="form-control" id="username" placeholder="Username" value="{{ isset($prods)?$prods->Username:'' }}">
                            </div>
                            <div class="mb-3">
                                <label for="NoHP" class="form-label">No HP</label>
                                <input type="text" name="NoHP" class="form-control" id="NoHP" placeholder="No HP" value="{{ isset($prods)?$prods->NoHP:'' }}">
                            </div>
                            <div class="mb-3">
                                <label for="Status" class="form-label">Status</label>
                                <input type="text" name="Status" class="form-control" id="Status" placeholder="Status" value="{{ isset($prods)?$prods->Status:'' }}">
                            </div>
                            <div class="mb-3">
                                <label for="TanggalLahir" class="form-label">Date of Birth</label>
                                <input type="date" name="TanggalLahir" class="form-control" id="TanggalLahir" value="{{ isset($prods)?$prods->TanggalLahir:'' }}">
                            </div>
                            <div class="mb-3">
                                <label for="Note" class="form-label">Note</label>
                                <input type="text" name="Note" class="form-control" id="Note" placeholder="Note" value="{{ isset($prods)?$prods->Note:'' }}">
                            </div>
                            <button type="submit" class="btn btn-primary float-end">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="modal fade" id="hapusAkun" tabindex="-1" role="dialog" aria-labelledby="hapusAkunTitle">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusAkunTitle">Konfirmasi Penghapusan Akun</h5>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus akun?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <form method="post" action="/HealthSis/{{ $prods->id }}/delete">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="LogOut()">Hapus Akun</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('Default.js') }}"></script>
</body>

</html>