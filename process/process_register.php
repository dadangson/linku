<?php
require '../config/functions.php';

if( isset($_POST['register']) ) {
  if( register($_POST) > 0 ) {
    echo "
        <script>
            alert('Registrasi berhasil');
            document.location.href = 'login.php';
        </script>
    ";
  } else {
    echo mysqli_error($conn);
  }
}


?>