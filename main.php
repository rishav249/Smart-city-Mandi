
<html >
<head>

  <title>Mandi Login Form</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="login-page">
  <div class="form">
    <form class="register-form" action='register.php' method='post'>
	 <input type="text" id='email' name='email'  placeholder="email address"/>
      <input type="password" id='pwd' name='password' placeholder="enter password"/>
      <input type="password"  name='rpassword' id='pwd' placeholder="re-enter password" />
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" action='logcheck.php' method='post' >
      <input type="text" placeholder="email" name='email' id='email'/>
      <input type="password" placeholder="password" id='pwd' name='password'/>
      <button>login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
