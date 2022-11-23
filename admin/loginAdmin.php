<?php
include '../shared/head.php';
include '../shared/nav.php';
include '../general/config.php';
include '../general/function.php';


if (isset($_POST['login'])){
    $name=$_POST['username'];
    $pass=$_POST['password']; 
    
    $selectadmin="SELECT * FROM `admin` where name='$name' and password='$pass'" ;
    $sa=mysqli_query($conn,$selectadmin);
    $row =mysqli_fetch_assoc($sa);
    $count = mysqli_num_rows($sa);
    
    if($count == 1) {
       
        $_SESSION['Admin']=$row['name'];
 
    }
    else if ($count == 0){
        header("locatin:/ssd/sess3/admin/loginAdmin.php");
    }

    }


?>
  

  <div class="home">
  <h1 class="text-info text-center">admin</h1>
  <div class="container col-6 mt-5">
    <div class="card">
        <div class="card-body">
            <form action=""method="POST">
                <div class="form-group">
                <label for="">Username</label>
            <input type="text" name="username" class="form-control"placeholder="name">
            </div> 
            <div class="form-group">
                <label for="">Password</label>
            <input type="password" name="password" class="form-control" placeholder="password">
            </div>  
            <button name="login" class="btn btn-block btn-success w-50 mx-auto">Login</button>

        </form>
        </div>
    </div>
  </div>

  </div>







<?php include '../shared/script.php'?> 



