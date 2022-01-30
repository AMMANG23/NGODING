<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar array</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
  <div class="container"><br><center>
    <form action="" method="post"/>
    <h3 class="btn btn-dark">Konversi Satuan Panjang</h3><br>
<div class="mb-2">
  <input name="nilai" type="number" class="form-control" id="formGroupExampleInput" placeholder="Masukkan nilai yang akan dikonversi">
</div></center>
   <select name="satuan" class="form-select" aria-label="Default select example">
  <option selected>Pilih Satuan</option>
  <option value="km">KiloMeter</option>
  <option value="hk">HektoMeter</option>
  <option value="dk">DekaMeter</option>
  <option value="m">Meter</option>
  <option value="ds">DesiMeter</option>
  <option value="cm">CentiMeter</option>
  <option value="mm">MilliMeter</option>
</select><br><div class="mb-3">
<select name="konversi" class="form-select" aria-label="Default select example">
  <option selected>Konversi Ke ?</option>
  <option value="kilo">KiloMeter</option>
  <option value="hekto">HektoMeter</option>
  <option value="deka">DekaMeter</option>
  <option value="meter">Meter</option>
  <option value="desi">DesiMeter</option>
  <option value="centi">CentiMeter</option>
  <option value="milli">MilliMeter</option>
</select></div>
<button name='konver' type='submit' class='btn btn-primary'>Konversi</button></center>
<?php
if (isset($_POST['konver'])) {
  if($_POST['satuan'] == "km"){
    if($_POST['konversi'] == "kilo"){
      echo($_POST['nilai']." Kilometer");
    }
    elseif($_POST['konversi'] == "hekto"){
      echo(($_POST['nilai'] * 10)." Hektometer");
    }
    elseif($_POST['konversi'] == "deka"){
      echo(($_POST['nilai'] * 100)." Dekameter");
    }
    elseif($_POST['konversi'] == "meter"){
      echo(($_POST['nilai'] * 1000)." Meter");
    }
    elseif($_POST['konversi'] == "desi"){
      echo(($_POST['nilai'] * 10000)." Desimeter");
    }
    elseif($_POST['konversi'] == "centi"){
      echo(($_POST['nilai'] * 100000)." Centimeter");
    }
    elseif($_POST['konversi'] == "milli"){
      echo(($_POST['nilai'] * 1000000)." Millimeter");
    }
  }
  if($_POST['satuan'] == "hk"){
    if($_POST['konversi'] == "kilo"){
      echo(($_POST['nilai'] / 10)." Kilometer");
    }
    elseif($_POST['konversi'] == "hekto"){
      echo(($_POST['nilai'] * 1)." Hektometer");
    }
    elseif($_POST['konversi'] == "deka"){
      echo(($_POST['nilai'] * 10)." Dekameter");
    }
    elseif($_POST['konversi'] == "meter"){
      echo(($_POST['nilai'] * 100)." Meter");
    }
    elseif($_POST['konversi'] == "desi"){
      echo(($_POST['nilai'] * 1000)." Desimeter");
    }
    elseif($_POST['konversi'] == "centi"){
      echo(($_POST['nilai'] * 10000)." Centimeter");
    }
    elseif($_POST['konversi'] == "milli"){
      echo(($_POST['nilai'] * 100000)." Millimeter");
    }
  }
  if($_POST['satuan'] == "dk"){
    if($_POST['konversi'] == "kilo"){
      echo(($_POST['nilai'] / 100)." Kilometer");
    }
    elseif($_POST['konversi'] == "hekto"){
      echo(($_POST['nilai'] * 10)." Hektometer");
    }
    elseif($_POST['konversi'] == "deka"){
      echo(($_POST['nilai'] * 1)." Dekameter");
    }
    elseif($_POST['konversi'] == "meter"){
      echo(($_POST['nilai'] * 10)." Meter");
    }
    elseif($_POST['konversi'] == "desi"){
      echo(($_POST['nilai'] * 100)." Desimeter");
    }
    elseif($_POST['konversi'] == "centi"){
      echo(($_POST['nilai'] * 1000)." Centimeter");
    }
    elseif($_POST['konversi'] == "milli"){
      echo(($_POST['nilai'] * 10000)." Millimeter");
    }
  }
  if($_POST['satuan'] == "m"){
    if($_POST['konversi'] == "kilo"){
      echo(($_POST['nilai'] / 1000)." Kilometer");
    }
    elseif($_POST['konversi'] == "hekto"){
      echo(($_POST['nilai'] / 100)." Hektometer");
    }
    elseif($_POST['konversi'] == "deka"){
      echo(($_POST['nilai'] / 10)." Dekameter");
    }
    elseif($_POST['konversi'] == "meter"){
      echo(($_POST['nilai'] * 1)." Meter");
    }
    elseif($_POST['konversi'] == "desi"){
      echo(($_POST['nilai'] * 10)." Desimeter");
    }
    elseif($_POST['konversi'] == "centi"){
      echo(($_POST['nilai'] * 100)." Centimeter");
    }
    elseif($_POST['konversi'] == "milli"){
      echo(($_POST['nilai'] * 1000)." Millimeter");
    }
  }
  if($_POST['satuan'] == "ds"){
    if($_POST['konversi'] == "kilo"){
      echo(($_POST['nilai'] / 10000)." Kilometer");
    }
    elseif($_POST['konversi'] == "hekto"){
      echo(($_POST['nilai'] / 1000)." Hektometer");
    }
    elseif($_POST['konversi'] == "deka"){
      echo(($_POST['nilai'] / 100 )." Dekameter");
    }
    elseif($_POST['konversi'] == "meter"){
      echo(($_POST['nilai'] / 10)." Meter");
    }
    elseif($_POST['konversi'] == "desi"){
      echo(($_POST['nilai'] * 1)." Desimeter");
    }
    elseif($_POST['konversi'] == "centi"){
      echo(($_POST['nilai'] * 10)." Centimeter");
    }
    elseif($_POST['konversi'] == "milli"){
      echo(($_POST['nilai'] * 100)." Millimeter");
    }
  }
  if($_POST['satuan'] == "cm"){
    if($_POST['konversi'] == "kilo"){
      echo(($_POST['nilai'] / 100000)." Kilometer");
    }
    elseif($_POST['konversi'] == "hekto"){
      echo(($_POST['nilai'] / 10000)." Hektometer");
    }
    elseif($_POST['konversi'] == "deka"){
      echo(($_POST['nilai'] / 1000 )." Dekameter");
    }
    elseif($_POST['konversi'] == "meter"){
      echo(($_POST['nilai'] / 100)." Meter");
    }
    elseif($_POST['konversi'] == "desi"){
      echo(($_POST['nilai'] / 10)." Desimeter");
    }
    elseif($_POST['konversi'] == "centi"){
      echo(($_POST['nilai'] * 1)." Centimeter");
    }
    elseif($_POST['konversi'] == "milli"){
      echo(($_POST['nilai'] * 10)." Millimeter");
    }
  }
if($_POST['satuan'] == "mm"){
    if($_POST['konversi'] == "kilo"){
      echo(($_POST['nilai'] / 1000000)." Kilometer");
    }
    elseif($_POST['konversi'] == "hekto"){
      echo(($_POST['nilai'] / 100000)." Hektometer");
    }
    elseif($_POST['konversi'] == "deka"){
      echo(($_POST['nilai'] / 10000)." Dekameter");
    }
    elseif($_POST['konversi'] == "meter"){
      echo(($_POST['nilai'] / 1000)." Meter");
    }
    elseif($_POST['konversi'] == "desi"){
      echo(($_POST['nilai'] * 100)." Desimeter");
    }
    elseif($_POST['konversi'] == "centi"){
      echo(($_POST['nilai'] / 10)." Centimeter");
    }
    elseif($_POST['konversi'] == "milli"){
      echo(($_POST['nilai'] * 1)." Millimeter");
    }
}

}
?>
</div>
</div>
</body>
</html>






