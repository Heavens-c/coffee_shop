
<?php

$regs = mysqli_connect("localhost", "final_coffee", "coffee_final", "final_coffee");

$list = mysqli_query($regs, 'SELECT * FROM register');

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with FoodHut landing page.">
    <meta name="author" content="Devcrud">
    <title>COFFEE SHOP</title>

   <!-- font icons -->
   <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">

   <!-- Bootstrap + Steller  -->
   <link rel="stylesheet" href="assets/css/foodhut.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
    <link href="navbar.html" rel="import" />

    

        <!-- Navbar -->
<nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
            </li>
           
            <li class="nav-item">
                <a class="nav-link" href="gallary.html">Gallary</a>
            </li>
        </ul>
        <a class="navbar-brand m-auto" href="#">
            <img src="assets/imgs/logo.svg" class="brand-img" alt="">
            <span class="brand-txt">Food Hut</span>
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact Us</a>
            </li>
        </ul>
    </div>
</nav>

      <br><br><br><br><br><br><br><br>
      <table class="table table-striped">
         <thead>
            <tr>
               <th scope="col">ID</th>
               <th scope="col">UserName</th>
               <th scope="col">Email</th>
               <th scope="col">Password</th>
            </tr>
         </thead>
         <tbody>
            <tr>
            <?php foreach ($list as $list) : ?>
            <tr>
                <td><?php echo $list['id']; ?></td>
                <td><?php echo $list['Username']; ?></td>
                <td><?php echo $list['Email']; ?></td>
                <td><?php echo $list['Password']; ?></td>
            </tr>
        <?php endforeach; ?>
         </tbody>
      </table>