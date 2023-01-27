


<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  <title>Login Form</title>

<style>
body {
  margin: 0;
  padding: 0;
  background: url(https://korporat.uitm.edu.my/images/about/canseleri.jpg);
  background-size: cover;
  font-family: sans-serif;
}

.loginBox {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 350px;
  height: 420px;
  padding: 70px 40px;
  box-sizing: border-box;
  background: rgba(0, 0, 0, 0.5);
}

.user {
    width: 200px;
    height: 100px;
    overflow: hidden;
    position: absolute;
    top: calc(-100px/2);
    left: calc(50% - 80px);
}

.titlee {
  margin: 0;
  padding: 0 0 26px;
  color: #ff8c00;
  text-align: center;
}

.loginBox p {
  margin: 0;
  padding: 0;
  font-weight: bold;
  color: #fff;
}

.signup {
  margin: 0;
  padding: 0;  
  color: #fff;
}

.loginBox input {
  width: 100%;
  margin-bottom: 20px;
}

.loginBox input[type="text"],
.loginBox input[type="password"] {
  border: none;
  border-bottom: 1px solid #fff;
  background: transparent;
  outline: none;
  height: 40px;
  color: #fff;
  font-size: 16px;
}

::placeholder
{
  color: rgba(255, 255, 255, 0.5);
}

.loginBox input[type="submit"] {
  border: none;
  outline: none;
  height: 40px;
  color: #eee;
  font-size: 16px;
  background-color: #FF8C00;
  cursor: pointer;
  border-radius: 20px;
  margin: 12px 0 18px;
}

.loginBox input[type="submit"]:hover {
  background-color: #ff9719;
  color: #fff;
}

.loginBox a {
  color: #fff;
  font-size: 14px;
  font-weight: bold;
  text-decoration: none;
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >
  <div class="loginBox">    
  <img class="user" src="https://korporat.uitm.edu.my/images/download/2019/LogoUiTM.png">
  <h2 class="titlee">Log In Here</h2>
  <form action="{{ url('login/loginproses') }}" method="post">
    @csrf
    <p>Username</p>
    <input type="text" id="username" name="username" placeholder="Enter Username" value="{{old('username')}}" required>
    <p>Password</p>
    <input type="password" id="password" name="password" placeholder="Enter Password" required>
    {{-- pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" --}}
    <input type="submit" name="sign-in" value="Sign In">
    <label style="signup" class="signup">Don't have an account? <a href="/signup"><font  color="#ff8c00">Sign up</font></a>
      
    </label>
  </form>
  @error('username')         
          <div style="color: #ff0000">
        {{$message}}
      </div>
          @enderror
          @error('password')         
          <div style="color: #ff0000">
        {{$message}}
      </div>
      
          @enderror
</div>
  
  
  
  

</body>

</html>
 
