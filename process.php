<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get submitted values

    $fullname =
        htmlspecialchars($_POST["fullname"]);

    $dob =
        htmlspecialchars($_POST["dob"]);

    $gender =
        htmlspecialchars($_POST["gender"]);

    $email =
        htmlspecialchars($_POST["email"]);

    $phone =
        htmlspecialchars($_POST["phone"]);

    $address =
        htmlspecialchars($_POST["address"]);

    $qualification =
        htmlspecialchars($_POST["qualification"]);

    $course =
        htmlspecialchars($_POST["course"]);

}
else {

    header("Location: index.php");

    exit();

}

?>


<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Registration Successful</title>

    <link rel="stylesheet"
          href="style.css">


    <style>

        .success-box {

            max-width: 800px;

            margin: 60px auto;

            background: white;

            padding: 40px;

            border-radius: 15px;

            box-shadow:
                0 10px 30px rgba(0,0,0,0.2);

        }


        .success-icon {

            text-align: center;

            font-size: 60px;

            color: #27ae60;

        }


        .success-title {

            text-align: center;

            color: #27ae60;

            margin-bottom: 10px;

        }


        .success-message {

            text-align: center;

            color: #666;

            margin-bottom: 30px;

        }


        .details {

            border: 1px solid #ddd;

            border-radius: 10px;

            overflow: hidden;

        }


        .detail-row {

            display: grid;

            grid-template-columns: 200px 1fr;

            border-bottom: 1px solid #ddd;

        }


        .detail-row:last-child {

            border-bottom: none;

        }


        .detail-label {

            font-weight: bold;

            background: #f5f5f5;

            padding: 15px;

        }


        .detail-value {

            padding: 15px;

        }


        .back-btn {

            display: block;

            width: 230px;

            margin: 30px auto 0;

            padding: 12px;

            text-align: center;

            background: #667eea;

            color: white;

            text-decoration: none;

            border-radius: 7px;

        }


        .back-btn:hover {

            background: #5568d9;

        }


        @media (max-width: 600px) {

            .detail-row {

                grid-template-columns: 1fr;

            }

        }

    </style>

</head>


<body>


<div class="success-box">

    <div class="success-icon">

        ✓

    </div>


    <h1 class="success-title">

        Registration Successful!

    </h1>


    <p class="success-message">

        Your application has been submitted successfully.

    </p>


    <div class="details">


        <div class="detail-row">

            <div class="detail-label">

                Full Name

            </div>

            <div class="detail-value">

                <?php echo $fullname; ?>

            </div>

        </div>


        <div class="detail-row">

            <div class="detail-label">

                Date of Birth

            </div>

            <div class="detail-value">

                <?php echo $dob; ?>

            </div>

        </div>


        <div class="detail-row">

            <div class="detail-label">

                Gender

            </div>

            <div class="detail-value">

                <?php echo $gender; ?>

            </div>

        </div>


        <div class="detail-row">

            <div class="detail-label">

                Email

            </div>

            <div class="detail-value">

                <?php echo $email; ?>

            </div>

        </div>


        <div class="detail-row">

            <div class="detail-label">

                Phone Number

            </div>

            <div class="detail-value">

                <?php echo $phone; ?>

            </div>

        </div>


        <div class="detail-row">

            <div class="detail-label">

                Address

            </div>

            <div class="detail-value">

                <?php echo $address; ?>

            </div>

        </div>


        <div class="detail-row">

            <div class="detail-label">

                Qualification

            </div>

            <div class="detail-value">

                <?php echo $qualification; ?>

            </div>

        </div>


        <div class="detail-row">

            <div class="detail-label">

                Course

            </div>

            <div class="detail-value">

                <?php echo $course; ?>

            </div>

        </div>


    </div>


    <a href="index.php"
       class="back-btn">

        Register Another Applicant

    </a>


</div>


</body>

</html>