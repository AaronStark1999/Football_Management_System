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
$sql="select * from penalty";
$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($result);
?>
<div class="container-fluid" >

  <table class="table-hover table-success table-bordered mytable" id="ptable6">

  <thead class="thead-dark">
    <tr>
      <th>pid</th>
      <th>tid</th>
      <th>goals</th>
    </tr>
  </thead>
    <?php
    if ($resultcheck>0) {
       while ($row=mysqli_fetch_assoc($result)) {?>
      <tr>
        <td><?php echo $row['pid']; ?></td>
        <td><?php echo $row['tid']; ?></td>
        <td><?php echo $row['penalty']; ?></td>
        
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