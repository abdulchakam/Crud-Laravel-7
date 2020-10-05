<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Biodata {{ $mahasiswa->nama }} </title>
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="pt-3 d-flex justify-content-end align-items-center">
                    <h1 class="h2 mr-auto">Biodata {{$mahasiswa->nama}}</h1>
                    <a href="{{ route('mahasiswas.edit', ['mahasiswa' => $mahasiswa->id]) }} " class="btn btn-primary">Edit</a>
                    <a href="" class="button btn btn-danger ml-3" data-id="{{$mahasiswa->id}}">Delete</a>

                </div>
                <hr>
                @if (session()->has('pesan'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('pesan') }}
                    </div>
                @endif
                <ul>
                    <li>NIM : {{ $mahasiswa->nim}}</li>
                    <li>Nama : {{ $mahasiswa->nama}}</li>
                    <li>Jenis Kelamin :
                        {{ $mahasiswa->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki'}}
                    </li>
                    <li>Jurusan : {{ $mahasiswa->jurusan}}</li>
                    <li>Alamat : {{ $mahasiswa->alamat == '' ? 'N/A' : $mahasiswa->alamat}}</li>
                </ul>
            </div>
        </div>
    </div>
	
	    <script>
        $(document).on('click', '.button', function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            console.log(id)
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "id": id
                        },
                        type: "POST",
                        method: "DELETE",
                        url: `/mahasiswas/${id}`,
                        success: function (data) {
                            Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                            )
                            window.location.href = "/mahasiswas";
                        },
                        error: function(error){
                            console.log(error);
                        }
                    });

                }
            });
        });
    </script>
	
</body>
</html>
