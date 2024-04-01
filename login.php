<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buzz Login</title>
    <link rel="stylesheet" href="css1.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <div class="center">
        <div class="header">
          <h1>Buzz</h1>
        </div>
        <form id="login-form" action="login_1.php" method="post">
        <div class="inputElement">
          <input type="text" placeholder="Username" name="username" class="inputText" />
          <input type="password" placeholder="Password" name="password" class="inputText" />
          <input type="submit" value="submit" name="submit" class="inputButton" />
        </form>
          <div class="line">
            <span class="arrow"></span>
            <span class="content">OR</span>
            <span class="arrow"></span>
          </div>
          <div class="social__icon">
            <i class="fab fa-facebook-square"></i
            ><span>Log in with facebook</span>
          </div>
          <div class="forgetPassword">Forget Password?</div>
        </div>
      </div>
      <div class="footer">
        <p>Don't have a accout?<a href="index.php">Sign Up</a></p>
      </div>
    </div>
  </body>
</html>
