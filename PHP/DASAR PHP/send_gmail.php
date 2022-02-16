<?php
if (isset($_POST['send'])) {
   ini_set('display_errors', 1);
   error_reporting(E_ALL);
   $from = $_POST['email'];
   $to = "armanumar2302@gmail.com";
   $subject = $_POST['name'];
   $message = "Lanjutkan Bang";
   $headers = "From:" . $from;
   mail($to, $subject, $message, $headers);
   echo "Pesan email sudah terkirim.";
}
?>

<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   <title>Study Send Message With Gmail</title>
</head>

<body>
   <form action="" method="post" class="container col-4 mt-5">
      <div class="mb-3">
         <label class="form-label">Name</label>
         <input name="name" type="text" class="form-control">
      </div>
      <div class="mb mt-5-3">
         <label class="form-label">Email address</label>
         <input name="email" type="email" class="form-control">
      </div>

      <button name="send" type="submit" class="btn btn-primary">Send</button>
   </form>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>