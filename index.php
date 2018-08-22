<html>
<head>
<link rel="stylesheet" href="bootstrap/bootstrap.css">
<script src="bootstrap/bootstrap.js"></script>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Anton|Monoton" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
</head>
<body>

<div class="container-fluid" >
<h3 class="header">MOTIVATIONAL QUOTES</h3>
</div>

<!-- The overlay -->
<div id="myNav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <!-- Overlay content -->
  <div class="overlay-content">
    <a href="delete.php">Delete quotes</a>

  </div>

</div>

<!-- Use any element to open/show the overlay navigation menu -->
<!-- <button onclick="openNav()">open</button> -->
<button type="button" class="btn menu  btn-lg btn-block" onclick = "openNav()">Menu</button>

<div class="container">
<div class="row">
<div class="col-sm-6 col1">
<div class="card">
  <div class="card-body">
  <?php
    if(isset($_POST["insert"])){
      include "connection.php";

      $sql = "INSERT INTO users(name, thought)
      VALUES('".strtolower($_POST["name"])."','".$_POST["thought"]."')";

      mysqli_query($connection, $sql);
    }

    include "connection.php";

    $sql1 = "SELECT * FROM users";
    $result = mysqli_query($connection, $sql1);

    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
        echo "<p>".$row['thought']."</p>";
        echo "<br>";
        echo "<h2>".$row['name']."</h2>";
        echo "<hr>";
      }
    }
  ?>
  </div>
</div>
</div>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-sm-6 col2">
<form action="index.php" class="insert-form" method="post"style="background-color:gray;">
<div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" id="usr" name="name" required>
</div>
<div class="form-group">
  <label for="thought">Thought:</label>
  <input type="text" class="form-control" id="thought" name="thought"required>
</div>
<input type="submit" class="btn btn-primary btn-lg btn-block" name="insert">
</form>
</div>
</div>
</div>

<script>
/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
</script>
</body>
</html>


