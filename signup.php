<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Form</title>
     <style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');
    @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

* {
    box-sizing: border-box;
}
body {
    font-family: 'Montserrat', sans-serif;
    background: #f6f5f7;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 95vh;
     margin: 0;
	 
    flex-direction: column;
}
.container{
    display: flex;
    flex-direction:row-reverse;
}
h1 {
    font-weight: bold;
    margin: 0;
}
p {
    font-size: 14px;
    font-weight: 100;
    line-height: 20px;
    letter-spacing: 0.5px;
    margin: 20px 0 30px;
}

span {
    font-size: 12px;
}

a {
    color: #333;
    font-size: 14px;
    text-decoration: none;
    margin: 15px 0;
}

button {
    border-radius: 20px;
    border: 1px solid rgba(53, 94, 252, .95);
    background-color: rgba(53, 94, 252, .95);
    color: #ffffff;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
}

button:active {
    transform: scale(0.95);
}
button:focus {
    outline: none;
}
button.ghost {
    background-color: transparent;
    border-color: #ffffff;
}
form {
    background-color: #ffffff;
    display: flex;
    flex-direction: column;
    padding: 0 50px;
    height: 100%;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.input-field {
    width: 100%;
    margin: 10px 0;
}
.input-field input, .input-field select {
    width: 100%;
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

.social-container {
    margin: 20px 0;
}

.social-container a {
    border: 1px solid #dddddd;
    border-radius: 50%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0 5px;
    height: 40px;
    width: 40px;
}
.container {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 
                0 10px 10px rgba(0, 0, 0, 0.22);
    position: relative;
    overflow: hidden;
    width: 768px;
    max-width: 100%;
    min-height: 480px;
    display: flex;
}

.sign-in-container {
    width: 50%;
    padding: 50px;
}
.overlay-container {
    width: 50%;
    background:rgba(53, 94, 252, .95);
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 50px;
}

.overlay {
    text-align: center;
}
input,select{
    margin: 10px;
    height: 40px;
    width: 250px;
    background-color: rgba(244, 242, 242, 0.352);
    border: none;
    border-radius: 20px;
    padding: 20px;
}

@media (max-width: 768px) {
    .container {
        flex-direction: column;
        width: 100%;
    }
    .sign-in-container, .overlay-container {
        width: 100%;
    }
}
     </style>
</head>
<body>
    
    <div class="container">
        <div class="sign-in-container">
            <form action="signup_con.php" method="POST">
                <h1>Create <br> Account </h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fa fa-google"></i></a>
                    <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
                </div>
                <span>or use your email for registartion</span>
                <input type="text" placeholder="FirstName" name="firstname"/>
                <input type="text" placeholder="LastName" name="lastname"/>
                <input type="email" name="email" placeholder="Email Address"/>
                <input type="tel"  name="number" placeholder="Phone Number" />
                <input type="password" placeholder="Password" name="password"/>
                <input type="password" placeholder=" confirm password" name="con_password1"/>
                <a href="#">Forgot your password?</a>
                <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your details</p>
                <a href="signin.php"><button class="ghost" id="signUp">Sign In</button></a>
            </div>
        </div>
    </div>
</body>
</html>