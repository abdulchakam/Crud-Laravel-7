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

    <form action="{{ url('/file-upload-rename') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama_gambar">Nama Gambar</label>
            <input type="text" name="nama_gambar" id="nama_gambar" class="form-control w-50"
                    value="{{ old('nama_gambar') }}">
            @error('nama_gambar')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="gambar_profile">Gambar Profil</label>
            <input type="file" name="gambar_profile" id="gambar_profile" class="from-control-file">
            @error('gambar_profile')
                <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary my-2">Upload</button>
    </form>
    </div>
</body>
</html>
