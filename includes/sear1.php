<?php 
include "connection.php";
$tname=$_POST['tname'];
$sql="select * from player where tid in (select tid from team where tname='$tname') ;";
$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($result);
?>
<div class="container-fluid" >
  <divc class="row" style="height:80px;"></div>
  <div class="row" style="height:auto;">
    <div class="col-sm-4"></div>
    <div class="col-sm-6">

  <table class="table-hover table-dark table-bordered mytable" id="ptable">

  <thead class="thead-dark">
    <tr>
      <th style="color:yellow; padding:5px;">Pname</th>
      <th style="color:yellow; padding:5px;">PlayerId</th>
      <th style="color:yellow; padding:5px;">Goals</th>
      
    </tr>
  </thead>
    <?php
    if ($resultcheck>0) {
       while ($row=mysqli_fetch_assoc($result)) {?>
      <tr>
        <td style="padding:5px; "><?php echo $row['pname']; ?></td>
        <td style="padding:5px; "><?php echo $row['pid']; ?></td>
        <td style="padding:5px; "><?php echo $row['goal']; ?></td>
        
      </tr>
    <?php 
  }
  } ?>