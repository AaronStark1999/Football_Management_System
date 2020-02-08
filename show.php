<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!--Fontawesome CDN-->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">



    <title>football</title>

    <link rel="stylesheet" href="show.css">

    <header class="container-fluid myheader">

      <div class="myheader-part1">

        <div class="row rowh">

          <div class="col-sm-6 msopt">football</div>

          <div class="col-sm-1 opt"><a href="#teams">TEAMS</a></div>

          <div class="col-sm-1 opt"><a href="#players">PLAYERS</a></div>

          <div class="col-sm-1 opt"><a href="includes/land.php">LOGOUT</a></div>

          <div class="col-sm-1 opt"><a href="includes/search.php">Search</a></div>



        </div>

      </div>

    </header>

    <div class="container-fluid heroimage">



      <div class="hero-text">

        <h1>College Football live stream, TV schedule, replays and guide on live streaming ...</h1>

        <p>Find communities that match your interests</p>

        



      </div>





    </div>





  </head>

  <div id="teams">

    <h1 style="font-style:italic;" class="h12">Teams</h1>

    

  </div>

  





<div class="scroll container">





  <?php

  include_once "includes/connection.php";

  $sql1="select * from team;";

  $res1=mysqli_query($conn,$sql1);

  $rc1=mysqli_num_rows($res1);

  $c=0;

  if($rc1>0){

    while ($r=mysqli_fetch_assoc($res1)) {

      $c++;

      ?>

      <div class="card disp" style="width:250px;height:50px;">

        <?php

        if($c%2==0)

        {

        ?>





        <img class="card-img-top " src="images/bar.png" style="height:150px"alt="Card image">

      <?php

    }elseif($c%3==0) {

      ?>

      <img class="card-img-top " src="images/chel.png" style="height:150px"alt="Card image">

      <?php

    }else{

      ?>

    <img class="card-img-top " src="images/man.png" style="height:150px"alt="Card image">

      <?php

    } ?>

      <div class="card-body">

          <h5 class="card-title"><?php echo strtoupper($r['tname']); ?></h5>

          <p class="card-text"><?php echo "Captain : ",strtoupper($r['captain']);?></p>

          <a href="#" class="btn btn-primary"><?php echo "Coach : ",strtoupper($r['coach']);?></a>

        </div>

      </div>

      <?php

    }

  } ?>

</div>

<div class="row">

  <div class="col-sm-3"></div>

  <div class="col-sm-6">

    <p class="text-center"><a href="#" data-target="#runrate-form" data-toggle="modal"

      role="button" class="btn btn-primary btn-lg btn-wh font-weight-bold">Stats!</a></p>

  </div>

  <div class="col-sm-3"></div>



</div>

  <body>



    <div>

      <h1 class="h11"> Upcoming Matches </h1>

    </div>



    <?php

    include_once "includes/connection.php";

    $sql="select * from matches LIMIT 4";

    $result=mysqli_query($conn,$sql);

    $resultcheck=mysqli_num_rows($result);

    $count=4;

    ?>

    <div class="container" >

      <div class="row rowh1">





        <?php

        if ($resultcheck>0) {

           while ($row=mysqli_fetch_assoc($result)) {

             ?>

             <div class="col-sm-3 column">

               <bold class="text1"><?php echo strtoupper($row['tid1']) ; ?></bold>

               <bold class="text1"><?php echo " vs " ; ?></bold>

               <bold class="text1"><?php echo strtoupper($row['tid2']); ?></bold>



             </div>







        <?php }



      } ?>

</div>



    </div>









    <div id="players">

      <h1 class="h12">Top Players</h1>

    </div>

   




<div class="scroll container-fluid">





    <?php

    include_once "includes/connection.php";

    $sql1="select * from player group by stats having count(*)<6;";

    $res1=mysqli_query($conn,$sql1);

    $rc1=mysqli_num_rows($res1);

    if($rc1>0){

      while ($r=mysqli_fetch_assoc($res1)) {

        ?>

        <div class="card disp" style="width:200px">

          <img class="card-img-top " src="images/player.png" style="height:150px"alt="Card image">

          <div class="card-body">

            <h5 class="card-title btn-primary"><?php echo strtoupper($r['pname']); ?></h5>

            <p class="card-text"><?php echo "team id:",strtoupper($r['tid']);?></p>

            <a href="#" class="btn btn-success"><?php echo strtoupper($r['position']);?></a>

          </div>

        </div>

        <?php

      }

    } ?>

</div>





<div class="container full" id="tickets">

  <div class="h123">UPDATES</div>

  

  <div class="para1 display-2">Latest updates just for you!</div>

<div class="scroll1">



  <?php

  include_once "includes/connection.php";

  $sql="select * from updates;";

  $result=mysqli_query($conn,$sql);

  $resultcheck=mysqli_num_rows($result);

  if($resultcheck>0)

  {

    while ($row=mysqli_fetch_assoc($result)) {
      $d1=$row['prediction'];
      $d2=$row['news'];
      $d3=$row['mno'];




     




  ?>



    <div class="mcon">

      <img src="images/up.jpg" alt="venue" class="rounded img1">



      <div class="tpara display-1">prediction : <?php echo strtoupper($d1) ?></div>

      <div class="tmatchid display-1">news : <?php echo strtoupper($d2) ?></div>

      <div class="tprice display-1">mno : <?php echo $d3 ?></div>

     

      <a href="#" class="btn btn-warning"><?php echo "get updates via email"?></a>

    </div>









  <?php



    }

  }

  ?>

  </div>







</div>





<div>

  <h1 class="h12">Ranking </h1>

</div>

<h1 class="para container">Get Latest football Match Score updates  Check out 2019

  Live football Score   </h1>



<div class="container-fluid">

  <div class="row r1">

  <div class="col-sm-5"></div>

  <div class="sql col-sm-6">

    <table class="table-hover table  mytable" id="titable">

      <tr>

        <th style="text-align:center;">TEAM</th>

       

        <th style="text-align:center;">POINTS</th>

      </tr>

    <?php

    $s1="select * from teamrank;";

    $result1=mysqli_query($conn,$s1);

    $resultcheck1=mysqli_num_rows($result1);



    if($resultcheck1>0)

    {

      while($r=mysqli_fetch_assoc($result1)){
        $tid=$r['tid'];

        $s2="select * from team where tid='$tid';";
        $result2=mysqli_query($conn,$s2);
        $resultcheck2=mysqli_num_rows($result2);
        while($r2=mysqli_fetch_assoc($result2)){


        ?>



          <tr>

            <td style="text-align:center;font-size:15px;color:#333;text-style:bold;"><?php echo strtoupper($r2['tname']); ?></td>

            

            <td style="text-align:center;"><?php echo $r['points']; ?></td>

          </tr>



    <?php
}
      }

    }

    ?>

      </table>



  </div>

  <div class="col-sm-2"></div>

  </div>

</div>



<div class="blank"></div>



<div class="modal fade" id="search-form">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header form-head">

        <div style="text-transform:uppercase; color:#000336;font-weight:bold;font-size:30px; ">Search</div>

      </div>

      <div class="modal-body">

        <form class="forms" action="includes/searcht.php" method="post">

          <input type="text" name="tname" placeholder="Team search..." class="form-control">

          <div class="row h"></div>

          <input type="submit" name="submit" value="search" class="btn btn-warning" style="margin-bottom:5px;margin-left:25%;">

        </form>

        <form class="forms" action="includes/searchponruns.php" method="post">

          <input type="text" name="run" placeholder="Player search by runs..." class="form-control">

          <div class="row h"></div>

          <input type="submit" name="submit" value="search" class="btn btn-warning" style="margin-bottom:5px;margin-left:25%;">

        </form>

        <form class="forms" action="includes/searchp.php" method="post">

          <input type="text" name="player" placeholder="Player search by name..." class="form-control">

          <div class="row h"></div>

          <input type="submit" name="submit" value="search" class="btn btn-warning" style="margin-bottom:5px;margin-left:25%;">

        </form>

      </div>

    </div>

  </div>

</div>


<div class="modal fade" id="runrate-form">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header form-head" >

        <div style="text-transform:uppercase; color:blue;font-weight:bold;font-size:30px; ">stats</div>

      </div>

      <div class="modal-body ">

        <?php

        include "includes/connection.php";
        $stored="call stats();";
        mysqli_query($conn,$stored);

        $s="select * from player order by(stats) desc;";

        $r=mysqli_query($conn,$s);

        $count=0;

        ?>

        <table class="table table-light table-hover ">

          <thead>

            <td style="color:#333;font-style:bold;font-size:20px;">SNO</td>

            <td style="color:#333;font-style:bold;font-size:20px;">PNAME</td>

            <td style="color:#333;font-style:bold;font-size:20px;">STATS</td>

          </thead>



        <?php

        while($row=mysqli_fetch_assoc($r))

        {

          $count++;

          ?>

          <tr>

            <td><?php echo $count; ?></td>

            <td><?php echo strtoupper($row['pname']); ?></td>



            <td><?php echo strtoupper($row['stats']); ?></td>



          </tr>

          <?php

        }





         ?>

</table>



      </div>

    </div>

  </div>

</div>

  </body>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</html>