
// Driver function
var driver = function(){

    // Gets the button and input-field
    var btn = document.getElementById("hero-search-btn");
    var input_field = document.getElementById("hero-search-field");

    // Runs function when button is clicked
    btn.onclick = function(event){

        event.preventDefault();
        
        let user_input = input_field.value;

        var display = document.getElementById("result");

        var error_msg = "An error has occured";
        var php_result; // Should hold the php list result

        var httpRequest = new XMLHttpRequest();
        var url = "superheroes.php?search=" + user_input;
        
        httpRequest.onreadystatechange = function() {

            if (httpRequest.readyState === XMLHttpRequest.DONE) {

                if (httpRequest.status === 200) {

                    php_result = httpRequest.responseText;
                    console.log(php_result);
                    
                    display.innerHTML = php_result;
                }
                else {
                    alert(error_msg);
                }
            }
        }

        httpRequest.open('GET', url, true);
        httpRequest.send();
    }
}

// Runs this function on startup
window.onload = driver;
