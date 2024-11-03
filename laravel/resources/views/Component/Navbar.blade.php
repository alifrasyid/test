<!DOCTYPE html>

<head>
    <!--BOOTSTRAP 5--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--AJAX-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('NavBar.css') }}">
</head>

<body>
    <!--Code-->
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #fcb1b1">
        <div class="container-fluid">
            <a href="/Dashboard"><img src="/Image/HealthSIs-removebg-preview.png" alt="Logo HealthSIs" id="LogoHS"
                    style="width: 90px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" style="color: black;" style="font-size: 10ch;"
                            href="/menudiet">Menu Diet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" style="color: black" href="/artikel">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" style="color: black;" href="/timeline">Timeline</a>
                    </li>

                </ul>
            </div>
            <div class="d-flex ml-auto">
                
                <div class="card-text btn btn-info mx-1" style="background-color: #C394E8;" id="LoginBar">
                    <a href="/Login" class="form-text" style="color: black;">Login</a>
                </div>

                <!-- <div class="card-text btn btn-info mx-1" style="background-color: #C394E8;" id="SignUpBar">
                    <a href="/register" class="form-text" style="color: white;">Register</a>
                </div> -->

                <div class="card-text btn btn-info mx-1" style="background-color: #C394E8;" id="ProfileBar">
                    <a href="/HealthSis/{{ session('id') }}/edit" class="form-text" style="color: black;">{{
                        session('username') }}</a>
                </div>

                <div class="card-text btn btn-info mx-1" style="background-color: #C394E8;" id="SignOutBar">
                    <a href="/logout" class="form-text" onclick="LogOut()" style="color: black;">SignOut</a>
                </div>
            </div>
        </div>
    </nav>
</body>

<script src="{{ asset('Default.js') }}"></script>
<script>
    window.onload = function () {
        cekLogin();
        cekAdmin();
    };
</script>