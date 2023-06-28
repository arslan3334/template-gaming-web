
<?php
require_once("require/connection.php");
require_once("header.php");

?>

<script type="text/javascript" src="jquery-3.5.1.js"></script>
  <script type="text/javascript" src="jquery.dataTables.min.js"></script>
  <script type="text/javascript">
    
    $(document).ready(function () {
      $('#example').DataTable();
  });
  </script>
<div id="contenttr" >
       
<div class="heading"> HERE YOU CAN SEE PLAYERS REGISTERED ON OUR GAME AND THEIR SALARY
        </div>
<br>
<div>
<table id="example" class="display" style="width:100%;color: white;background-color: #003c00;margin-right: 40px"  >
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>email</th>
               
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>

        <?php
        
$qurey="SELECT * FROM players";

$result = mysqli_query($connection,$qurey);

while ($data=mysqli_fetch_assoc($result)) {
	 ?>  

<tr>
	<td><?php echo htmlspecialchars_decode($data['pname']); ?></td>
<td><?php echo $data['positon']  ?></td>
<td><?php echo $data['pemail']  ?></td>
<td><?php echo $data['psalary']  ?></td>
</tr>

	  <?php
}


        ?>	
                    </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>email</th>
               
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
</div>


        
      </div>
    </div>
  </div>
<?php


require_once("footer.php");

?>