<?php

$error = isset($_GET['error']) ? $_GET['error'] : '';

// if (isset($_GET['error'])) {
//     $error = $_GET['error'];
// } else {
//     $error = '';
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "component/head_script.php";?>
</head>

<body onload="<?php if ($error == '1') {echo 'errorlogin()';} ?>">

    <div class="container">
        <div class="row justify-content-center pt-5">

            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form action="action/login_db.php" method="POST" class="needs-validation" novalidate>
                            <div class="form-group">
                                <label for="txtuser">Username</label>
                                <input type="text" class="form-control" id="txtuser" name="txtuser" required>
                                <div class="valid-feedback">
                                    
                                </div>
                                <div class="invalid-feedback">
                                    กรุณาใส่ Username ให้ถูกต้อง
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtpass">Password</label>
                                <input type="password" class="form-control" id="txtpass" name="txtpass" required>
                                <div class="valid-feedback">
                                
                                </div>
                                <div class="invalid-feedback">
                                    กรุณาใส่ Password ให้ถูกต้อง
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-success">Login</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <script>
    function errorlogin() {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!'
        })
    }
    </script>


    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>


</body>

</html>