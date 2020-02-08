<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../l.css">
  <!--Fontawesome CDN-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


  <title>default-Document</title>
</head>
<body>
<div class="container">
   <div class="d-flex justify-content-center h-100" >
       <div class="card">
         <div class="card-header">
           <h3>SIGN IN</h3>
           
        <div class="card-body">
          <form  action="signin.php" method="post">
            <div class="form-group input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="username" name="uid">
            </div>
            <div class="input-group form-group">
  						<div class="input-group-prepend">
  							<span class="input-group-text"><i class="fas fa-key"></i></span>
  						</div>
  						<input type="password" class="form-control" placeholder="password" name="pwd">
  					</div>
            <div class="form-group">
  						<input type="submit" value="Login" class="btn float-right login_btn" name="signin">
  					</div>
          </form>
        </div>
        <div class="card-footer">
          <div class="d-flex justify-content-center ">
            Don't have an account <a href="land2.php" class="links">JOIN</a>
          </div>
        </div>

         </div>

       </div>
   </div>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
