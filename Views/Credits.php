<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        // You Can Change the Page Title as you like
        $pageTitle = "Our Team";
        // Include the Template
        include '../Shared/Templates/MetaTags.php';
        ?>
    <link rel="stylesheet" href="<?php echo $HomepagePath; ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #004baa;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }
        .container {
            width: 95%;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 80px;
            text-align: center;
        }
        h1 {
            color: #f9fafc;
            font-size: 50px;
            margin-bottom: 40px;
            text-align: center;
        }
        .grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            justify-items: center;
        }
        .item {
            width: 100%;
            padding: 20px;
            display: flex;
            align-items: center;
            position: relative;
        }
        .item img {
            width: 200px;
            margin-left: 200px;
            border-radius: 50%;
            margin-right: 20px;
        }
        .item p {
            margin: 4px 0;
        }
        .description p {
            flex: 1;
            color: #fff;
            text-align: left;
        }
        .item .description h2 {
            font-size: 40px;
            margin-bottom: 20px;
            text-align: left;
        }
        .item .description h3 {
            font-size: 20px;
            margin-bottom: 20px;
            text-align: left;
        }
        .social-icons {
            position: absolute;
            bottom: 10px;
            left: 0;
            right: 0;
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: #002cb6;
            color: #fff;
            border-radius: 50%;
            margin: 0 5px;
            text-align: center;
            line-height: 30px;
            font-size: 20px;
            text-decoration: none;
            padding: 5px;
        }
        .social-icons a:hover {
           background-color: #0056b3;
           transform: scale(1.1);
           transition: 0.3s;
        }
        .scroll-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #007bff;
        color: #fff;
        width: 40px;
        height: 40px;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        z-index: 1000;
        display: none;
        }

        .scroll-to-top i {
         font-size: 20px;
         }

         .scroll-to-top:hover {
           background-color: #0056b3;
         }
    </style>
</head>
<body>
    <!-- Include the navbar -->
    <?php include '../Shared/NavBar/NavBar.php'; ?>
    <!-- لم اقم بربط هذة الصفحة مع باقي الصفح -->
    <div class="container">
        <h1>Our Team</h1>
        <div class="grid">
            <div class="item">
                <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                <div class="description">
                    <h2>Name1</h2>
                    <h3>Track</h3>
                    <p>Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example </p>
                    <div class="social-icons">
                    <a href="#"><i class="fas fa-phone"></i></a>
                    <a href="#"><i class="fas fa-users"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                <div class="description">
                    <h2>Name2</h2>
                    <h3>Track</h3>
                    <p>Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example </p>
                    <div class="social-icons">
                    <a href="#"><i class="fas fa-phone"></i></a>
                    <a href="#"><i class="fas fa-users"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                <div class="description">
                    <h2>Name3</h2>
                    <h3>Track</h3>
                    <p>Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example </p>
                    <div class="social-icons">
                    <a href="#"><i class="fas fa-phone"></i></a>
                    <a href="#"><i class="fas fa-users"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                <div class="description">
                    <h2>Name4</h2>
                    <h3>Track</h3>
                    <p>Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example </p>
                    <div class="social-icons">
                    <a href="#"><i class="fas fa-phone"></i></a>
                    <a href="#"><i class="fas fa-users"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                <div class="description">
                    <h2>Name5</h2>
                    <h3>Track</h3>
                    <p>Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example </p>
                    <div class="social-icons">
                    <a href="#"><i class="fas fa-phone"></i></a>
                    <a href="#"><i class="fas fa-users"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                <div class="description">
                    <h2>Name6</h2>
                    <h3>Track</h3>
                    <p>Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example </p>
                    <div class="social-icons">
                    <a href="#"><i class="fas fa-phone"></i></a>
                    <a href="#"><i class="fas fa-users"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                <div class="description">
                    <h2>Name7</h2>
                    <h3>Track</h3>
                    <p>Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example </p>
                    <div class="social-icons">
                    <a href="#"><i class="fas fa-phone"></i></a>
                    <a href="#"><i class="fas fa-users"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                <div class="description">
                    <h2>Name8</h2>
                    <h3>Track</h3>
                    <p>Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example </p>
                    <div class="social-icons">
                    <a href="#"><i class="fas fa-phone"></i></a>
                    <a href="#"><i class="fas fa-users"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                <div class="description">
                    <h2>Name9</h2>
                    <h3>Track</h3>
                    <p>Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example </p>
                    <div class="social-icons">
                    <a href="#"><i class="fas fa-phone"></i></a>
                    <a href="#"><i class="fas fa-users"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo $user2Path; ?>" alt="Profile Picture">
                <div class="description">
                    <h2>Name10</h2>
                    <h3>Track</h3>
                    <p>Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example Description Example </p>
                    <div class="social-icons">
                    <a href="#"><i class="fas fa-phone"></i></a>
                    <a href="#"><i class="fas fa-users"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" title="Back To Top" class="scroll-to-top"><i class="fas fa-arrow-up"></i></a>
    <script>
     window.addEventListener("scroll", function() {
       if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.querySelector('.scroll-to-top').style.display = "block";
         } else {
           document.querySelector('.scroll-to-top').style.display = "none";
         }
        });

       document.querySelector('.scroll-to-top').addEventListener("click", function() {
            document.body.scrollTop = 0;
           document.documentElement.scrollTop = 0;
        });
    </script>
</body>
</html>