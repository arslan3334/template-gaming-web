<?php 
require_once("require/connection.php");
require_once("header.php");

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
    <form method="POST">
       NAME <input type="text" name="name" id="mytextarea">
     
      <input type="submit" name="submit" value="SUBMIT">
    </form></body>
  <?php 


  if(isset($_REQUEST['submit'])){

   $name = $_REQUEST['name'];

  $query = "INSERT INTO players(pname) VALUES('".htmlspecialchars($name)."') ";

  $result = mysqli_query($connection,$query);

  if($result){

    echo "Data Has Been Inserted...!";
  }else{
    echo "Data Has Not Been Inserted...!";

  }

}

 echo "<br />";
  echo "<br />";

  $query = "SELECT * FROM players";
  $result = mysqli_query($connection,$query);

  if($result->num_rows){
?> 
<center>
<table border="2px" cellpadding="20px" style="color: white">
  <h1 style="color: white">ALL REGISTERED PLAYERS</h1>
<th>NAME</th>

<th>position</th>
<th>email</th>
<th>salary</th>

<?php
    while ($row = mysqli_fetch_assoc($result)) {
      
      ?>
    
        <div>
      
     <tr> 
      <td><?php echo htmlspecialchars_decode($row['pname']); ?></td>

<td><?php echo $row['positon']  ?></td>
<td><?php echo $row['pemail']  ?></td>
<td><?php echo $row['psalary']  ?></td>
      <br>
      
    </tr>

  
</div>

      <?php
    }

 ?>
 </table>
</center>
 <?php   
  }

require_once("footer.php");

  ?> 




</html>
