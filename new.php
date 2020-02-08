<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="sty.css">
  <title>default-Document</title>
  <script>
    function validate1()
{
     if(document.getElementById('id1').value.length==0){
        document.getElementById('id2').disabled=true;
        document.getElementById('id3').disabled=true;
        document.getElementById('id4').disabled=true;
        document.getElementById('id5').disabled=true;
        alert("Please don't keep field empty")
      }
      else if(document.getElementById('id1').value.length>0){
        document.getElementById('id2').disabled=false;
        document.getElementById('id3').disabled=false;
        document.getElementById('id4').disabled=false;
        document.getElementById('id5').disabled=false;
        
      }
      
}

     

function fun1()
{
validate1();
}
  </script>
</head>
<body>
<div class="container-fluid">

<div class="row rowh">
  <div class="col-sm-3 black">
        <div class="row rows"></div>
        <div class="row rows list">
                  <ul>
                    <li>MATCH</li>
                    <li>UPDATES</li>
                    <li>SCORES</li>
                    <li>PLAYERS</li>
                    <li>TOTALGOALS</li>
                    <li>PENALTY</li><!--CHANGES MADE-->
                  </ul>

        </div>
  </div>
  <div class="col-sm-6 black"><span class="title">FOOTBALL MANAGEMENT SYSTEM</span></div>
  <div class="col-sm-3 black"><span class="stitle">destination for Football scores</span></div>
</div>

</div>




<div class="container">

    <div class="row">
    <div class="col-sm-3"></div>
		<div class="col-sm-6 fform">
			 <div class="formtitle">TEAM</div>

       <form method="post" action="includes/team.php">
          <div class="form-group">
            <label for="tid">Team Id:</label>
            <input type="number"  placeholder="Please Enter only Numbers" onkeydown="myfunc(event)" name="tid" class="form-control" required="Please fill all the details">
          </div>
          <div class="form-group">
            <label for="tname">Team name:</label>
            <input type="text"  placeholder="Please Enter only Text" onkeydown="myfunc(event)" name="tname" class="form-control" required="Please fill all the details">
          </div>
          <div class="form-group">
            <label for="cap">Captain:</label>
            <input type="text"  placeholder="Please Enter only Text" onkeydown="myfunc(event)" name="cap" class="form-control" required="Please fill all the details">
          </div>
          <div class="form-group">
            <label for="co">Coach:</label>
            <input type="text"  placeholder="Please Enter only Text" onkeydown="myfunc(event)" name="co" class="form-control" required="Please fill all the details">
          </div>
          <div class="form-group">
            <label for="sp">Sponsors:</label>
            <input type="text"  placeholder="Please Enter only Text" onkeydown="myfunc(event)" name="sp" class="form-control" required="Please fill all the details">
          </div>

          <div class="modal-footer text-center">
            <div>
              <input type="submit" tabindex="-1" name="submit1" class="btn btn-success btn-submit">
            </div>
          </div>
        </form>






    </div>
		<div class="col-sm-3"></div>
    </div>

<div class="row blankrow">

</div>

      <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6 fform">
       <div class="formtitle">PLAYER</div>

       <form method="post" action="includes/player.php">
          <div class="form-group">
            <label for="pid">Player Id:</label>
            <input type="number"  placeholder="Please Enter only Numbers" onkeydown="myfunc(event)" name="pid" class="form-control" required="Please fill all the details">
          </div>
          <div class="form-group">
            <label for="pname">Player name:</label>
            <input type="text"  placeholder="Please Enter only Text" onkeydown="myfunc(event)" name="pname" class="form-control" required="Please fill all the details">
          </div>
          <div class="form-group">
            <label for="tid">Team id:</label>
            <input type="text"  placeholder="Please Enter only Text" onkeydown="myfunc(event)" name="tid" class="form-control" required="Please fill all the details">
          </div>
          <div class="form-group">
            <label for="position">Positions:</label>
            <input type="text"  placeholder="Please Enter only Text" onkeydown="myfunc(event)" name="position" class="form-control" required="Please fill all the details">
          </div>
          <div class="form-group">
            <label for="stats">Stats:</label>
            <input type="text"  placeholder="Please Enter only Text" onkeydown="myfunc(event)" name="stats" class="form-control" required="Please fill all the details">
          </div>
          <div class="form-group">
            <label for="ranking">Ranking:</label>
            <input type="number"  placeholder="Please Enter only number" onkeydown="myfunc(event)" name="ranking" class="form-control" required="Please fill all the details">
          </div>

          <div class="modal-footer text-center">
            <div>
              <input type="submit" tabindex="-1" name="submit2" class="btn btn-success btn-submit">
            </div>
          </div>
        </form>






    </div>
    <div class="col-sm-3"></div>
    </div>



      <div class="row blankrow"></div>


          <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-6 fform">
             <div class="formtitle">TEAM Stats</div>
             <form method="post" action="includes/teamrank.php">
              <div class="form-group">
                <label for="tid">Team ID:</label>
                <input type="number" placeholder="Please Enter only Numbers" onkeydown="myfunc(event)" name="tid" class="form-control" required="Please fill team id" pattern="\d{4}">
              </div>
              <div class="form-group">
                <label for="mid">Match played:</label>
                <input type="number" onkeydown="myfunc(event)" placeholder="Please Enter only Numbers"name="mid" class="form-control" required="Please fill all the details">
              </div>
              <div class="form-group">
                <label for="won">Won:</label>
                <input type="number" onkeydown="myfunc(event)" placeholder="Please Enter only Numbers" name="won" class="form-control" required="Please fill all the details">
              </div>
              <div class="form-group">
                <label for="lost">Lost:</label>
                <input type="number" onkeydown="myfunc(event)" placeholder="Please Enter only Numbers" name="lost" class="form-control" required="Please fill all the details">
              </div>
              <div class="form-group">
                <label for="draw">Draw:</label>
                <input type="number" onkeydown="myfunc(event)" placeholder="Please Enter only Numbers" name="draw" class="form-control" required="Please fill all the details">
              </div>
              <div class="form-group">
                <label for="points">Points:</label>
                <input type="number" onkeydown="myfunc(event)" placeholder="Please Enter only Numbers" name="points" class="form-control" required="Please fill all the details">
              </div>
              <div>
                <input type="submit" name="submit3" tabindex="-1" class="btn btn-success btn-submit btns">
              </div>
            </form>
          </div>
          <div class="col-sm-3"></div>
        </div>



          <div class="row blankrow"></div>



          <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-6 fform">
             <div class="formtitle">Match</div>
             <form method="post" action="includes/match.php">
              <div class="form-group">
                <label for="tid1">Team Id1:</label>
                <input type="number" placeholder="Please Enter only Numbers" onkeydown="myfunc(event)" name="tid1" class="form-control" required="Please fill team id" pattern="\d{4}">
              </div>
              <div class="form-group">
                <label for="tid2">Team Id2:</label>
                <input type="number" onkeydown="myfunc(event)" placeholder="Please Enter only Numbers"name="tid2" class="form-control" required="Please fill all the details">
              </div>
              <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" onkeydown="myfunc(event)" placeholder="Please Enter date" name="date" min="2019-11-13" class="form-control" required="Please fill all the details">
              </div>
              <div class="form-group">
                <label for="time">Time:</label>
                <input type="time" onkeydown="myfunc(event)" placeholder="Please Enter only Time" name="time" class="form-control" required="Please fill all the details">
              </div>
              <div class="form-group">
                <label for="venue">Venue:</label>
                <input type="text" onkeydown="myfunc(event)" placeholder="Please Enter only Numbers" name="venue" class="form-control" required="Please fill all the details">
              </div>
              <div class="form-group">
                <label for="mno">Match no:</label>
                <input type="number" onkeydown="myfunc(event)" placeholder="Please Enter only Numbers" name="mno" class="form-control" required="Please fill all the details">
              </div>
              <div>
                <input type="submit" name="submit4" tabindex="-1" class="btn btn-success btn-submit btns">
              </div>
            </form>
          </div>
          <div class="col-sm-3"></div>
          </div>



<div class="row blankrow"></div>
               <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-lg-6 fform">
             <div class="formtitle">Updates</div>
             <form method="post" action="includes/updates.php">
              <div class="form-group">
                <label for="prediction">Prediction:</label>
                <input type="text" placeholder="Please Enter only Text" onkeydown="myfunc(event)" name="prediction" class="form-control"
                 required >
              </div>
              <div class="form-group">
                <label for="news">News:</label>
                <input type="text" onkeydown="myfunc(event)" placeholder="Please Enter only Text"name="news" class="form-control" required="Please fill all the details">
              </div>
             <div class="form-group">
                <label for="mno">Match No:</label>
                <input type="number" onkeydown="myfunc(event)" placeholder="Please Enter only Numbers"name="mno" class="form-control" required="Please fill all the details">
              </div>
              <div>
                <input type="submit" name="submit5" tabindex="-1" class="btn btn-success btn-submit btns">
              </div>
            </form>
          </div>
          <div class="col-sm-3"></div>
          </div>  



              <div class="row blankrow"></div>
               <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-lg-6 fform">
             <div class="formtitle">Total Goals</div>
             <form method="post" action="includes/totalgoals.php">
              <div class="form-group">
                <label for="pid">Player id:</label>
                <input type="number" placeholder="Please Enter only Numbers" onkeydown="myfunc(event)" name="pid" class="form-control" required="Please fill team id" pattern="\d{4}">
              </div>
              <div class="form-group">
                <label for="tid">Team id:</label>
                <input type="number" onkeydown="myfunc(event)" placeholder="Please Enter only Numbers"name="tid" class="form-control" required="Please fill all the details">
              </div>
             <div class="form-group">
                <label for="goals">Goals:</label>
                <input type="number" onkeydown="myfunc(event)" placeholder="Please Enter only Numbers"name="goals" class="form-control" required="Please fill all the details">
              </div>
              <div>
                <input type="submit" name="submit6" tabindex="-1" class="btn btn-success btn-submit btns">
              </div>
            </form>
          </div>
          <div class="col-sm-3"></div>
          </div>        
                  


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
