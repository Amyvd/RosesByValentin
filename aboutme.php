<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- style documents -->
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/menuoverlay.css">

    <script src="javascript files/mobilenav.js"></script>
</head>
<body>
<div class="container">
        <div class="navigationbar">
            <div class="logo">
                <h2>Roses By Valentin</h2>
            </div>
            <div class="searchbalk">
            </div>
            <div class="hamburger">
                <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776; <Menu></Menu></span>
            </div>
            
            <div id="myNav"class="overlay">
        
                <!-- Overlay Content -->
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <a href="#">Home</a>
                    <a href="#">About us</a>
                    <a href="#">Webshop</a>
                    <a href="#">Contact</a>
                </div>
            </div>
        </div>
        <!-- Header / Wrapper -->
        <div class="wrapper">
            <img src="afbeeldingen/roos.jpg" alt="">
            <!--Wrapper Tekst -->
            <div class="wrapper-content">
                <h1 class="wrappercontentText">Roses By Valentin</h1>
                <a href="#featuredRoses"class="wrapperButton">Scroll Down</a>
            </div>
        </div>
    </div>
<footer>
        <div class="footerGrid">
            <div class="footerGridOne">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2047.4612622413852!2d4.855316759410424!3d52.391169770175104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5e2884124ea7f%3A0xf2fdbed6bb7875cf!2sContactweg%2036%2C%201014%20AN%20Amsterdam!5e0!3m2!1snl!2snl!4v1653920957576!5m2!1snl!2snl" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="googleMaps"></iframe>
         
            </div>
            <div class="footerGridTwo">
                <h3>Navigate to:</h3> 
                <br>
                <a href="index.php">Home</a><br>
                <a href="aboutme.php">About me</a><br>
                <a href="#">Webshop</a><br>
                <a href="#">Contact</a><br>
            </div>
            <div class="footerGridThree">
                <div class="nieuwsbriefsectionFooter">
                    <h3>NieuwsBrief</h3>
                    <p>Wil je lid worden van nieuwsbrief. 
                    Meld je dan aan met je Email Adress</p>
                    <input type="email" name="emailadress" id="" placeholder="email" >
                    <button type="submit" class="footersubmitButton">submit</button>
                </div>
                <div class="socialIcons">
                    <a href=""><img src="afbeeldingen/email.png" alt="" class="emailIcn"></a>
                <a href=""><img src="afbeeldingen/phone-call.png" alt="" class="phoneIcn"></a> 
                    <a href="https://www.facebook.com/ROSESBYVALENTIN"><img src="afbeeldingen/facebook.png" alt="" class="facebookIcn"></a>
                    <a href="https://www.instagram.com/rosesbyvalentin/"><img src="afbeeldingen/instagram.png" alt="" class="instagramIcn"></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>