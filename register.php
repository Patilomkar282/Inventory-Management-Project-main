<!doctype html>
<html lang="en">

<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="css/style.css">



</head>

<body>

  <section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-2">
              <div class="row justify-content-center">
                <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-3 mt-3">Sign up</p>
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">


                  <form class="mx-1 mx-md-4" method="post" action="add.php"
                    onsubmit="return validateEmail()">
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example1c"><i class="bi bi-person-circle"></i> Your
                          Name</label>
                        <input type="text" id="form3Example1c" class="form-control form-control-lg py-3" name="name"
                          autocomplete="off" placeholder="enter your name" style="border-radius:25px ;" />
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c"><i class="bi bi-envelope-at-fill"></i> Your
                          Email</label>
                        <input type="email" id="form3Example3c" class="form-control form-control-lg py-3"
                          name="username" autocomplete="off" placeholder="enter your username"
                          style="border-radius:25px ;" />
                        <span id="emailError" class="error-message"></span>
                        <!-- Error message will be displayed here -->
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c"><i class="bi bi-chat-left-dots-fill"></i>
                          Password</label>
                        <input type="password" id="form3Example4c" class="form-control form-control-lg py-3"
                          name="password" autocomplete="off" placeholder="enter your password"
                          style="border-radius:25px ;" />
                      </div>
                    </div>
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <input type="submit" value="Register" name="register"
                        class="btn btn-warning btn-lg text-light my-2 py-3 "
                        style="width:100% ; border-radius: 30px; font-weight:600;" style="border-radius:25px ;"
                        color="#0000FF" />
                    </div>
                  </form>

                  <style>
                    .error-message {
                      display: none;
                      color: #721c24;
                      background-color: #f8d7da;
                      border: 1px solid #f5c6cb;
                      padding: 5px 10px;
                      border-radius: 5px;
                      margin-top: 5px;
                      font-size: 14px;
                    }
                  </style>

                  <script>
                    function validateEmail() {
                      var email = document.getElementById("form3Example3c").value.trim(); // Trim whitespace from the email
                      var emailPattern = /^[a-zA-Z0-9._%+-]+@mmcoe\.edu\.in$/;
                      var isValid = emailPattern.test(email);
                      if (!isValid) {
                        var errorMessageSpan = document.getElementById("emailError");
                        errorMessageSpan.innerText = "Invalid email format or pattern. Please enter a valid email address in the format 'Facultyname@mmcoe.edu.in'.";
                        errorMessageSpan.style.display = "block"; // Show the error message
                        return false;
                      } else {
                        document.getElementById("emailError").style.display = "none"; // Hide the error message
                        return true;
                      }
                    }
                  </script>




                  <p align="center">I have already account <a href="index.php" class="txt-warning"
                      style="font-weight:600; text-decoration:none;">Login</a></p>
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                  <img src="images/signup.jpg" class="img-fluid" alt="Sample image" height="300px" width="500px">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>