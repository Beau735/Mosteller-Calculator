<!DOCTYPE html>
<html>
  <head>
    <title>Mosteller Calculator</title>
    <style>
        body {
            background: #cd83ba;     
        }
        body {
            background-image: url(https://i.gifer.com/Y3il.gif);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: left;
            background-size: 214px 205px;
        }
        h1 {
            margin-left: 35%;
            padding-top: 150px; 
            color: #0B2447;
        }
        form {
            margin-left: 35%;
            padding-top: 20px;
        }
        input[type=submit] {
            background-color: black;
            color: white;
            width: 100px;
            height: 40px;
            font-weight: bold;
            margin-left: 100px;
        }
    </style>
  </head>
  <body>
    <h1>Body Area Calculator</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <label for="height">Body Height (in cm):</label>
      <input type="number" name="height" id="height" required><br><br>
      <label for="weight">Body Weight (in kg):</label>
      <input type="number" name="weight" id="weight" required><br><br><br><br>
      <input type="submit" name="submit" value="Calculate">
    </form>
    <center>
    <?php
      if(isset($_POST['submit'])){
        $h = $_POST['height']; // Body height in cm
        $w = $_POST['weight']; // Body weight in kg
        $kof = sqrt($h * $w / 3600); // Calculate body area
        $kof = round($kof, 2); // Round to two decimal places
        echo "<p>The body surface is: " . $kof . " m<sup>2</sup></p>";
      }
    ?>
    </center>
  </body>
</html>
