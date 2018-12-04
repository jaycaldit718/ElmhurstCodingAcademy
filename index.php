<?php

if (isset($_POST['submit'])){
    
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='bjaypc88@gmail.com';
    $mail->Password='nbagiiprrgt';
    
    
    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('bjaypc88@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);
    
    $mail->isHTML(true);
    $mail->Subject='Test Email';
    $mail->Body=$_POST['message'];
    
    if (!$mail->send()){
        
        $result = 'Something went wrong';
        
    }
    else {
        $result='Thanks';
        
    }
    
}




?>







<!DOCTYPE html>
<html>

<head>





    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">



    <title>Elmhurst Coding Academy</title>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="style.css">





</head>

<body>



    <div class="container animated bounceInLeft">


        <div class="navigation">


            <ul>

                <li><a href="#about">About Us</a></li>
                <li><a href="#location">Location</a></li>
                <li><a href="#contact">Contact</a></li>

            </ul>



            <div class="hamburger">

                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>

            </div>


        </div>


        <div class="mobile-menu">
            <ul>

                <li><a href="#about">About Us</a></li>
                <li><a href="#location">Location</a></li>
                <li><a href="#contact">Contact</a></li>

            </ul>
        </div>








        <div class="main">

            <h1>Elmhurst Coding Academy: Change your life with code!</h1>

            <i class="fa fa-code fa-4x" aria-hidden="true"></i>
            <button type="submit">LEARN MORE</button>


        </div>



        <div id="about">

            <h2>WHY LEARN TO CODE?</h2>


            <p>Coding has proven to be both an essential and growing part of modern society. However, too many people assume that they do not the fit the mold of a coder! They believe that they are too dumb or not good enough at math to ever consider a career in this lucrative field! The Elmhurst Coding Academy aims to do away with these incorrect beliefs by offering accessible courses that will equip students with job-ready skillsets!</p>




            <p id="courses">At the moment, Elmhurst Coding Academy offers 3 month courses specializing in: </p>
            <ul>
                <li>HTML</li>
                <li>CSS</li>
                <li>JAVASCRIPT</li>
                <li>PHP</li>


            </ul>



        </div>


        <div id="location">

            <h1>Elmhurst Coding Academy is conveniently located on the second floor of the Jason Caldit Worship Building at 86-07 Broadway, next to the Grand Avenue-Newtown train station (accessible by R and M trains)</h1>


        </div>


        <div id="contact">
            <h2>CONTACT US</h2>
            <h3>
                <?php= echo $result;  ?>
            </h3>

            <form action="" method="post">
                <p>

                    <label>Name</label>
                    <input type="text" name="name">

                </p>

                <p>

                    <label>Email</label>
                    <input type="text" name="email">

                </p>
                <p class="full">

                    <label>Phone</label>
                    <input type="number" name="phone">

                </p>
                <p class="full">

                    <label>Message</label>
                    <textarea name="message" rows="5" placeholder="Got a question? Ask away!"></textarea>
                </p>

                <p class="full">

                    <button type="submit" name="submit">SUBMIT</button>


                </p>
            </form>






        </div>


    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="script.js"></script>


</body>

</html>
