<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multiplication</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="mulcolor">
    <nav class="navbar navbar-expand-sm bg-warning navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.html">HOME</a>
              </li>
          <li class="nav-item active">
            <a class="nav-link" href="add.php">ADDITION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sub.php">SUBSTRACTION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mul.php">MULTIPLICATION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="div.php">DIVISION</a>
          </li>
        </ul>
      </nav>
      <center><h1 class="multcolor" style="background-color:rgba(235, 23, 164, 0.5);">MULTIPLICATION</h1></center>
        <div class="container">
        <div class="row">
            <div class="col">
<table class="table">
   <tr>
       <td class="mcolor">First_Number</td>
       <td><input type="text" class="form-control" id="mfnumber"></td>
   </tr>
   <tr>
       <td class="mcolor">Second_Number</td>
       <td><input type="text" class="form-control" id="msnumber"></td>
   </tr>
   <tr>
       <td></td>
       <td><button onclick="xyz()" class="btn btn-outline-dark">Submit</button></td>
   </tr>
  <tr>
       <td class="mcolor">PRODUCT:</td>
       <td><p id="res" class="rcolor"></p></td>
   </tr>
</table>
</div>
</div>
</div>
<script>
    function xyz(){
        var mfnumber=document.getElementById("mfnumber").value
        var msnumber=document.getElementById("msnumber").value
        var result= parseInt(mfnumber)*parseInt(msnumber)
        document.getElementById("res").innerHTML=result
        console.log(result)
       
    }
</script>
</body>
</html>