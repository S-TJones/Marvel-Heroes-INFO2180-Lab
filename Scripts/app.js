
// Driver function
var driver = function(){

    // Gets the button
    var btn = document.getElementById("search");

    // Runs function when button is clicked
    btn.onclick = function(){
        // Alerts
        alert("Hello! I am an alert box!!");

        // Ajax call/ Ajax request
        $.ajax({
            url: "./superheroes.php",
            type: "GET",
            dataType: "html",
            success: function (data) {
                // Not sure what should go here
                // $('#container').html(data);
            }
        });
    }
};

// Runs this function on startup
window.onload = driver;
