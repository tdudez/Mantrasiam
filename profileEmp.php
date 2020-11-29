<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Employee</title>
    <?php include "component/head_script.php";?>
    <!-- <link rel="stylesheet" href=""> -->
</head>
<body>
<div class="container rounded bg-white mt-5">
    <div class="row">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="img/1.jpg" width="90"><span class="font-weight-bold">DOM</span><span class="text-black-50">Email@rsu.ac.th</span><span>รหัสตัวแทน</span></div>
        </div>
        <div class="col-md-8">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                        <h6>Back to home</h6>
                    </div>
                    <h6 class="text-right">Edit Profile</h6>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><input type="text" class="form-control" placeholder="ชื่อ" value=""></div>
                    <div class="col-md-6"><input type="text" class="form-control" value="" placeholder="นามสกุล"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><input type="text" class="form-control" placeholder="Email" value=""></div>
                    <div class="col-md-6"><input type="text" class="form-control" value="" placeholder="Phone number"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><input type="text" class="form-control" placeholder="ที่อยู่" value=""></div>
                    <div class="col-md-6"><input type="text" class="form-control" value="" placeholder="รหัสประชาชน"></div>
                </div>
                
                <div class="mt-4 text-right">
                    <button class="btn btn-primary profile-button" type="button">Save Profile</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>