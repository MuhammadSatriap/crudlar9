<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <h1 class="text-center mt-4 mb-4">Data Mahasiswa</h1>
    <div class="container card shadow mb-4">
    <div class="container">
        <div class="card-header">
        <form class="row mt-3">
          <div class="col-auto">
            <form action="/mahasiswa" method="GET">
            <input type="search" name="search" class="form-control" id="inputPassword2" placeholder="Search">
            </form>
          </div>
        </form>
        <a href="/tambahmhs" type="button" class="btn btn-success mb-3 mt-3">Tambah Mahasiswa</a>
        </div>
        <div class="row">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">NRP</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @php 
              $no = 1;
            @endphp    
            @foreach ($data as $index => $row)
                <tr>
                <th scope="row">{{ $index + $data->firstItem() }}</th>
                <td>{{ $row->nrp }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->email }}</td>
                <td>
                    <a href="/tampilmhs/{{ $row->id }}" class="btn btn-warning">Rubah</a>    
                    <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}" data-nama="{{ $row->nama }}" >Hapus</a>    
                </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        </div>
    </div>
    {{ $data->links() }}

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
  <script>
    $('.delete').click( function(){
      var pemainid = $(this).attr('data-id');
      var pemainnama = $(this).attr('data-nama');
      
      swal({
        title: "Are you sure?",
        text: "Do you want to delete "+pemainnama+" ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location = "/deletemhs/"+pemainid+""
            swal("Poof! this user has been deleted!", {
              icon: "success",
            });
          } else {
            swal("Your data is not deleted!");
          }
        });
    });

  </script>
  <script>
    @if (Session::has('success'))
      toastr.success("{{ Session::get('success') }}")
    @endif

  </script>
</html>