<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BOOTSTRAP 5--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--JQUERY-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!--Code-->
    <!--CSS-->
    <link rel="stylesheet" href="/Dashboard.css">
    <link rel="stylesheet" href="/Component/NavBar.css">
</head>
<body>
    <div class="d-flex flex-row-reverse mb-1" style="margin-top: 3.9%; margin-right: 0.8%; ">
        <div class="ml-auto dropdown static" id="dropdownID">
            <button type="button" class="dropdown-toggle btn btn-info" role="button" data-bs-toggle="dropdown">ADMIN</button>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="/createmenudiet" class="dropdown-item menu-action">Create-MenuDiet</a>
                <a href="/Add-Carousel" class="dropdown-item menu-action">Add-Carousel</a>
            </div>
        </div>
    </div>
</body>

</html>
<script src="{{ asset('Default.js') }}"></script>
<script>
    window.onload = function() {
        cekLogin();
        cekAdmin();
    };
</script>