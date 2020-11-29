<?php 
    include("action/server.php");
    $prodid = $_GET['id'];
    $query = "SELECT * FROM products WHERE id ='$prodid' " ;
    
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $amount = $_POST['amount'];

        $query = "UPDATE products 
                SET name = '$name', price = '$price', amount = '$amount'
                WHERE id = '$prodid'";
        $result = mysqli_query($connect, $query);
        
        if($result){
            $_SESSION['success'] = "Edit employee profile successfully";
            header("Location: store.php");
        }
        else{
            $_SESSION['error'] = "Something went wrong";
            header("Location: store.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Detial </title>
    <?php include "component/head_script.php";?>
</head>

<body>
    <div class="container rounded bg-white mt-5">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        src="img/1.jpg" width="90"><span class="font-weight-bold">ชื่อสินค้า</span><span
                        class="text-black-50"></span><span>รหัสสินค้า</span>
                </div>
            </div>
            <div class="col-md-8">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-row align-items-center back"><i
                                class="fa fa-long-arrow-left mr-1 mb-1"></i>
                            <h6>Back to home</h6>
                        </div>
                        <h6 class="text-right">แก้ไขวัตถุมงคล</h6>
                    </div>
                    <form action="editproduct.php?id=<?=$prodid?>" method="post">
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="ชื่อสินค้า" name="name" value="<?=$row['name']?>">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="ราคาขาย" name="price" value="<?=$row['price']?>">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <input type="number" class="form-control" placeholder="จำนวน" name="amount" value="<?=$row['amount']?>">
                            </div>
                        
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="filebutton">File Button</label>
                                <div class="col-md-4">
                                    <input id="filebutton" name="filebutton" class="input-file" type="file">
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 text-right">
                            <button class="btn btn-primary profile-button" type="submit" name="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
</body>

</html>