<html>
<head>
<link rel="stylesheet" href="bootstrap/bootstrap.css">
<script src="bootstrap/bootstrap.js"></script>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Anton|Monoton" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    background-color: rgba(184, 171, 171, 0.815);
}

.container-fluid{
    padding-left: 0;
    padding-right: 0;
    background-color: gray;
    height: 125px;
}

.header{
    margin-bottom: 0;
    padding: 10px;
    text-align: center;
    padding-top: 30px;
    color: white;
    font-family: 'Anton', sans-serif;
    font-family: 'Monoton', cursive;
} 

.delete-form{
    padding: 20px;
    margin-top: 20px;
    background: gray;
    
}

.col3{
    margin-left: auto;
    margin-right: auto;
}

#last-thing{
  margin-bottom: 0;
    padding: 10px;
    text-align: center;
    padding-top: 30px;
    color: white;
    font-family: 'Anton', sans-serif;
    font-family: 'Monoton', cursive
}


</style>
</head>
<body>
<div class="container-fluid" >
<h3 class="header">MOTIVATIONAL QUOTES</h3>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col3">
            <form action="delete.php"method="post"class="delete-form">
            <div class="form-group">
                       <label for="usr">Name:</label>
                        <input type="text"class="form-control" id="usr" name="deleteName"placeholder="Enter the name to delete"required>
            </div>
            <input type="submit" class="btn btn-primary btn-lg btn-block" name="delete"value="Delete">
           
            </form>
        </div>
    </div>
</div>

<div class="container">
<div class="row">
<div class="col-sm-6 col3"style="margin-top:20px">
<div class="card">
  <img class="card-img-top" src="images/laptop1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Programmer</h4>
    <p class="card-text">Programming is a super power if you know this you do anything.</p>
  </div>
</div>
</div>
</div>
</div>

<div class="container-fluid">
<footer>
<h4 style="margin-top:20px;"id = "last-thing">CREATED BY PRINCE RATHORE</h4>
</footer>
</div>
</body>
</html>

<?php
if(isset($_POST['delete'])){
    include "connection.php";

    $sql2 = "DELETE FROM users WHERE name = '".strtolower($_POST["deleteName"])."'";

    mysqli_query($connection, $sql2);

    $request_page = "index.php";

    header("Location:".$request_page);
}
?>

