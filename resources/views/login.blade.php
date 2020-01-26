<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        body{
          background-color: #1cbb9b;
        }

        .login-box {
          position: relative;
          margin: 10% auto;
          width: 500px;
          height: 380px;
          background-color: #fff;
          padding: 10px;
          border-radius: 3px;
          -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
          -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
          box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
        }

        .lb-header{
          position:relative;
          color: #00415d;
          margin: 5px 5px 10px 5px;
          padding-bottom:10px;
          border-bottom: 1px solid #eee;
          text-align:center;
          height:28px;
        }

        .lb-header button{
          margin: 0 25px;
          padding: 0 20px;
          text-decoration: none;
          color: #666;
          font-weight: bold;
          font-size: 15px;
          -webkit-transition: all 0.1s linear;
          -moz-transition: all 0.1s linear;
          transition: all 0.1s linear;
          background: none;
          border: none;
        }

        .lb-header .active{
          color: #029f5b;
          font-size: 18px;
        }

        .social-login{
          position:relative;
          float: left;
          width: 100%;
          height:auto;
          padding: 10px 0 15px 0;
          border-bottom: 1px solid #eee;
        }

        .social-login a{
          position:relative;
          float: left;
          width:calc(40% - 8px);
          text-decoration: none;
          color: #fff;
          border: 1px solid rgba(0,0,0,0.05);
          padding: 12px;
          border-radius: 2px;
          font-size: 12px;
          text-transform: uppercase;
          margin: 0 3%;
          text-align:center;
        }

        .social-login a i{
          position: relative;
          float: left;
          width: 20px;
          top: 2px;
        }

        .social-login a:first-child{
          background-color: #49639F;
        }

        .social-login a:last-child{
          background-color: #DF4A32;
        }

        .email-login,.email-signup{
          position: relative;
          float: left;
          width: 100%;
          height: auto;
          margin-top: 20px;
          text-align: center;
          border-bottom: 1px solid #8e8e8e30;
        }

        .u-form-group{
          width:100%;
          margin-bottom: 10px;
        }

        .u-form-group input[type="email"],
        .u-form-group input[type="password"]{
          width: calc(50% - 22px);
          height:45px;
          outline: none;
          border: 1px solid #ddd;
          padding: 0 10px;
          border-radius: 2px;
          color: #333;
          font-size:0.8rem;
          -webkit-transition:all 0.1s linear;
          -moz-transition:all 0.1s linear;
          transition:all 0.1s linear;
        }

        .u-form-group input:focus{
          border-color: #358efb;
        }
        .u-form-group button{
          width:50%;
          background-color: #1CB94E;
          border: none;
          outline: none;
          color: #fff;
          font-size: 14px;
          font-weight: normal;
          padding: 14px 0;
          border-radius: 2px;
          text-transform: uppercase;
        }

        .forgot-password{
          width:50%;
          text-align: left;
          text-decoration: underline;
          color: #888;
          font-size: 0.75rem;
        }

    </style>
</head>
<body>
    <div class="login-box">
        <div class="lb-header">
          <button class="active" onclick="showContent(this)" id="login-box-link">Login</button>
          <button id="signup-box-link" onclick="showContent(this)">Sign Up</button>
        </div>

        <form class="email-login" id="loginForm">
          <div class="u-form-group">
            <input type="email" placeholder="Email"/>
          </div>
          <div class="u-form-group">
            <input type="password" placeholder="Password"/>
          </div>
          <div class="u-form-group">
            <button>Log in</button>
          </div>
          <div class="u-form-group">
            <a href="#" class="forgot-password">Forgot password?</a>
          </div>
        </form>

        <form class="email-signup" id="signUp" style="display: none;">
          <div class="u-form-group">
            <input type="email" placeholder="Email"/>
          </div>
          <div class="u-form-group">
            <input type="password" placeholder="Password"/>
          </div>
          <div class="u-form-group">
            <input type="password" placeholder="Confirm Password"/>
          </div>
          <div class="u-form-group">
            <button>Sign Up</button>
          </div>
        </form>

        <div class="social-login">
          <a href="#">
            <i class="fa fa-facebook fa-lg"></i>
            Login in with facebook
          </a>
          <a href="#">
            <i class="fa fa-google-plus fa-lg"></i>
            log in with Google
          </a>
        </div>
      </div>
      <script>

        // TODO: Revise Later
        var formDisplay = document.getElementById("signUp");
        var loginDisplay = document.getElementById("loginForm");
        var loginBtn = document.getElementById("login-box-link");
        var formBtn = document.getElementById("signup-box-link");
        function showContent(e) {
          if (e.id == "login-box-link") {
            formDisplay.style.display = "none";
            formBtn.setAttribute("class", "");
            loginBtn.setAttribute("class", "active");
            loginDisplay.style.display = "unset";
          } else {
            formDisplay.style.display = "unset";
            formBtn.setAttribute("class", "active");
            loginBtn.setAttribute("class", "");
            loginDisplay.style.display = "none";
          }
        }
      </script>
</body>
</html>