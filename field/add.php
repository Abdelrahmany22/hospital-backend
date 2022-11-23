<?php 

include '../shared/head.php';
include '../shared/nav.php';
include '../general/function.php';

include '../general/config.php';

 if (isset($_POST['btn'])){
$name=$_POST['name'];
// $fieldid=$_POST['fieldid']; 

$insert="INSERT INTO fields VALUES (null,'$name')" ;
$in=mysqli_query($conn,$insert);
}


$fname='';
$flag=false;
if (isset($_GET['edit'])){
    $flag=true;
    $id=$_GET['edit'];
    $selectdo="SELECT * FROM fields where id=$id";
    $sd=mysqli_query($conn,$selectdo);
    $row = mysqli_fetch_assoc($sd);
    $fname=$row['name'];

if (isset($_POST['update'])){
$name=$_POST['name'];



$updatedo=" UPDATE fields SET NAME = '$name' where id =$id";
$up=mysqli_query($conn,$updatedo);
}


}


Auth();


?>

<div class="home">
    <h1 class="text-info text-center">add</h1>

    <div class="container col-6 mt-5 bg-light " >
    <form method="POST">
  <div class="form-group ">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name ="name" placeholder="enter name" value="<?php echo $fname ?>" >
 
  </div>
 
 
 <?php   if ($flag):?>
    <button type="update" class="btn btn-primary" name ="update">Update</button>
    <?php  else: ?>
  <button type="submit" class="btn btn-primary" name ="btn">Submit</button>
  <?php  endif;?>
    
</form>
    </div>



</div>
<?php include '../shared/script.php'?> 