
<?php

$conn = mysqli_connect("localhost", "root", "", "linku");

function query($query) {
  global $conn;
  $result = mysqli_query( $conn, $query );
  $rows = [];
  while ( $row = mysqli_fetch_assoc($result) ) {
    $rows[] = $row;
  }
  return $rows;
}

function input($data) {
  global $conn;
  
  $title = htmlspecialchars($data['title']);
  $actrist = htmlspecialchars($data['actrist']);
  $type = htmlspecialchars($data['type']);
  $release = htmlspecialchars($data['release']);
  $bit_rate = htmlspecialchars($data['bit_rate']);
  $size = htmlspecialchars($data['size']);
  $buy = htmlspecialchars($data['buy']);
  $link1 = htmlspecialchars($data['link1']);
  $link2 = htmlspecialchars($data['link2']);
  $tags = htmlspecialchars($data['tags']);
  
  // upload image
  $image = upload();
  if( !$image ) {
      return false;
  }
  
  $query = " INSERT INTO items
             VALUES
            ('', '$title', '$actrist', '$type', '$release', '$bit_rate', '$size', '$buy', '$link1', '$link2', '$tags', '$image')";
  mysqli_query($conn, $query);
  
  return mysqli_affected_rows($conn);
}

function upload() {
  $nameFile = $_FILES['image']['name'];
  $sizeFile = $_FILES['image']['size'];
  $error = $_FILES['image']['error']
  $tmpName = $_FILES['image']['tmp_name'];
  
  // check uploaded file
  if( $image === 4 ){
    echo "
        <script>
          alert('Pilih gambar terlebih dahulu!');
        </script>
    ";
    return false;
  }
  // check extention file image
  $extentionImageValid = ('jpg', 'jpeg', 'png');
  $extentionImage = explode('.', $nameFile);
  $extentionImage = strtolower(end($extentionImage));
  if( !in_array($extentionImage, $extentionImageValid) ) {
    echo "
        <script>
          alert('Yang anda upload bukan gambar!');
        </script>
    ";
    return false;
  }
  // check size file image
  if( $sizeFile > 2000000 ) {
    echo "
        <script>
          alert('Ukuran gambar terlalu besar!');
        </script>
    ";
    return false;
  }
  // file image uploaded
  // generate new name file
  $newNameFile = uniqid();
  $newNameFile .= '.';
  $newNameFile .= $extentionImage;
  move_uploaded_file($tmpName, '../assets/image'.$newNameFile);
  
  return $newNameFile;
}

function delete($id) {
  global $conn;
  
  mysqli_query($conn, " DELETE FROM items WHERE id = $id");
  
  return mysqli_affected_rows($conn);
}

function update($data) {
  global $conn;
  
  $id = $data['id'];
  $title = htmlspecialchars($data['title']);
  $actrist = htmlspecialchars($data['actrist']);
  $type = htmlspecialchars($data['type']);
  $release = htmlspecialchars($data['release']);
  $bit_rate = htmlspecialchars($data['bit_rate']);
  $size = htmlspecialchars($data['size']);
  $buy = htmlspecialchars($data['buy']);
  $link1 = htmlspecialchars($data['link1']);
  $link2 = htmlspecialchars($data['link2']);
  $tags = htmlspecialchars($data['tags']);
  $imageOld = $data['imageOld'];
  
  // check upload image
  if( $_FILES['image']['error'] === 4 ) {
    $image = $imageOld;
  } else {
    $image = upload();
  }
  
  $query = " UPDATE items SET
              title = '$title',
              actrist = '$actrist',
              type = '$type',
              release = '$release',
              bit_rate = '$bit_rate',
              size = '$size',
              buy = '$buy',
              link1 = '$link1',
              link2 = '$link2',
              tags = '$tags',
              image = '$image'
            WHERE id = $id";
  mysqli_query($conn, $query);
  
  return mysqli_affected_rows($conn);
}

function search($keyword) {
  $query = " SELECT * FROM items
                WHERE
               title LIKE '%$title%'OR
               actrist LIKE '%$actrist%'OR
               tag LIKE '%$tags%'
             ";
  return query($query);
}