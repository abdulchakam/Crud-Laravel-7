<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Upload</title>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container mt-3">
        <h2>File Upload</h2>
        <hr>

    <form action="{{ url('/file-upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="berkas">Gambar Profil</label>
            <input type="file" name="berkas" id="berkas" class="from-control-file">
            @error('berkas')
                <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary my-2">Upload</button>
    </form>
    </div>
</body>
</html>
