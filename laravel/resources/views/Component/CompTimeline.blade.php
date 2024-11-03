<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>{{$page .'-menu'. $data->id}}</title>
</head>

<body>
    <div class="d-flex flex-row-reverse">
        <div class="ml-auto dropdown">
            <a href="#" class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                aria-haspopup="true" aria-controls="{{$page .'-menu'. $data->id}}">'''</a>
            <div class="dropdown-menu dropdown-menu-right" aria-controls="{{$page .'-menu'. $data->id}}" id="{{$page .'-menu'. $data->id}}"
                style="will-change: transform; position: absolute; transform: translate3d(-147px, 34px, 0px); top: 0px; left: 0px;">
                <a href="{{ url( $page .'/' . $data->id . '/delete') }}" class="dropdown-item menu-action">Delete</a>
                <a href="{{ url( $page .'/' . $data->id . '/' . session('id') .'/edit') }}" class="dropdown-item">Modify</a>
            </div>
        </div>
    </div>
</body>

</html>