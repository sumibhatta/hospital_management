<?php
session_start();
if(isset($_SESSION['adminemail']) || isset($_SESSION['doctoremail'])) {
    include './views/headerafterlogin.php';
}else{
include './views/header.php'; 
}

?>
<div class="container-top">
    <div class="title">
        <div class="left-block clearfix">
            <h1 class="header-title">
                Welcome to Hospital
            </h1>
            <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia tenetur nobis aspernatur quidem aliquam! Nisi distinctio quos voluptas vero exercitationem inventore quae doloremque architecto similique omnis beatae, esse fuga. Suscipit!
            </p>
            <div class="index-buttons">
               <a href="./views/book_appointment.php"><button class="button-index-one">Book an Appointment</button></a>
               <a href="./views/choose.php"><button class="button-index-one haha">Sign In</button></a>
            </div>
        </div>
        <!-- <div class="right-block clearfix">
            <img src="./img/hospital.jpg" alt="hospital">
        </div> -->
    </div>

    <div class="container-bottom">
        <div class="title-bottom">
            <h1>Our Services:</h1>
        </div>
        <div class="blocks">
            <div class="block block1">
                <h1>
                24 Hours Emergency Services
                </h1>
            </div>
            <div class="block block2">
                <h1>
                Good Equipments
                </h1>
            </div>
            <div class="block block3">
                <h1>
                Best Services
                </h1>
            </div>
        </div>
    </div>
</div>
<!-- write your code here -->
<?php include './views/footer.php'; ?>