<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>English Learning Sign In</title>
  <link rel="stylesheet" href="style.css"/>
</head>
<body>
  <div class="background">
    <div class="login-container">
      <div class="logo"> 
        <div class="dots">
          <div class="dot"></div><div class="dot"></div>
          <div class="dot"></div><div class="dot"></div>
        </div>
        <h2>English <br> Learning</h2>
      </div>
      <h1>Register for an account</h1>
      <p>You need a <a href="#">English Learning account</a> to access our services. If you already have an account you can <a href="/login/index.html">sign in.</a><br> </p>
      
      <form>
        <label for="email">Email address</label>
        <input type="email" id="email" name="email" required />

        <label for="password">Password</label>
        <div class="password-wrapper">
          <input type="password" id="password" name="password" required />
          <button type="button" onclick="togglePassword()">Show</button>
        </div>

        <div class="terms">
            <input type="checkbox" id="agree" required />
            <label for="agree">I am aged 18 or over and agree to the account registration <a href="#">Terms of Use</a>.</label>
          </div>

        <button type="submit" class="signin-btn">Register for an account</button>
        <div class="divider">
            <span>or</span>
          </div>
          
        <p class="goback">If you’re not ready, you can <a href="/login/index.html">go back</a>.</p>
      </form>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
