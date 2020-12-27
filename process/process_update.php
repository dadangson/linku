
<?php
require '../config/functions.php';

if( isset($_POST["update"]) ) {
  //cek data inputan
  if( update($_POST) > 0 ) {
    echo "
      <script>
        alert('Data berhasil diubah');
        document.location.href = 'database.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Data gagal diubah');
        document.location.href = 'input.php';
      </script>
    ";
  }
}

?>