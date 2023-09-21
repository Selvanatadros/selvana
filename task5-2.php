<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    
$number = $_POST["number"];
    $alertType = "alert-info";
}
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>multipy the number</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Multiplication Table for: </th>
      </tr>
    </thead>
    <tbody>
    <?php 
for($i=0; $i<=12 ; $i++){
  ?>
      <tr>
        <td><?php echo $number."×".$i ."=" .$number * $i ;?></td>
      </tr>
      <?php
} ?>
</tbody>
  </table>
</div>

</body>
</html>
