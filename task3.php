<?php
$currentDate= "21 November 2000";
//$year = (date('Y') - date('Y',strtotime($currentDate)));
$year = date_diff(date_create($currentDate),date_create("now"))->y;
if($year <25){
    $alert="alert-success";
    $content="Your age is between 22 and 25";

}
else if($year<=30){
    $alert="alert-success";
    $content="Your age is between 26 and 30";
}
else if($year<=40){
    $alert="alert-success";
    $content="Your age is between 31 and 40";
}
else if($year>40){
    $alert="alert-success";
    $content="Your age is greater than 40";

}
else{
    $alert="alert-success";
    $content="out of program";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Alerts</h2>

<div class="alert <?php echo $alert ?>">
<?php echo $content ?>
  </div>
</div>

</body>
</html>