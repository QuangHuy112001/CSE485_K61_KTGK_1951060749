<?php
include 'header.php';
    include 'config.php';
        if(isset($_GET['id'])){
             $id = $_GET['id'];
             
        }
?>

<?php
$id = $_GET['id'];
$sql = "select * from drugs where id = $id";
$res = mysqli_query($conn, $sql);
if ($res == true) {
    $count = mysqli_num_rows($res);
    if ($count == 1) {
        $row = mysqli_fetch_assoc($res);
        $name=$_POST['d_name'];
        $type=$_POST['d_type'];
        $barcode=$_POST['barcode'];
        $dose=$_POST['dose'];
        $code=$_POST['code'];
        $cost_price=$_POST['cost_price'];
        $selling_price=$_POST['selling_price'];
        $expiry=$_POST['expiry'];
        $company_name=$_POST['company_name'];
        $production_date=$_POST['production_date'];
        $expiration_date=$_POST['expiration_date'];
        $place=$_POST['place'];
        $quantity=$_POST['quantity'];
    }
    else 
    {
        header("location:index.php");
    }
}

?>

<?php
if(isset($_POST["edit"])){
    $emp_name = $row['emp_name'];
    $name=$row['d_name'];
    $type=$row['d_type'];
    $barcode=$row['barcode'];
    $dose=$row['dose'];
    $code=$row['code'];
    $cost_price=$row['cost_price'];
    $selling_price=$row['selling_price'];
    $expiry=$row['expiry'];
    $company_name=$row['company_name'];
    $production_date=$row['production_date'];
    $expiration_date=$row['expiration_date'];
    $place=$row['place'];
    $quantity=$row['quantity'];
        if($name != "" && $type != "" &&$barcode !="" && $dose !="" && $code !=""&& $cost_price !=""&& $selling_price !=""
        && $expiry !="" && $company_name !=""&& $production_date !="" && $expiration_date !="" && $place !="" && $quantity !=""){
           
        }
}

