<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="addcolor">
    <nav class="navbar navbar-expand-sm bg-warning navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">HOME</a>
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
    <center><h1 class="hcolor" style="background-color:rgba(62, 37, 204, 0.5);">ADDITION</h1></center>
    <div class="container">
        <div class="row">
            <div class="col">
    <table class="table">
        <tr>
            <td class="addhcolor">First_Number</td>
            <td><input type="text" class="form-control" id="afnumber"></td>
        </tr>
        <tr>
            <td class="addhcolor">Second_Number</td>
            <td><input type="text" class="form-control" id="asnumber"></td>
        </tr>
        <tr>
            <td></td>
            <td><button onclick="zxc()" class="btn btn-outline-info">SUBMIT</button></td>
        </tr>
        <tr>
            <td class="hacolor">RESULT:</td>
            <td><p id="result" class="addhcolor"></p></td>
        </tr>
    </table>
</div>
</div>
</div>
<script>
    function zxc(){
       var afnumber=document.getElementById("afnumber").value
       var asnumber=document.getElementById("asnumber").value
       var result=parseInt(afnumber)+parseInt(asnumber);
       document.getElementById("result").innerHTML=result;
       console.log(result)
    }
</script>
</body>
</html>