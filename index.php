<!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Registeration Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/link.php'?>
  </head>
  <body>
    <section id="container" class="">
      <?php include 'include/login_navbar.php' ?>
      <section id="main-content" style="height:100vh; width:100vw;">
              <div class="panel panel-default" style="width : 40%">
                <div class="panel-heading">
                  <div class="pull-left">Register</div>
                  <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                  <div class="padd">
                    <div class="form quick-post"  >
                      <form class="form-horizontal" method="post" action="index.php"> 
                        <div class="form-group">
                            <label class="control-label col-lg-2" for="name">Name</label>
                            <div class="col-lg-10">
                              <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2" for="email">Email</label>
                            <div class="col-lg-10">
                              <input type="email" name="email" id="email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-lg-2" for="password">Password</label>
                          <div class="col-lg-10">
                              <input type="password" name="password" id="password" class="form-control">  
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-lg-2" style="max-width: 80.66666667%; width: 70.66666667%;" for="confirmpassword">Confirm Password</label>
                          <div class="col-lg-10">
                              <input type="password" name="confirmpassword" id="confirmpassword" class="form-control">  
                          </div>
                        </div>
                        <div class="form-group buttonlogin">
                          <div class="col-lg-offset-2">
                            <button type="submit" name="submit" value="submit" class="btn btn-primary">Sign up</button>
                          </div>
                          <div class="col-lg-offset-2 " >
                            <a href="login.php" class="btn" style="border: 1px solid;">Login</a>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

      </section>
    </section>
    </body>
  </html>
  <?php
    include 'include/connection.php';
    if(isset($_POST['submit'])){
        $name= $_POST['name'];
        $email= $_POST['email'];
        $password=md5($_POST['password']);
        $confirmpassword=md5($_POST['confirmpassword']);
        $queryName="SELECT * FROM users WHERE email = '$email'"; 
        if (mysqli_query($conn, $queryName) and $password == $confirmpassword){
            $query="INSERT INTO `users`(`name`, `email`, `password`, `role`) VALUES ('$name','$email', '$password', 'student')"; 
            if(mysqli_query($conn, $query))
                {
                    echo "<script>location.href = 'login.php'</script>";
                }
    }
    }
?>