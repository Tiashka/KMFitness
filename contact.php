<!DOCTYPE html>
<html>
<title>KM Fitness</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
<script src="https://smtpjs.com/v3/smtp.js"></script>  
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>
<script type="text/javascript">
(function() {
emailjs.init("user_zcFz0TN8FHopcJcF0YoYz");
})();
</script>
<script type="text/javascript">
        window.onload = function() {
            document.getElementById('contact-form').addEventListener('submit', function(event) {
                event.preventDefault();
                // these IDs from the previous steps
                emailjs.sendForm('contact_service', 'contact_form', this)
                    .then(function() {
                        console.log('SUCCESS!');
                        document.getElementById('submission').innerHTML="Message sent successfully";
                        document.getElementById('reset').click();

                    }, function(error) {
                        document.getElementById('submission').innerHTML="Unable to submit message, please try again later.";
                    });
            });
        }
    </script>

<body>
<?php include("components/header.php");?>

<header class="bgimg-mini w3-display-container w3-grayscale-min" id="home">
        <div class="w3-display-left w3-text-white" style="padding:48px">
            <span class="w3-jumbo w3-hide-small">Contact Us</span><br>
            <span class="w3-xxlarge w3-hide-large w3-hide-medium">Contact Us</span><br>
            <span class="w3-large">Lets get in touch!</span>
        </div>
</header>
<br>
    <!-- Contact Section -->
    <div class="contactContainer">
    <div class="w3-container w3-center" style="margin:auto;width:85%;padding:5% 2%;background-color:white;" id="contact">
        <h3 class="w3-center">CONTACT</h3>
        <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
        <div style="margin-top:48px">
            <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: 076 340 6124</p>
            <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: kapil.m@kmfitness.co.za</p>
            <br>
            <!-- <form action="/action_page.php" target="_blank"> -->
            <form method="post" id="contact-form">
            <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="user_name"></p>
                <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="user_email"></p>
                <p><input class="w3-input w3-border" type="text" placeholder="Contact Number" required name="contact_number"></p>
                <!-- <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p> -->
                <p><textarea class="w3-input w3-border" placeholder="Message" required name="message"></textarea></p>
                <p>
                <input type="reset" style="display:none" value="reset" id="reset">
                <!-- <button class="w3-button w3-black" onclick="sendEmail()" type="submit"> -->
                <button class="w3-button w3-black" type="submit">
                        <i class="fa fa-paper-plane"></i> SEND MESSAGE
                    </button>
                </p>
                <p id="submission"></p>
            </form>
        
        </div>
    </div>
    </div>
    <br/>
    <?php include("components/footer.php");?>

    <script src="scripts.js"></script>

</body>

</html>