<?php 

include '../shared/head.php';
include '../shared/nav.php';
include '../general/function.php';

include '../general/config.php';

$select="SELECT * FROM fields ";
$ss=mysqli_query($conn,$select);


if (isset ($_GET['delete'])){
    $id=$_GET['delete'];
    $delete="DELETE  FROM fields WHERE ID =$id";
    $de=mysqli_query($conn,$delete);
    header("location:/ssd/sess3/field/list.php");

}


Auth();

?>

<div class="home">
    <h1 class="text-info text-center">list</h1>

    <div class="container col-6 mt-5 bg-light " >
<div class="card-body">
    <table class="table table-light">
        <tr>
            <td>ID</td>
            <td>Name</td>
            
            <td>Action</td>

        </tr>
        <?php  foreach($ss as $data){ ?>
        <tr>
            <td> <?php echo $data['id'] ?></td>
            <td> <?php echo $data['name'] ?></td>
            <td><a href="list.php?delete=<?php echo $data['id'] ?> " class="btn btn-danger">Delete</a>
            <a href="add.php?edit=<?php echo $data['id'] ?> " class="btn btn-info">edit</a></td>

        </tr>
        <?php } ?>
    </table>
</div>
    </div>



</div>
<?php include '../shared/script.php'?> 