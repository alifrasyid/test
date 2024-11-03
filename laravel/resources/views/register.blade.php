<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>SignUp HealthSis</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    
</head>

<body style="">
<body>
    
    <center>
        <div class="gambar">

        </div>
        <div class="Main" style="width:500px; height: 415px; margin-top: 30px;">

            <form action="/store" method="POST">
                <h1>Register</h1>
                @csrf
                <div class="row g-3">
                    <div class="col-sm-5">
                        <input type="text" name="FirstName" id="FN-id" class="form-control" style="width: 175px;"
                            placeholder="First Name" value="{{ isset($data)?$data->FirstName:'' }}">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" name="LastName" id="LN-id" class="form-control"
                            style="width: 175px; margin-left: 95px;" placeholder="Last Name" value="{{ isset($data)?$data->LastName:'' }}">
                    </div>
                </div>
                <div class="row g-3 mt-1">
                    <input type="text" name="Username" id="Uname-ID" class="form-control"
                        style="width: 475px; margin-left: 20px;" placeholder="Username" value="{{ isset($data)?$data->Username:'' }}">
                </div>
                <div class="row g-3 mt-1">
                    <input type="text" name="Email" id="email-ID" class="form-control"
                        style="width: 475px; margin-left: 20px;" placeholder="Email" value="{{ isset($data)?$data->Email:'' }}">
                </div>
                <div class="row g-3 mt-1">
                    <input type="password" name="password" id="P-ID" class="form-control"
                        style="width: 475px; margin-left: 20px;" placeholder="Password" value="{{ isset($data)?$data->password:'' }}">
                </div>
                <br><input type="submit" value="Sign Up" class="btn btn-primary"><br>
                <a href="/Login" class="form-text">Sudah mempunyai akun</a>

            </form>

        </div>


    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

<footer>

</footer>