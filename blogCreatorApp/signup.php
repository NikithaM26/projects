<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Blog Creator App</title>
        <link rel="stylesheet" type="text/css" href="./css/signup.css">
        <link rel="icon" href="./images/Blogpost.jpg" type="image/icon">
    </head>
    <body>
        <div class="title"><h1>Sign Up Form</h1></div>
        <div class="container">
            <div class="left"></div>
            <div class="right">
                <div class="formBox">
                    <form method="post">
                        <p>Name</p>
                        <input type="text" name="name" placeholder="Type your Name" required><br>
                        <p>E-mail</p>
                        <input type="text" name="email" placeholder="Type you email id here" required><br>
                        <p>Contact Number</p>
                        <input type="tel" name="tel" placeholder= "Contact number" required><br>
                        <p>Password</p>
                        <input type="Password" id="pswd1" name="pswd" placeholder="Password of max 8 characters" required><br>
                        <p>Confirm Password</p>
                        <input type="Password" id="pswd2" name="cpswd" placeholder="Enter your password again" onclick="validate()"required><br><br>
                        <input type="submit" name="submit" value="Sign Up">
                    </form>
                </div>
            </div>
        </div>
        <script>
        function validate() {
            var pass1 = document.getElementById("pswd1").value;
            var pass2 = document.getElementById("pswd2").value;
            if(pass1.length > 8 || pass1.length <= 0){
              alert('Password Length exceeded 8! Please check!');
            }
          }
        </script>

        <?php
          $con = mysqli_connect("localhost","root","","blogapp");
          if(!$con) {
            die("Error: ".mysqli_connect_error());
          }
          if($_SERVER['REQUEST_METHOD'] === "POST"){
            if(isset($_POST['submit'])) {
              if($_POST['pswd'] === $_POST['cpswd']){
              $sql = "INSERT INTO signup (name, email, phno, password, confirmpassword)
              VALUES('$_POST[name]','$_POST[email]','$_POST[tel]','$_POST[pswd]', '$_POST[cpswd]')";

              if(!mysqli_query($con, $sql)) {
                die('Error: '.mysqli_error($con));
              }
              echo "<script>alert('Thank you signing up!');</script>";
              header("location:login.html");
            }
          else {
            echo "<script>alert('Passwords do not match...');</script>";
          }}
          }
          mysqli_close($con);

        ?>

    </body>
</html>
