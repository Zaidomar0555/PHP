<!-- This project will be about  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <script type="text/javascript" src="./js/main.js"></script>
    <title>Log in</title>
</head>
<body>
    <h1 class="header">Welcome to Hello Sport! Please log in to continue</h1>

        <!-- <p>If you want to view the site before signing up, please click <a id="loginAnchor"href="#">Here!!</a></p> -->
        <!-- I will create two froms.
        -The first form is if the user does not have an account.
        -The second form is if the user has an account
        - However, the second form will be hidden using simple javascript till the user clicks on a button.
         - If the user clicks on that button, the first form will be hidden   -->
        <!-- The from will give the user the ability  -->

    <div class="row">
      <div class="col-lg-2">

      </div>
      <div class="col-lg-8">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">First Name</label>
            <input type="text" class="form-control" name="firstname" placeholder="Enter First Name">

          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Last Name</label>
            <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name">

          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Enter Username">

          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">E-mail</label>
            <input type="text" class="form-control" name="email" placeholder="Enter E-Mail">

          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="text" class="form-control" name="password"  placeholder="Password">
          </div>
          <div class="form-check">
          <div class="row">

            <div class="col-lg-1">

            </div>
            <div class="col-lg-5">
               <label for="">Please select a country: </label>
              <select id="country" name="countries" >
                <option value="" disabled selected>Choose an option</option>
                <option value="England">England</option>
                <option value="France">France</option>
                <option value="Italy">Italy</option>
                <option value="SaudiArabia">Saudi Arabia</option>
                <option value="Spain">Spain</option>
                <option value="USA">USA</option>
              </select>
            </div>

            <div class="col-lg-1">

            </div>
            <div class="col-lg-5" id="citiesSelection">
               <label for="">Please select a city: </label>
              <select id="city"  name="cities" >
                <option value="" disabled selected>Choose an option</option>
                <option value="SaudiArabia">Jeddah</option>
                <option value="USA">LA</option>
                <option value="England">London</option>
                <option value="Spain">Madrid</option>
                <option value="England">Manchester</option>
                <option value="Italy">Milan</option>
                <option value="France">Monaco</option>
                <option value="Spain">Murcia</option>
                <option value="France">Paris</option>
                <option value="SaudiArabia">Riyadh</option>
                <option value="Italy">Roma</option>
                <option value="USA">San Diego</option>
              </select>
            </div>
          </div>
          </div>
          <input id="button" type="submit" name="submit" class="btn btn-primary">
        </form>
      </div>
     <div class="col-lg-2">

     </div>
    </div>

  <p>If you want to your password to be displayed, please click </p>

    <?php
    // I want to get the info from the form.
     if($_SERVER["REQUEST_METHOD"] == "POST"){
       $firstname = $_POST['firstname'];
       $lastname = $_POST['lastname'];
       $username = $_POST['username'];
       $email = $_POST['email'];
       $password = $_POST['password'];



       if(isset($_POST['submit'])){
         if(!empty($_POST['countries'] && $_POST['cities'])){
            $country = $_POST['countries'];
            $city = $_POST['cities'];
          //  $city = $_POST['cities'];
         }

         else{
           echo "Please select the value";
         }
       }



      $info = array();


       echo "<h2> First Name is ".$firstname. "</h2><br>";
       echo "<h2> Last Name is ".$lastname. "</h2><br>";
       echo "<h2> Username  is ".$username. "</h2><br>";
       echo "<h2> E-Mail Name is ".$email. "</h2><br>";

       //echo "<p>If you want to your password to be displayed, please click<a id='showMePass' href='#'>HERE</a></p>";
       echo "<h2 id='showPass'> The password is ".$password. "</h2><br>";
       echo "<h2> The country selected is: " .$country. "</h2><br>";
       echo "<h2> The city selected is: " .$city. "</h2><br>";



     }

     ?>

    <!-- <h2 id="showCity">   </h2> -->

</body>
</html>
