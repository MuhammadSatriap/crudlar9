<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Pemain</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">Data Pemain</h1>
    <div class="container">
        <a href="/tambahdata" type="button" class="btn btn-success">Tambah user</a>
        <div class="row">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Id Pemain</th>
                <th scope="col">Nama</th>
                <th scope="col">Nomor Punggung</th>
                <th scope="col">idclub</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @php 
              $no = 1;
            @endphp    
            @foreach ($data as $row)
                <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $row->idpemain }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->nopunggung }}</td>
                <td>{{ $row->idclub }}</td>
                <td>
                    <a href="/tampildata/{{ $row->id }}" class="btn btn-warning">Rubah</a>    
                    <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}" data-nama="{{ $row->nama }}" >Hapus</a>    
                </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.slim.js" integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>
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
            window.location = "/deletedata/"+pemainid+""
            swal("Poof! this user has been deleted!", {
              icon: "success",
            });
          } else {
            swal("Your data is not deleted!");
          }
        });
    });

        


  </script>
</html>