<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <title>Edit Data {{$mahasiswa->nama}}</title>
</head>
<body>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>Pendaftaran Mahasiswa</h1>
                <hr>

                <form action=" {{ route('mahasiswas.update', ['mahasiswa' => $mahasiswa->id])}} " method="post">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input id="nim" class="form-control @error('nim') is-invalid @enderror" type="text" name="nim"
                        value="{{ old('nim') ?? $mahasiswa->nim }}">
                        @error('nim')
                            <div class="text-danger"> {{ $message }} </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input id="nama" class="form-control @error('nama') is-invalid @enderror" type="text" name="nama"
                                value="{{ old('nama') ?? $mahasiswa->nama }}">
                        @error('nama')
                            <div class="text-danger"> {{ $message }} </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div>
                            <label>Jenis Kelamin</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="L"
                                    {{(old('jenis_kelamin') ?? $mahasiswa->jenis_kelamin) == 'L' ? 'checked' : ''}}>
                                <label for="laki_laki" class="form-check-label">Laki-Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P"
                                    {{(old('jenis_kelamin') ?? $mahasiswa->jenis_kelamin) == 'P' ? 'checked' : ''}}>
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
                                {{(old('jurusan') ?? $mahasiswa->jurusan)== 'Teknik Informatika' ? 'selected': ''}}>
                                Teknik Informatika
                            </option>
                            <option value="Sistem Informasi"
                                {{(old('jurusan') ?? $mahasiswa->jurusan)== 'Sistem Informasi' ? 'selected': ''}}>
                                Sistem Informasi
                            </option>
                            <option value="Ilmu Komputer"
                                {{(old('jurusan') ?? $mahasiswa->jurusan)== 'Ilmu Komputer' ? 'selected': ''}}>
                                Ilmu Komputer
                            </option>
                            <option value="Teknik Komputer"
                                {{(old('jurusan') ?? $mahasiswa->jurusan)== 'Teknik Komputer' ? 'selected': ''}}>
                                Teknik Komputer
                            </option>
                            <option value="Teknik Telekomunikasi"
                                {{(old('jurusan') ?? $mahasiswa->jurusan)== 'Teknik Telekomunikasi' ? 'selected': ''}}>
                                Teknik Telekomunikasi
                            </option>
                            <option value="Teknik Komputer dan Jaringan"
                                {{(old('jurusan') ?? $mahasiswa->jurusan)== 'Teknik Komputer dan Jaringan' ? 'selected': ''}}>
                                Teknik Komputer dan Jaringan
                            </option>
                        </select>
                        @error('jurusan')
                            <div class="text-danger"> {{ $message }} </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                    <textarea id="alamat" class="form-control" name="alamat" rows="3">{{ old('alamat') ?? $mahasiswa->alamat}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mb-2">Update</button>
                </form>

            </div>
        </div>
    </div>
</body>
</html>
