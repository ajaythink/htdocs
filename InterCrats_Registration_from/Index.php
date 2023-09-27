<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Registration Form</title>
</head>

<body>
    <?php
    include 'Connection.php';
    if (isset($_POST['submit'])) {
        $fname = mysqli_real_escape_string($con, $_POST['fname']);
        $lname = mysqli_real_escape_string($con, $_POST['lname']);
        $college = mysqli_real_escape_string($con, $_POST['college']);
        $gender = mysqli_real_escape_string($con, $_POST['gender']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        $whatsAppNo = mysqli_real_escape_string($con, $_POST['whatsAppNo']);
        $highestEdu = mysqli_real_escape_string($con, $_POST['highestEdu']);
        $currYear = mysqli_real_escape_string($con, $_POST['currYear']);
        $preferred_function = mysqli_real_escape_string($con, $_POST['preferred_function']);
        $aboutUs = mysqli_real_escape_string($con, $_POST['aboutUs']);
        $stuLinkedin = mysqli_real_escape_string($con, $_POST['stuLinkedin']);
        $queries = mysqli_real_escape_string($con, $_POST['queries']);



        $query = "INSERT INTO intern_db (fname,lname,college,gender,email,phone,whatsAppNo,highestEdu,currYear,preferred_function,aboutUs,stuLinkedin,queries) 
        VALUES ('$fname','$lname','$college','$gender','$email','$phone','$whatsAppNo','$highestEdu','$currYear','$preferred_function','$aboutUs','$stuLinkedin','$queries')";

        if (mysqli_query($con, $query)) {
            echo "Data Inserted Successfully";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }

    ?>



    <section class="gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Apply for the Internship - InternCrats</h3>
                            <p>Q. What is this?
                                <br>
                                A. <a href="https://www.interncrats.com" target="_blank">InternCrats</a> is offering
                                a
                                free virtual internship program.</br></br>

                                Q. How would this internship program benefit for me?</br>
                                A. Along from skills for developing a resume and a LinkedIn account, you will gain
                                practical experience and knowledge in the relevant field.</br>
                                </br>
                                Benefits include: </br>
                                - An offer letter from InternCrats</br>
                                - An Internship Certificate</br>
                                - Assistance with building a resume</br>
                                - Placement support.</br></br>

                                Q. What is the duration of the internship?</br>
                                A. The internship will last for 4 weeks.</br></br>

                                Please give some basic information about yourself and your areas of interest. </br>
                                The Internship in InternCrats form is for October 2023.</br>
                                Your details will be used to create your offer letter and completion certificate, so
                                please fill them out carefully.</br>
                                <i>𝐍𝐨𝐭𝐞: 𝐏𝐥𝐞𝐚𝐬𝐞 𝐝𝐨 𝐧𝐨𝐭 𝐬𝐩𝐚𝐦 (𝐚𝐩𝐩𝐥𝐲 𝐦𝐮𝐥𝐭𝐢𝐩𝐥𝐞
                                    𝐭𝐢𝐦𝐞𝐬
                                    𝐟𝐨𝐫 𝐬𝐚𝐦𝐞 𝐝𝐨𝐦𝐚𝐢𝐧), 𝐢𝐧 𝐭𝐡𝐢𝐬 𝐜𝐚𝐬𝐞 𝐲𝐨𝐮𝐫
                                    𝐚𝐩𝐩𝐥𝐢𝐜𝐚𝐭𝐢𝐨𝐧 𝐰𝐢𝐥𝐥 𝐛𝐞 𝐜𝐨𝐧𝐬𝐢𝐝𝐞𝐫 𝐚𝐬
                                    𝐢𝐧𝐯𝐚𝐥𝐢𝐝.</i></br></br>

                            </p>
                            <form action="index.php" method="POST">

                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input name="fname" type="text" id="firstName"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="firstName">First Name</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input name="lname" type="text" id="lastName"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="lastName">Last Name</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 d-flex align-items-center">

                                        <div class="form-outline datepicker w-100">
                                            <input name="college" type="text" class="form-control form-control-lg"
                                                id="College" />
                                            <label for="College" class="form-label">College</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <h6 class="mb-2 pb-1">Gender: </h6>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                                                value="Female" checked />
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="maleGender"
                                                value="Male" />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="otherGender"
                                                value="Other" />
                                            <label class="form-check-label" for="otherGender">Other</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input name="email" type="email" id="emailAddress"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="emailAddress">Email</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input name="phone" type="tel" id="phoneNumber"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="phoneNumber">Phone
                                                Number</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input name="whatsAppNo" type="tel" id="whatsAppNumber"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="whatsAppNumber">WhatsApp
                                                Number</label>
                                        </div>

                                    </div>

                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <input name="highestEdu" type="text" id="highQualification"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="highQualification">Highest
                                                Qualification (<i>Most
                                                    recent
                                                    or currently pursuing
                                                    academic degree like
                                                    B.Tech, B.Sc, BCA, BA,
                                                    M.Sc., MBA, etc.?</i>)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <input name="currYear" type="text" id="currentyear"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="currentyear">Your
                                                course's current year like (<i>1st
                                                    Year, 2nd Year, 3rd
                                                    Year, 4th Year, or
                                                    Other)</i></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">

                                        <select name="preferred_function" class="select form-control-lg">
                                            <option value="1">Choose
                                                option
                                            </option>
                                            <option value="Machine Learning"> Machine Learning</option>
                                            <option value="Java Programming"> Java Programming</option>
                                            <option value="Python Programming"> Python Programming</option>
                                            <option value="Web Development"> Web Development</option>
                                        </select>
                                        <label class="form-label select-label">Preferred
                                            Internship Function
                                        </label>

                                    </div>
                                </div>
                                </br>

                                <div class="row">
                                    <div class="col-12">

                                        <select name="aboutUs" class="select form-control-lg">
                                            <option value="1">Choose option
                                            </option>
                                            <option value="LinkedIn">LinkedIn</option>
                                            <option value="Twitter">Twitter</option>
                                            <option value="Facebook">Facebook</option>
                                            <option value="Instagram">Instagram</option>
                                            <option value="Friends & Colleagues">Friends & Colleagues</option>
                                            <option value="Relatives">Relatives</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <label class="form-label select-label">Where
                                            did you know about InternCrats?
                                        </label>

                                    </div>
                                </div>
                                </br>
                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <input name="stuLinkedin" type="url" id="stuLinkedin"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="stuLinkedin">
                                                Write Your LinkedIn ID.
                                                <i>For the highest priority for
                                                    an internship, follow us on
                                                    Social Media.
                                                    <a href="https://www.linkedin.com/in/interncrats/"
                                                        target="_blank">https://www.linkedin.com/in/interncrats/</a>
                                                    <a href="https://twitter.com/Interncrats/"
                                                        target="_blank">https://twitter.com/Interncrats/</a></i>
                                            </label>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6 mb-4 pb-2">
                                    <div class="form-outline">
                                        <input name="queries" type="text" id="queries"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="queries">Queries(if Any)</i></label>
                                    </div>
                                </div>

                                <div class="mt-4 pt-2">
                                    <input name="submit" class="btn btn-primary btn-lg" type="submit" value="Submit" />
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>