<style>
  body {background-color:  #ffcccc
  }
  h1
{
  color: #66ff33
  }
h3 {
  color: #003399

  }</style>
<?php if(isset($_POST["Ne"])){

echo  "Da li je ovaj sajt sranje";?><br><br>

<form action = "inf.php" method= "get">
<button type="submit" name="dugme" class="btn btn-info form-control">Jeste</button><?php
}
elseif (isset($_POST["Da"])) {
  ?><h1 style="text-align:center;font-size:600%;">Hvala</h1><?php
}
elseif(isset($_POST['subBtn'])){
?> <h3 style="font-size :200%"> Hvala sto ste ostavili komentar</h3>
  <br><br>
<?php


}
else {
  header("Location:index.php");
}
?>
