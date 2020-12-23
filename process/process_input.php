<?php

require('connect.php');

if (isset($_POST['input'])) {
  if (!isset($_FILES['image']['tmp_name'] && $_FILES['music']['tmp_name'])) {
    echo "<span style="color:red;"><b><u><i>Pilih File</i></u></b></span>";
  } else {
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    if ($file_size < 2048000 and ($file_type == 'image/jpeg' or $file_type == 'image/png')) {
      $file_name = $_FILES['music']['name'];
      $file_size = $_FILES['music']['size'];
      $file_type = $_FILES['misic']['type'];
      if ($file_size < 20480000 and ($file_type == 'music/mp3' or $file_type == 'music/flac')) {
          
          $title = $_POST['title'];
          $actrist = $_POST['actrist'];
          $type = $_POST['type'];
          $bit_rate = $_POST['bit_rate'];
          $size = $_POST['size'];
          $release = $_POST['release'];
          $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
          $music = addslashes(file_get_contents($_FILES['music']['tmp_name']));
          $buy = $_POST['buy'];
          $link1 = $_POST['link1'];
          $link2 = $_POST['link2'];
          $tag = $_POST['tag'];
          
          $sql = "INSERT INTO data (
                     title,
                     actrist,
                     type,
                     bit_rate,
                     size,
                     release,
                     image,
                     music,
                     buy,
                     link1,
                     link2,
                     tag )
                  VALUE (
                      $title,
                      $actrist,
                      $type,
                      $bit_rate,
                      $size,
                      $release,
                      $image,
                      $music,
                      $buy,
                      $link1,
                      $link2,
                      $tag)";
          $result = mysqli_query($connect, $sql);
          header("location:dashboard/dashboard.php");
      } else {
        echo '<span style="color:red"><b><u><i>Ukuruan File / Tipe File Tidak Sesuai</i></u></b></span>';
      }
    } else {
      echo '<span style="color:red"><b><u><i>Ukuruan File / Tipe File Tidak Sesuai</i></u></b></span>';
    }
  }
}
