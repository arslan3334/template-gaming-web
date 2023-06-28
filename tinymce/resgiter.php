<?php
require_once("require/connection.php");
?>

<?php 
$connection = mysqli_connect("localhost","root","","blog_management_system");

// var_dump($connection);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="tinymce/js/tinymce/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
      tinymce.init({
        selector: '#mytextarea',
        plugins: [
    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
    'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
    'insertdatetime', 'media', 'table', 'help', 'wordcount'
  ],
  toolbar: 'undo redo | blocks | ' +
  'bold italic backcolor | alignleft aligncenter ' +
  'alignright alignjustify | bullist numlist outdent indent | ' +
  'removeformat | help',
      });
    </script>
  </head>

  <body>
    <h1>TinyMCE Quick Start Guide</h1>
    <form method="POST">
      <textarea name="text" id="mytextarea">Hello, World!</textarea>
      <input type="submit" name="submit" value="SUBMIT">
    </form></body>
  <?php 

  /*echo"<pre>";
  print_r($_REQUEST);
  echo"</pre>";*/

  if(isset($_REQUEST['submit'])){

   $text = $_REQUEST['text'];

  $query = "INSERT INTO posts (post_description) VALUES('".htmlspecialchars($text)."') ";

  $result = mysqli_query($connection,$query);

  if($result){

    echo "Data Has Been Inserted...!";
  }else{
    echo "Data Has Not Been Inserted...!";

  }

}

  echo "<br />";
  echo "<br />";

  $query = "SELECT * FROM posts";
  $result = mysqli_query($connection,$query);

  // var_dump($result);
  if($result->num_rows){

    while ($row = mysqli_fetch_assoc($result)) {
      
      ?>
      <p><?php echo htmlspecialchars_decode($row['post_description']); ?></p>
      <?php
    }
  }

  ?> 


</html>
