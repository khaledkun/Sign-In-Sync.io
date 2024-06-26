<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        // You Can Change the Page Title as you like
        $pageTitle = "NavBar";
        // Include the Template
        include '../Shared/Templates/MetaTags.php';  
        ?>
<link rel="stylesheet" href="<?php echo $NavBarPath; ?>">
<script type="text/javascript" src="<?php echo $HomeLayout; ?>"></script>
<script type="text/javascript" src="<?php echo $ScrollUp; ?>"></script>
</head>
<body>
    <nav>
        <div class="nav__content">
            <div class="LogoWithText">
            <img src="<?php echo $navBarLogoPath; ?>" alt="WebSiteLogo" class="NavBarLogo" id="Home"/>
            <div class="logo">
                <a id="#Home">Sign In Sync</a>
            </div>
            </div>
            <label for="check" class="checkbox"><i class="ri-menu-line"></i></label>
            <input type="checkbox" name="check" id="check">
            <ul>
            <li><a href="<?php echo basename($_SERVER['SCRIPT_NAME']) == "HomePage.php" ? 'HomePage.php#Main' : 'HomePage.php'; ?>" <?php echo basename($_SERVER['SCRIPT_NAME']) == "HomePage.php" ? 'class="active"' : ''; ?>>Home</a></li>
                <li><a href="HomePage.php#Services">Services</a></li>
                <li><a href="HomePage.php#About">About Us</a></li>
                <li><a href="HomePage.php#Contact">Contact Us</a></li>
                <div class="action__btns">
                    <a href="/Views/BuyNow.php"><button class="Signup">Start a Free Trial</button></a>
                    <a href="/Views/BuyNow.php"><button class="Signin">Buy Now</button></a>
                </div>
            </ul>
        </div>
    </nav>
    <footer>
        <div class="footer__content">
            <div class="social-media">
                <a href="https://www.facebook.com/profile.php?id=61558129328727" title="Facebook Page" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/signinsyncsis/" title="Instagram Page" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/@SigninsyncSIS" title="YouTube" target="_blank"><i class="fab fa-youtube"></i></i></a>
                <a href="https://twitter.com/signinsync_SIS" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></i></a>
                <a href="#" title="TikTok"><i class="fab fa-tiktok" target="_blank"></i></i></a>
                <a href="mailto:signinsyncsis@gmail.com" title="Email" target="_blank"><i class="ri-mail-fill"></i></a>
                <a href="Credits.php" title="Credits"><i class="ri-team-fill"></i></a>
                
            </div>
            <p>&copy; 2024 Sign In Sync. All rights reserved.</p>
        </div>
    </footer>
    <a href="#" title="Back To Top" class="scroll-to-top"><i class="fas fa-arrow-up"></i></a>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/661c8c731ec1082f04e2412a/1hrfo996a';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>