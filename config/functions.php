
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
  
  $query = " INSERT INTO items
             VALUES
            ('', '$title', '$actrist', '$type', '$release', '$bit_rate', '$size', '$buy', '$link1', '$link2', '$tags')";
  mysqli_query($conn, $query);
  
  return mysqli_affected_rows($conn);
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
              tags = '$tags' 
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