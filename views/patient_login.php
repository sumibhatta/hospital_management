<?php include './header.php'; ?>

<h1 class="login-h1">
    <center>Login</center>
</h1>

<div class="login-form form">
    <form action="../../hospital_management/model/login.php" method="POST" id="form">
    <label for="phone">Enter Phone No.</label>
        <input type="text" id="phone" name="phone" onchange="phoneValidate()"><br>
        <p id="phoneError"></p>
        <label for="password">Enter password</label>
        <input type="password" id="password" name="password" onchange="passwordValidate()"><br>
        <p id="passwordError"></p>
        <br/>
        <button class="button-index-one haha login-button" type="submit" value="Submit" id="submit" name="loginPatient">Submit</button>
    </form>
</div>
<script>
    const phone = document.getElementById('phone')
    const password = document.getElementById('password')
    const form = document.getElementById('form')
    const phoneError = document.getElementById('phoneError')
    const passwordError = document.getElementById('passwordError')

    form.addEventListener('submit', (e) => {
        let messagePhone =[]
        let messagePassword = []
        if(phone.value === '' || phone.value == null){
            messageEmail.push('Empty Phone No. Field')
        }
        else if(phone.value.length !=10){
            messageEmail.push('Invalid Phone No.')
        }
        if(password.value === '' || password.value == null){
            messagePassword.push('Invalid Password')
        }
        if(messagePhone.length > 0 || messagePassword.length > 0){
            e.preventDefault()
            phoneError.innerText = messagePhone
            phoneError.style.color = "red"
            passwordError.innerText = messagePassword
            passwordError.style.color = "red"
        }
        if(messagePhone.length == 0 && messagePassword.length == 0){
            phoneError.innerHTML = 'Valid Phone No.'
            phoneError.style.color = "green"
            passwordError.innerHTML = "Valid Password"
            passwordError.style.color = "green"
        }
    })
    function phoneValidate(){
        if(phone.value === '' || phone.value == null){
            phoneError.innerHTML = 'Empty Phone No. Field'
            phoneError.style.color = "red"
        }
        else if(phone.value.length !=10){
            phoneError.innerHTML = 'Invalid Phone No.'
            phoneError.style.color = "red"
        }
        else{
            phoneError.innerHTML = 'Valid Phone No.'
            phoneError.style.color = "green"
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