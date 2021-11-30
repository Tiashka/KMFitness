<!DOCTYPE html>
<html>
<title>KM Fitness</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">


<body>
<?php include("components/header.php");?>

<header class="bgimg-mini w3-display-container w3-grayscale-min" id="home">
        <div class="w3-display-left w3-text-white" style="padding:48px">
            <span class="w3-jumbo w3-hide-small">KM Health and Fitness</span><br>
            <span class="w3-xxlarge w3-hide-large w3-hide-medium">KM Health and Fitness</span><br>
            <span class="w3-large">This form is a means for me to get to know more about you and your fitness goals. Let's get started!</span>
        </div>
</header>


<div class="w3-container" style="margin-top:64px;margin-bottom:64px;" id="about">
<form class="w3-twothird w3-card-4" style="margin-left:15%;margin-right:15%">
  <div class="w3-section formPadding" >      
  <label>What is your specific fitness goal?</label>
    <textarea class="w3-textarea" rows="2" required></textarea>
  </div>
  <div class="w3-section">      
    <input class="w3-input" type="text" required>
    <label>Email</label>
  </div>
  <div class="w3-section">      
    <input class="w3-input" type="text" required>
    <label>Subject</label>
  </div>

  <div class="w3-row">
  <div class="w3-half">
    <input id="milk" class="w3-check" type="checkbox" checked="checked">
    <label>Milk</label>
    <br>
    <input id="sugar" class="w3-check" type="checkbox">
    <label>Sugar</label>
    <br>
    <input id="lemon" class="w3-check" type="checkbox" disabled>
    <label>Lemon (Disabled)</label>
    <br><br>
  </div>

  <div class="w3-half">
    <input id="male" class="w3-radio" type="radio" name="gender" value="male" checked>
    <label>Male</label>
    <br>
    <input id="female" class="w3-radio" type="radio" name="gender" value="female">
    <label>Female</label>
    <br>
    <input id="unknown" class="w3-radio" type="radio" name="gender" value="" disabled>
    <label> Don't know (Disabled)</label>
  </div>
  </div>
</form>
    </div>


<?php include("components/footer.php");?>
    <script src="scripts.js"></script>

</body>

</html>