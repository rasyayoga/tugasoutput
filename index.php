<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
    <label for="nama1">Nama 1:</label>
        <input type="text" name="nama1" id="nama1"><br><br>

        <label for="nama2">Nama 2:</label>
        <input type="text" name="nama2" id="nama2"><br><br>

        <label for="nama3">Nama 3:</label>
        <input type="text" name="nama3" id="nama3"><br><br>
    <input type="submit" value="simpan" name="btsimpan">
    </form>
</body>
</html>

<?php
  class Biodata{
    public $nama;
    public function setNama($nama){
        $this->nama = $nama;
        if ($this->nama != ""){
return $nama;
        }else{
            return "data blum diisi ngab";
        }   
    }
  }
$biodata = new Biodata();
 if(isset($_POST['btsimpan'])) {
   echo $biodata->setNama($_POST['nama1']);
   echo "<br>";
   echo $biodata->setNama($_POST['nama2']);
   echo "<br>";
   echo $biodata->setNama($_POST['nama3']);
 }

?>
