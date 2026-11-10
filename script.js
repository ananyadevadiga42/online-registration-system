
$(document).ready(function() {

    $("#registrationForm").on("submit", function(event) {

        let name = $("input[name='fullname']").val().trim();
        let phone = $("input[name='phone']").val().trim();

        if (name.length < 3) {
            alert("Please enter a valid full name.");
            event.preventDefault();
            return;
        }

        if (!/^[0-9]{10}$/.test(phone)) {
            alert("Please enter a valid 10-digit phone number.");
            event.preventDefault();
            return;
        }

        alert("Your application is being submitted!");

    });

});
