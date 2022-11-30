<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>
<section class="vh-100">
  <div class="container-fluid ">
    <div class="row justify-content-center">
      <div class="col-sm-6 text-black ">
        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 pt-5 pt-xl-0 mt-xl-n5">
        <div class="card shadow-2-strong mb-5 mt-5" style="border-radius: 1rem; ">
          <div class="card-body p-5 text-center" >
          <form style="width: 23rem;" action="register_action.php" method="post" class="mb-5">
          <nav class="navbar bg-light ">
         <div class="container-fluid ">
            <a class="navbar-brand text-center" href="#">
            <h3><img src="./image/pertamina2.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            <b>Pertamina Hulu Rokan</b></h3>
          </a>
        </div>
        </nav>  
            <h3 class="fw-normal mb-2 mt-4 pb-2" style="letter-spacing: 1px;">Register</h3>
              
            <div class="form-outline mb-4">
            <input type="text" name="username" id="username" placeholder="Username" autofocus class="form-control form-control-lg"> 
            </div>

            <div class="form-outline mb-4">
            <input type="text" name="email" id="email" placeholder="Email" class="form-control form-control-lg" > 
            </div>

            <div class="form-outline mb-4">
            <input type="text" name="first_name" id="first_name" placeholder="First Name"  class="form-control form-control-lg">
            </div>

            <div class="form-outline mb-4">
            <input type="text" name="last_name" id="last_name" placeholder="Last Name" class="form-control form-control-lg">
            </div>

            <div class="form-outline mb-4">
            <input type="text" name="first_name" id="first_name" placeholder="First Name" class="form-control form-control-lg" >
            </div>

            <div class="form-outline mb-4">
            <textarea cols="10" rows="2" type="text" name="address" id="address" placeholder="address" class="form-control form-control-lg" ></textarea>
            </div>

            <div class="form-outline mb-4">
            <input type="password" name="password1" id="password1" class="form-control form-control-lg" placeholder ="Password" />
            </div>

            <div class="form-outline mb-4">
            <input type="password" name="password2" id="password2" placeholder="Confirm Password" class="form-control form-control-lg">
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block btn-danger" type="submit" value="Sign Up" name="submit" id="submit" >Sign Up</button>
            </div>
            <p>Have an account?  <a href="login.php" class="link-info">Login here</a></p>

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