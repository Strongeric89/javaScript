

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
  <title>Form Validation Assignment</title>
</head>

<body>
  <h2>Enter your details</h2>
  <?php echo 'hello'; ?>
<!--
  <form  method="post" action="Assignment.php" name="form1" onsubmit="return validateForm();">
    Email:<input type="text" name="email"><br> Password: <input type="password" name="password"><br> Phone: <input type="text" name="phone"><br>
    <input type="submit" name="submit">
  </form> -->

  <script>
    function validateForm() {
      /*
          all fields mandatory
          email format
          password alphanumeric(5,8)
          phone number(10) digits
      */
      var validEmail = false;
      var validPassword = false;
      var validPhone = false;
      var email = document.form1.email.value;
      var password = document.form1.password.value;
      var phone = document.form1.phone.value;

      console.log(email, password, phone);

      //Email
      validEmail = validateEmail(email);
      if (validEmail == false) {
        return false;
      }

      //password
      validPassword = validatePassword(password);
      if (validPassword == false) {
        return false;
      }

      //Phone
      validPhone = validatePhone(phone);
      if (validPhone == false) {
        return false;
      }


      if (validEmail == true && validPassword == true && validPhone == true) {
        alert('thank you for your details');
        return true;
      } else {
        alert('There was a problem with your details');
        return false;
      }


    } //end validateForm

    function validatePhone(phone) {
      var exp = /^[0-9]{10}$/;
      var result = exp.test(phone);
      if (phone == "") {
        alert('invalid Phone number');
        document.form1.phone.focus();
        return false;
      }
      if (result == false) {
        alert('invalid Phone number');
        document.form1.phone.focus();
        return false;
      }
      return true;
    }

    function validatePassword(password) {
      var exp = /^[A-Za-z0-9]{5,8}$/;
      var result = exp.test(password);
      if (password == "") {
        alert('invalid password');
        document.form1.password.focus();
        return false;
      }

      if (result == false) {
        alert('invalid password');
        document.form1.password.focus();
        return false;

      }
      return true;
    }

    function validateEmail(email) {
      var expEmail = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/;
      var result = expEmail.test(email);
      if (email == "") {
        alert('not a valid email format');
        document.form1.email.focus();
        return false;
      }
      if (result == false) {
        alert('not a valid email format');
        document.form1.email.focus();
        return false;
      }
      //everything checks out
      return true;



    }
  </script>

  <?php

      //after javascript Validation
      if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $phone = $_POST['phone'];

            echo "sent";
      }

   ?>


</body>

</html>
