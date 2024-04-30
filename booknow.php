<?php
    if (isset($_POST["submitBtn"])) {
        $fname = $_POST["firstname"];
        $lname = $_POST["lastname"];
        $uphone = $_POST["uphone"];
        $hall_name = $_POST["hallName"];
        $event = $_POST["event"];
        $mdate = $_POST["mdate"];
        $mtiming = $_POST["timing"];
        $pQtn = $_POST["peopleQtn"];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "registration";
        $con = mysqli_connect($servername, $username, $password, $dbname);
        $sql = "INSERT INTO `costumer`(`firstname`, `lastname`, `phoneno`, `venue`, `event`, `date`, `time`, `quantity`) VALUES ('$fname','$lname','$uphone','$hall_name', '$event', '$mdate','$mtiming','$pQtn')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            header("Location: regcomplete.html");
        }

    }    
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Book Now</title>
        <link rel="stylesheet" href="booknow.css" type="text/css"> 
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper">

            <!-- nav bar -->
                    
            <div class="nav">
                <div class="logo">
                    <img src="img/logo.PNG" alt="website-logo">
                </div>
                <div class="links">
                    <a href="index.html" class="mainlink">Home</a>
                    <a href="venue.html" target="_blank">Venue</a>
                    <a href="about.html" target="_blank">About</a>
                    <a href="contact.html" target="_blank">Contact</a>
                </div>
            </div>

            <!-- Main Content -->

            <div class="landing">
                <div class="landingtext" data-aos="fade-up" data-aos-duration="1000">
                    <h1>Enter your details</h1>
                    <h3>Fill your details carefully, <br> your booking depend upon your given information.</h3>
                </div>
                <div class="landingimage" data-aos="fade-left" data-aos-duration="2000">
                    <img src="img/booknow.png" alt="Main image">
                </div>
            </div>

            <!-- form Registration -->

            <div class="data"  data-aos="fade-up" data-aos-duration="1500">
                <form action="regcomplete.html" target="_blank" method="post">
                    <h1>Your Registration</h1>
                    <br>
                    <div class="information">
                        <div class="field">
                            <label for="name">First Name:</label>
                            <input type="text" name="firstname" id="name" placeholder="Enter your first name" required>
                        </div>
                        <br>
                        <div class="field">
                            <label for="name">Last Name:</label>
                            <input type="text" name="lastname" id="name" placeholder="Enter your last name" required>
                        </div>
                        <br>
                        <div class="field">
                            <label for="text">Phone No:</label>
                            <input type="text" name="uphone" id="uphone" placeholder="Enter your phone number" required>
                        </div>
                        <br>
                        <div class="field">
                            <label for="hallName">Venue:</label>
                            <select name="hallName" required>
                                <option value="Al-Abbas Marriage Hall">Al-Abbas Marriage Hall</option>
                                <option value="Mehran Shaadi Hall">Mehran Shaadi Hall</option>
                                <option value="Gulshan-e-Naeem Marriage Hall">Gulshan-e-Naeem Marriage Hall</option>
                                <option value="Creek Marriage Hall">Creek Marriage Hall</option>
                                <option value="Laarh Marriage Hall">Laarh Marriage Hall</option>
                                <option value="Indus Marriage Hall">Indus Marriage Hall</option>
                            </select>
                        </div>
                        <br>
                        <div class="field">
                            <label for="event">Event:</label>
                            <select name="event" required>
                                <option value="Nikkah Ceremony">Nikkah Ceremony</option>
                                <option value="Walima Ceremony">Walima Ceremony</option>
                                <option value="Hina Function">Hina Function</option>
                                <option value="Engagement Ceremony">Engagement Ceremony</option>
                                <option value="Dinner">Dinner</option>
                                <option value="Party Celebration">Party Celebration</option>
                            </select>
                        </div>
                        <br>
                        <div class="field">
                            <label for="date">Date:</label>
                            <input type="date" name="mdate" id="mdate" required>
                        </div>
                        <br>
                        <div class="field">
                            <label for="timing">Time:</label>
                            <select name="timing" required>
                                <option value="10:00 AM">10:00 AM</option>
                                <option value="12:00 PM">12:00 PM</option>
                                <option value="02:00 PM">02:00 PM</option>
                                <option value="06:00 PM">06:00 PM</option>
                                <option value="08:00 PM">08:00 PM</option>
                                <option value="10:00 PM">10:00 PM</option>
                            </select>
                        </div>
                        <br>
                        <div class="field">
                            <label for="peopleQtn">Quantity:</label>
                            <select name="peopleQtn" required>
                                <option value="100 Persons">100 Persons</option>
                                <option value="200 Persons">200 Persons</option>
                                <option value="300 Persons">300 Persons</option>
                                <option value="400 Persons">400 Persons</option>
                                <option value="500 Persons">500 Persons</option>
                                <option value="1000 Persons">1000 Persons</option>
                                <option value="1000+ Persons">1000+ Persons</option>
                            </select>
                        </div>
                        <br>
                        <button type="submit" name="submitBtn">Submit</button>
                    </div>
                </form>
            </div>

            <!-- Footer Section -->

            <div class="footer">
                <div class="footertext" data-aos="fade-up" data-aos-duration="1000">
                    <h1>MZ Events <br>
                        <span class="footerinnertext">
                            Thanks for choosing MZ Events Service to book your events.
                        </span>
                    </h1>
                </div>
                <div class="footerlinks" data-aos="fade-left" data-aos-duration="1600">
                    <a href="venue.html" target="_blank">Venue</a>
                    <p>All type of events are waiting for you.</p>
                    <a href="#">Help</a>
                    <p>Visit the help section by click on HELP</p>
                    <a href="about.html" target="_blank">About</a>
                    <p>Visit the about section by click on ABOUT</p>
                    <a href="contact.html" target="_blank">Contact</a>
                    <p> Call us on: +92332-2413386 <br>
                    Email: engrzubairkhatti@gmail.com</p>
                </div>
            </div>            

        </div>
        
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>