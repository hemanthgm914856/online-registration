$(document).ready(function () {

    $("#registrationForm").submit(function (event) {

        let valid = true;

        // Clear previous errors
        $(".error").text("");

        // Get values
        let name = $("#fullname").val().trim();

        let dob = $("#dob").val();

        let email = $("#email").val().trim();

        let phone = $("#phone").val().trim();

        let address = $("#address").val().trim();

        let qualification =
            $("#qualification").val();

        let course =
            $("#course").val();

        let password =
            $("#password").val();

        let gender =
            $("input[name='gender']:checked").val();


        // Name validation

        if (name === "") {

            $("#nameError")
                .text("Please enter your full name.");

            valid = false;

        }


        // Date validation

        if (dob === "") {

            $("#dobError")
                .text("Please select your date of birth.");

            valid = false;

        }


        // Gender validation

        if (!gender) {

            $("#genderError")
                .text("Please select your gender.");

            valid = false;

        }


        // Email validation

        let emailPattern =
            /^[^\s@]+@[^\s@]+\.[^\s@]+$/;


        if (email === "") {

            $("#emailError")
                .text("Please enter your email.");

            valid = false;

        }

        else if (!emailPattern.test(email)) {

            $("#emailError")
                .text("Please enter a valid email.");

            valid = false;

        }


        // Phone validation

        let phonePattern =
            /^[0-9]{10}$/;


        if (phone === "") {

            $("#phoneError")
                .text("Please enter your phone number.");

            valid = false;

        }

        else if (!phonePattern.test(phone)) {

            $("#phoneError")
                .text(
                    "Phone number must contain 10 digits."
                );

            valid = false;

        }


        // Address

        if (address === "") {

            $("#addressError")
                .text("Please enter your address.");

            valid = false;

        }


        // Qualification

        if (qualification === "") {

            $("#qualificationError")
                .text(
                    "Please select your qualification."
                );

            valid = false;

        }


        // Course

        if (course === "") {

            $("#courseError")
                .text(
                    "Please select a course."
                );

            valid = false;

        }


        // Password

        if (password.length < 6) {

            $("#passwordError")
                .text(
                    "Password must contain at least 6 characters."
                );

            valid = false;

        }


        // Terms

        if (!$("#terms").is(":checked")) {

            $("#termsError")
                .text(
                    "Please accept the terms and conditions."
                );

            valid = false;

        }


        // Stop form if validation fails

        if (!valid) {

            event.preventDefault();

        }

    });

});