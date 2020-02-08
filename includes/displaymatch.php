<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title></title>
</head>
<body>
<?php include_once "connection.php";
$sql="select * from matches";
$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($result);
?>
<div class="container-fluid" >
  <divc class="row" style="height:80px;"></div>
  <div class="row" style="height:auto;">
    <div class="col-sm-4"></div>
    <div class="col-sm-6">

  <table class="table-hover table-dark table-bordered mytable" id="ptable4">

  <thead class="thead-dark">
    <tr>
      <th style="color:yellow; padding:5px;">tid1</th>
      <th style="color:yellow; padding:5px;">tid2</th>
      <th style="color:yellow; padding:5px;">date</th>
      <th style="color:yellow; padding:5px;">time</th>
      <th style="color:yellow; padding:5px;">venue</th>
      <th style="color:yellow; padding:5px;">mno</th>
      
    </tr>
  </thead>
    <?php
    if ($resultcheck>0) {
       while ($row=mysqli_fetch_assoc($result)) {?>
      <tr>
        <td style="padding:5px; "><?php echo $row['tid1']; ?></td>
        <td style="padding:5px; "><?php echo $row['tid2']; ?></td>
        <td style="padding:5px; "><?php echo $row['date']; ?></td>
        <td style="padding:5px; "><?php echo $row['time'];?></td>
        <td style="padding:5px; "><?php echo $row['venue']; ?></td>
        <td style="padding:5px; "><?php echo $row['mno']; ?></td>
        
      </tr>
    <?php }
  } ?>
  </table>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>