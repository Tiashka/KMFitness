<!DOCTYPE html>
<html>
<title>KM Fitness</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">


<body>
<?php include("components/header.php");?>

<div class="contactContainer"></div>

    <!-- Contact Section -->
    <div class="w3-container w3-center w3-light-grey" style="margin:auto;width:50%;padding:58px 16px" id="contact">
        <h3 class="w3-center">CONTACT</h3>
        <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
        <div style="margin-top:48px">
            <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: 076 340 6124</p>
            <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: kapil.m@kmfitness.co.za</p>
            <br>
            <form action="/action_page.php" target="_blank">
                <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
                <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
                <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
                <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
                <p>
                    <button class="w3-button w3-black" type="submit">
                        <i class="fa fa-paper-plane"></i> SEND MESSAGE
                    </button>
                </p>
            </form>
        
        </div>
    </div>
    <br/>
    <?php include("components/footer.php");?>

    <script src="scripts.js"></script>

</body>

</html>