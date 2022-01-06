<?php include './header.php'; ?>

<h1 class="login-h1">
    <center>Login</center>
</h1>

<div class="login-form form">
    <form action="../../hospital_management/model/login.php" method="POST" id="form">
        <label for="email">Enter email</label>
        <input type="text" id="email" name="email" onchange="emailValidate()"><br>
        <p id="emailError"></p>
        <label for="password">Enter password</label>
        <input type="password" id="password" name="password" onchange="passwordValidate()"><br>
        <p id="passwordError"></p>
        <br/>
        <button class="button-index-one haha login-button" type="submit" value="Submit" id="submit" name="loginDoc">Submit</button>
    </form>
</div>
<script>
    const email = document.getElementById('email')
    const password = document.getElementById('password')
    const form = document.getElementById('form')
    const emailError = document.getElementById('emailError')
    const passwordError = document.getElementById('passwordError')
    const emailFormat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/

    form.addEventListener('submit', (e) => {
        let messageEmail =[]
        let messagePassword = []
        if(email.value === '' || email.value == null){
            messageEmail.push('Empty Email Field')
        }
        else if(!email.value.match(emailFormat)){
            messageEmail.push('Invalid Email')
        }
        if(password.value === '' || password.value == null){
            messagePassword.push('Invalid Password')
        }
        if(messageEmail.length > 0 || messagePassword.length > 0){
            e.preventDefault()
            emailError.innerText = messageEmail
            emailError.style.color = "red"
            passwordError.innerText = messagePassword
            passwordError.style.color = "red"
        }
        if(messageEmail.length == 0 && messagePassword.length == 0){
            emailError.innerHTML = 'Valid Email'
            emailError.style.color = "green"
            passwordError.innerHTML = "Valid Password"
            passwordError.style.color = "green"
        }
    })
    function emailValidate(){
        if(email.value === '' || email.value == null){
            emailError.innerHTML = 'Empty Email Field'
            emailError.style.color = "red"
        }
        else if(!email.value.match(emailFormat)){
            emailError.innerHTML = 'Invalid Email'
            emailError.style.color = "red"
        }
        else{
            emailError.innerHTML = 'Valid Email'
            emailError.style.color = "green"
        }
    }
    function passwordValidate(){
        if(password.value === '' || password.value == null || password.value.length <6){
            passwordError.innerHTML = 'Invalid Password'
            passwordError.style.color = "red"
        }
        else{
            passwordError.innerHTML = "Valid Password"
            passwordError.style.color = "green"
        }
    }
</script>


<?php include './footer.php'; ?>