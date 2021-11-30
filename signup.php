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


<div class="w3-container formContainer" id="about">
<form class="w3-twothird w3-card-4" style="margin-left:15%;margin-right:15%;background-color:white;margin-top:64px;margin-bottom:64px;" method="post" action="signup.php">
<h2 class="w3-center">Personal Information</h2>
 
<div class="w3-section">      
  <label >Name</label>
    <input class="w3-input" type="text" name="name" required>
  </div>
 
  <div class="w3-section">      
  <label>Email</label>
    <input class="w3-input" type="text" name="email" required>
  </div>

  <div class="w3-row w3-section">

  <div class="w3-half" style="margin-left:10%;">
      <label>What is your fitness goal?</label>
    <br>
        <input id="training" name="training" value="yes" class="w3-check" type="checkbox">
        <label>Training</label>
        <br>
        <input id="Nutrition" name="nutrition" value="yes" class="w3-check" type="checkbox">
        <label>Nutrition</label>
        <br><br>
  </div>
</div>

  <div class="w3-section" >      
  <label>Do you have any specific fitness goal?</label>
    <textarea class="w3-textarea" rows="2" name="specificFitness" ></textarea>
  </div> 

  <div class="w3-section">      
  <label>Do you have any health problems / injuries currently?</label>
    <input class="w3-input" type="text" name="healthIssues">
  </div>


  <div class="w3-row w3-section">
  <div class="w3-half">
  <div style="float:left;margin-left:20%;margin-right:5%;margin-top:2%">
      <label>Current Weight: </label>
</div>
<div style="float:left">
      <input class="w3-input" style="width:40%" type="number" name="currentWeight" >
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
  <label>Do you have any specific outcomes you wish to achieve? (wider shoulders, slimmer waist, improved strength).</label>
    <textarea class="w3-textarea" rows="2" name="specificFitness" ></textarea>
  </div> 


  <h2 class="w3-center">Training</h2>

  <div class="w3-section" >      
  <label>Can i get a brief overview of the equipment you have access to. (weights, gym membership, yoga mat).</label>
    <textarea class="w3-textarea" rows="2" name="equipment" ></textarea>
  </div> 

  <h2 class="w3-center">Nutrition</h2>

<div class="w3-section" >      
<label>Are there any dietary requirements you have?</label>
  <textarea class="w3-textarea" rows="2" name="dietaryReq" ></textarea>
</div> 
  <button type="submit" class="w3-button" name="submit">Submit</button>
  
<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    if (isset($_POST['training'])) {
        $training = "yes";
      } else {
        $training = "no";
      }
      if (isset($_POST['nutrition'])) {
        $nutrition = "yes";
      } else {
        $nutrition = "no";
      }
  
 
    echo "name ",$name, " email ",$email, " training ", $training," nutrition ",$nutrition;
}
?>

</form>
    </div>


<?php include("components/footer.php");?>
    <script src="scripts.js"></script>

</body>

</html>