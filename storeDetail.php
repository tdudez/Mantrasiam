<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Detial </title>
    <?php include "component/head_script.php";?>
    <!-- <link rel="stylesheet" href=""> -->
</head>

<body>
    <div class="container rounded bg-white mt-5">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        src="img/1.jpg" width="90"><span class="font-weight-bold">ชื่อสินค้า</span><span
                        class="text-black-50"></span><span>รหัสสินค้า</span></div>
            </div>
            <div class="col-md-8">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-row align-items-center back"><i
                                class="fa fa-long-arrow-left mr-1 mb-1"></i>
                            <h6>Back to home</h6>
                        </div>
                        <h6 class="text-right">เพื่มวัตถุมงคล</h6>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="ชื่อสินค้า" value="">
                        </div>
                        <div class="col-md-6"><input type="text" class="form-control" value="" placeholder="ราคาขาย">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="จำนวน" value="">
                        </div>
                       
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">File Button</label>
                            <div class="col-md-4">
                                <input id="filebutton" name="filebutton" class="input-file" type="file">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row mt-2">

                            <div class="mt-6 text-right"><button class="btn btn-primary profile-button"
                                    type="button">Add</button></div>
                            <br>
                            <div class="mt-6 text-right"><button class="btn btn-primary profile-button"
                                    type="button">Reset</button></div>
                        </div>
                    </div>
                </div>
            </div>
</body>

</html>