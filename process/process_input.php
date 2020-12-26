<?php
require '../config/functions.php';

if( isset($_POST["submit"]) ) {
  //cek data inputan
  if( input($_POST) > 0 ) {
    echo "
      <script>
        alert('Data berhasil ditambahkan');
        document.location.href = 'database.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Data gagal ditambahkan');
        document.location.href = 'input.php';
      </script>
    ";
  }
}

?>