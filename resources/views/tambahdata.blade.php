<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">Tambah data mahasiswa</h1>
    
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-8">
        <div class="card">
          <div class="card-body">
          <form action="/tambahact" method="POST" enctype="multipart/form-data">
            @csrf 
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Id Pemain</label>
                <input type="number" name="idpemain" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Pemain</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">No Punggung</label>
                <input type="number" name="nopunggung" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>  
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Id Club</label>
                <input type="number" name="idclub" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
              
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          </div>
        </div>
        </div>
        
      </div>
    </div>
    
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>