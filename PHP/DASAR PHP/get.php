<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   <title>Method Get</title>
</head>

<body>
   <div class="container col-4 mt-4">
      <form action="" method="get">
         <div class="mb-3">
            <label class="form-label">Nama </label>
            <input name="nama" type="text" class="form-control">
         </div>
         <div class="mb-3">
            <label class="form-label">Nim</label>
            <input name="nim" type="text" class="form-control">
         </div>
         <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </form>
      <?php
      if (isset($_GET['submit'])) {
         $name = $_GET['nama'];
         $nim = $_GET['nim']; ?>
         <table class="table mt-3">
            <thead>
               <tr>
                  <th scope="col">No</th>
                  <th scope="col">Name</th>
                  <th scope="col">Nim</th>

               </tr>
            </thead>
            <tbody>
               <tr>
                  <th scope="row">1</th>
                  <td><?php echo $name ?></td>
                  <td><?php echo $nim ?></td>

               </tr>


            </tbody>
         </table>
      <?php
      }
      ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>