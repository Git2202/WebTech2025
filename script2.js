$(document).ready(function() {

    // Fade-in animation
    $(".form-container").hide().fadeIn(800);

    // Simple form validation
    $("#regForm").on("submit", function() {
        let name = $("input[name='fullname']").val();
        let email = $("input[name='email']").val();

        if (name.trim() === "" || email.trim() === "") {
            alert("Name and Email are required!");
            return false;
        }
        return true;
    });

});
