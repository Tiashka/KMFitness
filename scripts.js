// Modal Image Gallery
function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    var captionText = document.getElementById("caption");
    captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}

function sendEmail() {
    Email.send({
        Host: "smtp.gmail.com",
        Username: "admin@kmfitness.co.za",
        Password: "KapilM2201!",
        To: 'kapil.m@kmfitness.co.za',
        From: "mail.kmfitness.co.za",
        Subject: "test",
        Body: "<email body>",
    }).then(
        message => alert("mail sent successfully")
    );
}