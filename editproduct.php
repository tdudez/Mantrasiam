<?php 
    include("action/server.php");
    $prodid = $_GET['id'];
    $query = "SELECT * FROM products WHERE id ='$prodid' " ;
    
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    
    $filename = $row['pic'];

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $price = $_POST['price'];

        $filetmp = $_FILES['filepic']['tmp_name'];
        $filename = $_FILES['filepic']['name'];
        $filepath = "productpic/" . $filename;

        move_uploaded_file($filetmp, $filepath);

        $query = "UPDATE products 
                SET name = '$name', price = '$price', pic = '$filename'
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
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle " src="productpic/<?=$filename?>" width="90" height="90">
                    
                </div>
            </div>
            <div class="col-md-8">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-row align-items-center back"><i
                                class="fa fa-long-arrow-left mr-1 mb-1"></i>
                            <a href="store.php">
                                <h6>Back</h6>
                            </a>
                        </div>
                        <h6 class="text-right">แก้ไขวัตถุมงคล</h6>
                    </div>
                    <form action="editproduct.php?id=<?=$prodid?>" method="post" enctype="multipart/form-data">
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="ชื่อสินค้า" name="name" value="<?=$row['name']?>">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="ราคาขาย" name="price" value="<?=$row['price']?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filepic">File Button</label>
                            <div class="col-md-4">
                                <input type="file" class="form-control-file" name="filepic">
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