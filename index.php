<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="style3.css">
    <title>Document</title>
    <?php
    session_start();
    if (!empty($_SESSION) && $_SESSION['another']) {
        $dec = json_decode($_SESSION['another'], true);
    } else {
        echo "<body>
                <script>
                    alert('kamu belum login!')
                    window.location.replace('login.php')
                </script>
            </body>";
    }
?>
</head>
<body>
<section class="vh-100">
  <div class="container-fluid ">
    <div class="row justify-content-center">
      <div class="col-sm-6 text-black ">
        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 pt-5 pt-xl-0 mt-xl-n5">
        <div class="card shadow-2-strong mb-5 mt-5" style="border-radius: 1rem; ">
        <div class="card-body p-5 " >
        <form style="width: 23rem;" action="register_action.php" method="post" class="mb-5">
        <nav class="navbar bg-light ">
        <div class="container-fluid ">
            <a class="navbar-brand text-center" href="#">
            <h3><img src="./image/pertamina2.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            <b>Pertamina Hulu Rokan</b></h3>
          </a>
        </div>
        </nav>  
            <h3 class="fw-normal mb-2 mt-4 pb-3 text-center" style="letter-spacing: 1px;">Account Information</h3>
    
            <div class="form-outline mb-4">
            <label for="username">Username</label>
            <input type="text" name="username" id="username"value="<?php echo $dec['username']; ?>" class="form-control form-control-lg">
            </div>

            <div class="form-outline mb-4">
            <label for="email">Email</label>
            <input type="text" name="email" value="<?php echo $dec['email']; ?>"id="email" class="form-control form-control-lg">
            </div>

            <div class="form-outline mb-4">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" value="<?php echo $dec['first_name']; ?>" id="first_name" class="form-control form-control-lg" >
            </div>

            <div class="form-outline mb-4">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" value="<?php echo $dec['last_name']; ?>"id="last_name"class="form-control form-control-lg">
            </div>

            <div class="form-outline mb-4">
            <label for="address">Address</label>
            <textarea name="address" id="address" class="form-control form-control-lg" cols="10" rows="2" ><?php echo $dec['address']; ?></textarea>
            </div>

            <div class="pt-1 mb-4 text-center">
            <button type="submit" class="btn btn-info btn-lg btn-block btn-danger"><a href="logout.php" style = "color : white;">Log out</a></button>
            </div>

          </form>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>