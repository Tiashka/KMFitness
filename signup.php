<!DOCTYPE html>
<html>
<title>KM Fitness</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>
<link rel="icon" href="images/KMHLogo.png">

<script type="text/javascript">
(function() {
emailjs.init("user_zcFz0TN8FHopcJcF0YoYz");
})();
</script>
<script type="text/javascript">
        window.onload = function() {
            document.getElementById('signupForm').addEventListener('submit', function(event) {
                event.preventDefault();
                // these IDs from the previous steps
                document.getElementById("loader").style.display = "initial";
                emailjs.sendForm('contact_service', 'signup_form', this)
                    .then(function() {
                        document.getElementById('reset').click();
                        document.getElementById("loader").style.display = "none";
                        document.getElementById('submission').innerHTML="Form submitted successfully";

                    }, function(error) {
                        document.getElementById('submission').innerHTML="Unable to submit form, please try again later.";
                    });
            });
        }
    </script>

<body>
<?php include("components/header.php");?>

<header class="bgimg-mini w3-display-container w3-grayscale-min" id="home">
        <div class="w3-display-left w3-text-white" style="padding:48px">
            <span class="w3-jumbo w3-hide-small">Sign Up</span><br>
            <span class="w3-xxlarge w3-hide-large w3-hide-medium">Sign Up</span><br>
            <span class="w3-large">This form is a means for me to get to know more about you and your fitness goals. Let's get started!</span>
        </div>
</header>


<div class=" contactContainer " id="about">
    <div style="margin-top:30px;margin-bottom:30px">
<form class=" w3-card-4" id="signupForm" style="margin:auto;width:90%;padding:1% 5%;background-color:white;" method="post" action="signup.php">
<h2 class="w3-center">Personal Information</h2>
 
<div class="w3-section">      
  <label >Name</label>
    <input class="w3-input" type="text" name="name" placeholder="John Doe" required>
  </div>
 
  <div class="w3-section">      
  <label>Email</label>
    <input class="w3-input" type="text" name="email" placeholder="john.doe@email.com" required>
  </div>

  <div class="w3-row w3-section">

  <div class="w3-half" style="margin-left:10%;">
      <label>What is your fitness goal?</label>
    <br>
        <input id="training" name="training" value="training" class="w3-check" type="checkbox">
        <label>Training</label>
        <br>
        <input id="Nutrition" name="nutrition" value="nutrition" class="w3-check" type="checkbox">
        <label>Nutrition</label>
        <br><br>
  </div>
</div>

  <div class="w3-section">      
  <label>Do you have any health problems / injuries currently?</label>
    <input class="w3-input" type="text" name="healthIssues" placeholder="e.g. diabetes / sprained ankle.">
  </div>


  <div class="w3-row w3-section">
  <div class="w3-half">
  <div style="float:left;margin-left:20%;margin-right:5%;margin-top:2%">
      <label>Current Weight: </label>
</div>
<div style="float:left">
      <input class="w3-input" style="width:40%" type="number" name="currentWeight" required >
</div>

        <br><br>
  </div>

  <div class="w3-half">
  <div style="float:left;margin-left:10%;margin-right:5%;margin-top:2%">
    <label>Goal Weight: </label>
    </div>
    <div style="float:left">
    <input class="w3-input" style="width:40%" type="number" name="goalWeight" >
    </div>

    <br><br>
  </div>
  </div>
  <div class="w3-section" >      
  <label>Do you have any specific outcomes you wish to achieve? </label>
    <textarea class="w3-textarea" rows="2" name="specificOutcomes" placeholder="e.g wider shoulders, slimmer waist, improved strength." ></textarea>
  </div> 


  <h2 class="w3-center">Training</h2>

  <div class="w3-section" >      
  <label>Can i get a brief overview of the equipment you have access to. </label>
    <textarea class="w3-textarea" rows="2" name="equipment" placeholder="e.g. weights, gym membership, yoga mat." ></textarea>
  </div> 

  <h2 class="w3-center">Nutrition</h2>

<div class="w3-section" >      
<label>Are there any dietary requirements you have?</label>
  <textarea class="w3-textarea" rows="2" name="dietaryReq" placeholder="e.g gluten free / lactose intolerant."></textarea>
</div> 
<div style="width: 100%;justify-content:center;display:flex;margin-top:15px;margin-bottom:15px;">
<button type="reset" class="w3-button" value="reset" id="reset" style="float:left;margin-left:-15px;margin-right:15px;s">Clear</button>
  <button type="submit" class="w3-button w3-black" name="submit" style="  display: flex;float:left;justify-content: center;align-items: center;font-size:18px;">Submit</button>
  <img src="images/loading-buffering.gif" id="loader" style="display:none;float:left;height:25px;width:25px;margin-left:15px;margin-top:10px"/>

</div>
<p class="w3-center" id="submission"></p>

</form>
    </div>
    </div>


<?php include("components/footer.php");?>
    <script src="scripts.js"></script>

</body>

</html>