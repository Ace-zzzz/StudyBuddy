<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Login</title>
</head>
<body>
</html>
<div class="wrapper">
    <!--<nav class="nav">
        <div class="nav-logo">
            <p>MUNTINLUPA NATIONAL HIGH SCHOOL - MAIN</p> 
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="#" class="link active">HOME</a></li>
                <li><a href="#" class="link">About</a></li>
            </ul>
        </div>
        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="login()">LOGIN</button>
            <button class="btn" id="registerBtn" onclick="register()">PRE-REGISTER</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>
-->
<!----------------------------- Form box ----------------------------------->    
    <div class="form-box">
        
        <!------------------- login form -------------------------->
    <form action="{{ route('AdminLoginConfirm') }}" method = "POST" style = "margin-bottom: 390px;">
    @csrf
    @method('POST')
        <div class="login-container" id="login">
                <div class="top">
                    <header>Login</header>
                </div>
                <div class="input-box">
                    <input type="username" class="input-field" placeholder="Admin" name = "UserName">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" placeholder="Password" name = "Password">
                    <i class="bx bx-lock-alt"></i>
                </div>            
                <div class="input-box">
                    <input type="submit" class="submit" value="Sign In"onclick="navigateToOtherPage()">
                </div>
            </div>
    </form>
<script>
   function myMenuFunction() {
    var i = document.getElementById("navMenu");

    if(i.className === "nav-menu") {
        i.className += " responsive";
    } else {
        i.className = "nav-menu";
    }
   }
 
</script>

<script>

    var a = document.getElementById("loginBtn");
    var b = document.getElementById("registerBtn");
    var x = document.getElementById("login");
    var y = document.getElementById("register");

    function login() {
        x.style.left = "4px";
        y.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;
    }

    function register() {
        x.style.left = "-510px";
        y.style.right = "5px";
        a.className = "btn";
        b.className += " white-btn";
        x.style.opacity = 0;
        y.style.opacity = 1;
    }

    function navigateToOtherPage() {
        window.location.href = "{{route('Students')}}";
    }

</script>

</body>
</html>