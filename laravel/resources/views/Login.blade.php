<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Login HealthSis</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <center>
        <div class="gambar">

        </div>
        <!---->
        <div class="Main" style="margin-top: 65px;">
            <h1>Login</h1>
            <form id="formLogin-id">
                <div class="mb-3">
                    <input type="text" name="email" id="Uname-id" class="text-box" placeholder="Email"
                        value="{{ isset($data)?$data->email:'' }}" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" id="P-id" class="text-box" placeholder="Password"
                        value="{{ isset($data)?$data->password:'' }}" required>
                </div>

                <div class="mb-3">
                    <input type="submit" value="Sign In" class="btn btn-primary" id="signInbtn-id" name="signInbtn"
                        onclick="login()"><br>
                    <a href="/register" class="form-text">Tidak mempunyai akun!?</a>
                </div>
                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
            </form>
        </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

<script src="{{ asset('Default.js') }}"></script>