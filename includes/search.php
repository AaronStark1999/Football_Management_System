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


  <form class="forms" action="sear.php" method="post">
    <input type="text" name="pname" placeholder="Player search by name.." class="form-control">
    <div class="row h"></div>
    <input type="submit" name="submit" value="search" class="btn btn-warning" style="margin-bottom:5px;margin-left: 25%">
  </form>


  <br>
  <br>
  <form class="forms" action="sear1.php" method="post">
    <input type="text" name="tname" placeholder="Team search by name.." class="form-control">
    <div class="row h"></div>
    <input type="submit" name="submit" value="search" class="btn btn-warning" style="margin-bottom:5px;margin-left: 25%">
  </form>

</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>