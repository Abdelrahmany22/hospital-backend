
<?php
session_start();

if(isset($_GET['logout'])){
session_unset();
  session_destroy();
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">doctory</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
   <?php  if(isset($_SESSION['Admin'])):?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Doctor
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/ssd/sess3/doctor/add.php">Add doctor</a>
          <a class="dropdown-item" href="/ssd/sess3/doctor/list.php">List doctor</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Field
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/ssd/sess3/field/add.php">Add field</a>
          <a class="dropdown-item" href="/ssd/sess3/field/list.php">List field</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <?php endif;?>
    </ul>
<?php  if(isset($_SESSION['Admin'])):?>

<form action=""method="GET">
<button name="logout" class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button>
</form> 
<?php else:?>
  <a href="/ssd/sess3/admin/loginAdmin.php" class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</a>

  <?php endif;?>


 
  </div>
</nav>
