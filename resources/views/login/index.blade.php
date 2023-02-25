<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="/css/sign-in.css">
</head>
<body>
    <div class="body">
        <div class="containerr">
            <input type="checkbox" id="flip" />
            <div class="cover">
              <div class="front">
                <img src="/assets/book.jpg" alt="" />
                <div class="text">
                  <span class="text-1"
                    >Welcome to<br />
                    My Book</span 
                  >
                  <span class="text-2">please fill in first!</span>
                </div>
              </div>
              <div class="back">
                <img class="backImg" src="/assets/book.jpg" alt="" />
                <div class="text">
                  <span class="text-1"
                    >Complete miles of journey <br />
                    with one step</span
                  >
                  <span class="text-2">Let's get started</span>
                </div>
              </div>
            </div>
            <div class="forms">
              <div class="form-content">
                <div class="login-form">
                  <div class="title">Login</div>
                  <form action="{{route ('auth.action')}}" method="POST">
                    @csrf
                    <div class="input-boxes">
                      <div class="input-box">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Enter your email" required name="email"/>
                      </div>
                      <div class="input-box">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Enter your password" required  name="password"/>
                      </div>
                      <div class="button input-box">
                        <input type="submit" value="Sumbit"/>
                      </div>
                      <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
                    </div>
                  </form>
                </div>
                <div class="signup-form">
                  <div class="title">Signup</div>
                  <form action="/create" method="post">
                    @csrf
                    <div class="input-boxes">
                      <div class="input-box">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Enter your name" id="name" name="name" required />
                      </div>
                      <div class="input-box">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Enter your email" name="email" id="email" required />
                      </div>
                      <div class="input-box">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Enter your password" name="password" id="password" required />
                      </div>
                      <div class="button input-box">
                        <input type="submit" value="Sumbit" onclick="location.href='homeScreen.html'" />
                      </div>
                      <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
    </div>
</body>
</html>
