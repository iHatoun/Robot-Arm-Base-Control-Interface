‪<!DOCTYPE html>‬
‪<html>‬
‪<head>‬
‪<meta charset="UTF-8">‬
‪<title>B‬ASE‪ CONTROL</title>‬
‪<link rel="stylesheet" href="style.css"> ‬
‪</head>‬
<body>
 <h1 class="control">Robot Arm Base Control</h1>
<form id="myForm" action="index.php" method = "POST">
 <div  style="text-align:center;">
<br><br> <br><br><br> <button class="forward" name="f">Forward</button><br><br>
</div>

 <div  style="text-align:center;">
      <button class="left" name="l">Left</button>  <button class="stop" name="s" >Stop</button><button class="right" name="r">Right</button><br><br>
</div>

 <div  style="text-align:center;">
‪   <button class="backward" name="b">Backward</button>‬<br><br><br><br><br><br><br><br><br><br><br>
</div>
    <footer>
‪      <p>By: Hatoun Majid Aljuaid<br>
</form>‬
‪    </footer>‬
‪   ‬


<?php
$f=$_POST["f"];
$l=$_POST["l"];
$s=$_POST["s"];
$r=$_POST["r"];
$b=$_POST["b"];
$conn = new mysqli("localhost" , "root","","base control");
if(isset($_POST["f"])){
$stmt = $conn->prepare("INSERT INTO base(forward)values('f');");
$stmt->execute();
echo"Forward";
}
if(isset($_POST["l"])){
    $stmt = $conn->prepare("INSERT INTO base(lef) values('l');");
    $stmt->execute();
    echo"Left";
    }

    if(isset($_POST["s"])){
        $stmt = $conn->prepare("INSERT INTO base(stop) values('s');");
        $stmt->execute();
        echo"Stop";
        }

        if(isset($_POST["r"])){
            $stmt = $conn->prepare("INSERT INTO base(righ) values('r');");
            $stmt->execute();
            echo"Right";
            }

            if(isset($_POST["b"])){
                $stmt = $conn->prepare("INSERT INTO base(backward) values('b');");
                $stmt->execute();
                echo"Backward";
                }
                ?>

</body>‬
‪    </html>

        




