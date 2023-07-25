<html>
<head>
    <title>Show Page</title>
</head>
<body>
    <div class="signBtn">
        <button type="submit">SignIn</button>
    </div>
    <div class="signInForm">
        <form  method="post" action="/signIn">
            <input type="text" name="userName" placeholder="username">
            <input type="text" name="Email" placeholder="Email">
            <input type="number" name="phNo" placeholder="phoneNumber">
            <button type="submit">SignIn</button>
        </form>
    </div>
    <div class="logBtn">
        <button type="submit">Login</button>
    </div>
    <div class="logInForm">
        <form method="post" action="/login">
            <input type="text" name="userName" placeholder="username">
            <input type="text" name="Email" placeholder="Email">
            <button type="submit">LogIn</button>
        </form>
    </div>
</body>
</html>
<script>
    const signInBtn = document.querySelector(".signBtn");
    const loginBtn = document.querySelector(".logBtn");
    const signInForm = document.querySelector(".signInForm");
    const loginForm = document.querySelector(".logInForm");

    signInForm.style.display = "none";
    loginForm.style.display = "none";

    signInBtn.addEventListener("click",()=>{
        signInForm.style.display = "block";
    })
    loginBtn.addEventListener("click",()=>{
        loginForm.style.display = "block";
    })
</script>
