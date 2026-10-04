<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Online Registration Form</title>

    <link rel="stylesheet" href="style.css">

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>

    <div class="container">

        <div class="form-box">

            <h1>Online Registration Form</h1>

            <p class="subtitle">
                Fill in the details to complete your registration
            </p>

            <form id="registrationForm"
                  action="process.php"
                  method="POST">

                <!-- Full Name -->
                <div class="form-group">

                    <label for="fullname">Full Name</label>

                    <input type="text"
                           id="fullname"
                           name="fullname"
                           placeholder="Enter your full name">

                    <span class="error" id="nameError"></span>

                </div>


                <!-- Date of Birth and Gender -->
                <div class="form-row">

                    <div class="form-group">

                        <label for="dob">Date of Birth</label>

                        <input type="date"
                               id="dob"
                               name="dob">

                        <span class="error" id="dobError"></span>

                    </div>


                    <div class="form-group">

                        <label>Gender</label>

                        <div class="gender">

                            <label>
                                <input type="radio"
                                       name="gender"
                                       value="Male">
                                Male
                            </label>

                            <label>
                                <input type="radio"
                                       name="gender"
                                       value="Female">
                                Female
                            </label>

                            <label>
                                <input type="radio"
                                       name="gender"
                                       value="Other">
                                Other
                            </label>

                        </div>

                        <span class="error" id="genderError"></span>

                    </div>

                </div>


                <!-- Email and Phone -->
                <div class="form-row">

                    <div class="form-group">

                        <label for="email">Email</label>

                        <input type="email"
                               id="email"
                               name="email"
                               placeholder="example@gmail.com">

                        <span class="error" id="emailError"></span>

                    </div>


                    <div class="form-group">

                        <label for="phone">Phone Number</label>

                        <input type="tel"
                               id="phone"
                               name="phone"
                               placeholder="10-digit mobile number">

                        <span class="error" id="phoneError"></span>

                    </div>

                </div>


                <!-- Address -->
                <div class="form-group">

                    <label for="address">Address</label>

                    <textarea id="address"
                              name="address"
                              placeholder="Enter your complete address"></textarea>

                    <span class="error" id="addressError"></span>

                </div>


                <!-- Qualification and Course -->
                <div class="form-row">

                    <div class="form-group">

                        <label for="qualification">
                            Qualification
                        </label>

                        <select id="qualification"
                                name="qualification">

                            <option value="">
                                Select Qualification
                            </option>

                            <option value="PUC">PUC</option>

                            <option value="Diploma">
                                Diploma
                            </option>

                            <option value="B.E">
                                B.E
                            </option>

                            <option value="B.Tech">
                                B.Tech
                            </option>

                            <option value="B.Sc">
                                B.Sc
                            </option>

                            <option value="Other">
                                Other
                            </option>

                        </select>

                        <span class="error"
                              id="qualificationError">
                        </span>

                    </div>


                    <div class="form-group">

                        <label for="course">
                            Course
                        </label>

                        <select id="course"
                                name="course">

                            <option value="">
                                Select Course
                            </option>

                            <option value="Computer Science and Engineering">
                                Computer Science and Engineering
                            </option>

                            <option value="Information Science">
                                Information Science
                            </option>

                            <option value="Electronics and Communication">
                                Electronics and Communication
                            </option>

                            <option value="Mechanical Engineering">
                                Mechanical Engineering
                            </option>

                            <option value="Civil Engineering">
                                Civil Engineering
                            </option>

                        </select>

                        <span class="error"
                              id="courseError">
                        </span>

                    </div>

                </div>


                <!-- Password -->
                <div class="form-group">

                    <label for="password">
                        Password
                    </label>

                    <input type="password"
                           id="password"
                           name="password"
                           placeholder="Enter password">

                    <span class="error"
                          id="passwordError">
                    </span>

                </div>


                <!-- Terms -->
                <div class="terms">

                    <label>

                        <input type="checkbox"
                               id="terms"
                               name="terms">

                        I agree to the terms and conditions.

                    </label>

                    <span class="error"
                          id="termsError">
                    </span>

                </div>


                <!-- Submit -->
                <button type="submit"
                        class="submit-btn">

                    Register Now

                </button>

            </form>

        </div>

    </div>


    <!-- JavaScript -->
    <script src="script.js"></script>

</body>
</html>