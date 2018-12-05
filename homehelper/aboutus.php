<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
    <meta charset="UTF-8">
    <title>HomeHelper</title>
    </head>
    <style>
    *{
	margin:0px;
	padding:0px;
    }
    .content{
	margin: 60px 100px ;
    }
    .text{
	margin: 30px 0;
	line-height:1.5;
    font-size: 1.4rem;
    font-family: Raleway,"Hiragino Kaku Gothic ProN", Meiryo, sans-serif;
    }
    body {
	background-size: cover;
	color: # 0 0 0;
	text-align: left;
    }
    </style>
    <body>
        <?php
		    require('nav.php');
        ?>
        <h2 class="text" style="font-size: 2 rem; text-align:center">Company Background</h2>
        <blockquote class="text">
            <p class="content">
            Home-helper is a profitable service-oriented B2C company,
            which focus on providing hourly domestic services,
            such as caretaking, houseworking, and venue-cleaning.
            We uphold a value,“Your wish is our command!” In order to
            live up to the standard, after being hired, our employees
            would receive futher train so that they could acquire not merely
            basic requirement but advanced skills.
            <p class="content">
            After further-training, our domestic workers are equipped with
            high-level knowledge which enable them to utilize their adept
            technique to fulfill what you think about your home enviroment.
            That is, customers could make special request and additional orders
            to the workers; then, our company would provide customized service
            through the assistance of our workers who have relative skills. On
            top of that, our staffs has been trained to some extent to take care
            of everything and hence with no doubt, our customers could rely their
            on the hands of the domestic workers and feel at ease with our service.

            <p class="content">
            It is quite convenient for customers to access domestic services from
            our company–– All they need to do is login to our user-friendly website
            and choose which services they feel interested in. After doing so, customers
            could proceed on choosing the helper that they want and complete the payment.
            Then, customers could just sit back and relaxthemselves until the helper arrives
            in the door step after a couple of hours and enjoy the services provision.
        </blockquote>
    </body>

</html>