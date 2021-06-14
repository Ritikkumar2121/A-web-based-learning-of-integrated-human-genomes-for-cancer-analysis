
<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "project";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

// return $conn;

 ?>
 <!DOCTYPE html>
 <html lang="en">

<head>
 <meta charset="UTF-8">
 <title>GFG User Details</title>
 <!-- CSS FOR STYLING THE PAGE -->
 <style>
     table {
         margin: 0 auto;
         font-size: large;
         border: 1px solid black;
     }


     td {
         background-color: #E4F5D4;
         border: 1px solid black;
     }

     th,
     td {
         font-weight: bold;
         border: 1px solid black;
         padding: 10px;
         text-align: center;
     }
     .cont1 {
         font-weight: bold;
       font-family: "Times New Roman", Times, serif;
           color:white;
           background-color: black;
           font-size: 30px;
             margin-bottom: 45px;
             margin-top:55px;
     }
     td {
         font-weight: lighter;
     }
 </style>
</head>
<body>



      <h1>  <p class="cont1">Data that falls in the given range i.e Start= <?php echo $_POST['start'];?> and End= <?php echo $_POST['end'];?><span ><p><p></span><p></h1>

</body>
</html>
<?php
if(isset($_POST["location"]))
{
if($_GET["action"] == "loc")
{


	  $chrome=$_POST['chrome'];
		 $startco=$_POST['start'];
 		$endco=$_POST['end'];

  }
}

  $query = "SELECT * FROM tag WHERE ((START>=$startco) AND (END<=$endco)) AND (CHROM=$chrome)";



  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result) > 0)
  {
    ?>

    <table border="2">
      <thead>
        <tr>
          <th>START</th>
          <th>END</th>
          <th>CYTOBAND</th>
          <th>GENE_NAME</th>
          <th>GENE_TYPE</th>
          <th>GENE_SYMBOL</th>
        </tr>
  </thead>
  <tbody>
<?php
    while($row = mysqli_fetch_array($result))
    {

  ?>


  <tr>
   <td><?php echo $row['START']; ?></td>
   <td><?php echo $row['END']; ?></td>
   <td><?php echo $row['CYTOBAND']; ?></td>
   <td><?php echo $row['GENE_NAME']; ?></td>
   <td><?php echo $row['GENE_TYPE']; ?></td>
   <td><?php echo $row['GENE_SYMBOL']; ?></td>
   <br>
</tr>
<?php


}
?>
</body>
</table>
    <?php


    }
    ?>
