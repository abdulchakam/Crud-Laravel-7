<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <title>Form Pendaftaran</title>
</head>
<body>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>Pendaftaran Mahasiswa</h1>
                <hr>

                <form action=" {{ route('mahasiswas.store') }} " method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input id="nim" class="form-control @error('nim') is-invalid @enderror" type="text" name="nim" value=" {{old('nim')}}">
                        @error('nim')
                            <div class="text-danger"> {{ $message }} </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input id="nama" class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" value=" {{old('nama')}}">
                        @error('nama')
                            <div class="text-danger"> {{ $message }} </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div>
                            <label>Jenis Kelamin</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="L"
                                    @if (old('jenis_kelamin') == 'L')
                                        checked
                                    @endif>
                                <label for="laki_laki" class="form-check-label">Laki-Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P"
                                @if (old('jenis_kelamin') == 'P')
                                    checked
                                @endif >
                                <label for="laki_laki" class="form-check-label">Perempuan</label>
                            </div>
                            @error('jenis_kelamin')
                                <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Text</label>
                        <select id="jurusan" class="form-control" name="jurusan">
                            <option value="Teknik Informatika"
                                @if (old('jurusan') == 'Teknik Informatika')
                                    selected
                                @endif>Teknik Informatika</option>
                            <option value="Sistem Informasi"
                                @if (old('jurusan') == 'Sistem Informasi')
                                    selected
                                @endif>Sistem Informasi</option>
                            <option value="Ilmu Komputer"
                                @if (old('jurusan') == 'Ilmu Komputer')
                                    selected
                                @endif>Ilmu Komputer</option>
                            <option value="Teknik Komputer"
                                @if (old('jurusan') == 'Teknik Komputer')
                                    selected
                                @endif>Teknik Komputer</option>
                            <option value="Teknik Telekomunikasi"
                                @if (old('jurusan') == 'Teknik Telekomunikasi')
                                    selected
                                @endif>Teknik Telekomunikasi</option>
                            <option value="Teknik Komputer dan Jaringan"
                                @if (old('jurusan') == 'Teknik Komputer dan Jaringan')
                                    selected
                                @endif>Teknik Komputer dan Jaringan</option>
                        </select>
                        @error('jurusan')
                            <div class="text-danger"> {{ $message }} </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea id="alamat" class="form-control" name="alamat" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mb-2">Daftar</button>
                </form>

            </div>
        </div>
    </div>
</body>
</html>
