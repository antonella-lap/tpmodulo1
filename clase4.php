<!--<!DOCTYPE html>
    <html>
        <body>

            <h1>My first PHP page</h1>

            <?php
                echo "Hello World!";
            ?>

      </body>
</html>   -->

<!-- ESTRUCTURAS DE DECISION - IF -->
<!-- <?php

$calificacion = 10;

if ($calificacion >= 8) {
    echo "Un $calificacion es aprobado!";
}

?> -->

<!-- ESTRUCTURAS DE DECISION - IF ELSE -->
<!-- <?php

$x = 5;
$y = 5;

if ($x > $y) {
    echo "A) $x es mayor que $y";
} else {
    echo "B) $y es mayor que $x";
}

?> -->


<!-- ESTRUCTURAS DE DECISION - IF ELSEIF ELSE -->
<!-- <?php

$x = 9.5;
$y = 6.5;

if ($x > $y) {
    echo "A) $x es mayor que $y";
} elseif ($x == $y) {
    echo "B) $x es igual que $y";
} else {
    echo "c) $y es mayor que $x";
}

?> -->


<!-- ESTRUCTURAS DE DECISION - SWITCH -->
<!-- <?php

$i = "perro";

switch ($i) {
    case "perro":
        echo "\$i es un perro \n";
        break;
    case "gato":
        echo "\$i es un gato";
        break;
    case "avestruz":
        echo "\$i es un avestruz";
        break;
}

echo "termino";

?> -->


<!-- ESTRUCTURAS DE REPETICION - FOR -->
<!-- <?php
    for($i = 1; $i <= 10; $i++) {
        echo $i;
    }
?> -->

<!-- ESTRUCTURAS DE REPETICION - WHILE -->
<!-- <?php
$i = 1;
while($i <= 10){
    echo $i;
    $i++;
}
?> -->


<!-- ESTRUCTURAS DE REPETICION - DO WHILE -->
<!-- <?php

$i = 0;
do {
    echo $i;
} while ($i > 0);

?> -->


<!-- FUNCIONES EJEMPLO -->
<!-- <?php

    function saludar($nombre){
        echo "Hola $nombre";
        echo "<br>";
    }

    saludar('Lucas');
    saludar('Juani');
    saludar('Rodri');

?> -->

<!-- FUNCIONES -->
<!-- <?php
    // function sum($num1, $num2){
    //     $resultado = $num1 + $num2;
    //     echo "El resultado de la suma es $resultado";
    //     echo "<br>";
    // }

    // sum(20, 7);
    // sum(20, 8);

    $num1 = 20;
    $num2 = 7;
    $resultado = $num1 + $num2;
    echo "El resultado de la suma es $resultado";
    echo "<br>";

    $num1 = 20;
    $num2 = 8;
    $resultado = $num1 + $num2;
    echo "El resultado de la suma es $resultado";
    echo "<br>";
?> -->


<!-- FORMS GET -->
<!-- <html>
<body>

<form action="welcome_get.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html> -->


<!-- FORMS POST -->
<!-- <html>
<body>

<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html> -->


<!-- FORMS ELABORADOS -->

<!-- <!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);

    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="completo.php">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

</body>
</html> -->


<!-- FORMS ELABORADOS CON DISEÑO-->
<!-- <html>
<head>
<style>
.error {color: #FF0000;}
</style>
<style>
html {
  height: 100%;
}
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: linear-gradient(#141e30, #243b55);
}

.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}

.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #03e9f4;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}

.login-box a:hover {
  background: #03e9f4;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
}

.login-box a span {
  position: absolute;
  display: block;
}

.login-box a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03e9f4);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #03e9f4);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #03e9f4);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #03e9f4);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}
</style>
</head>
<body>  
<div class="login-box">
  <h2>Login</h2>
  <form method="post" action="post_login.php">
    <div class="user-box">
      <input type="text" name="nombre" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="" required="">
      <label>Password</label>
    </div>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <input type="submit" name="submit" type="hidden" value="Submit">
  </form>
</div>
</body>
</html> -->
