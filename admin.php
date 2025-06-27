<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}
?>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'room_db') or die('connection failed');

if(isset($_POST['book_room'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
   $rooms = $_POST['rooms'];
   $bookingDate = $_POST['booking_date'];

   $insertRoomBooking = mysqli_query($conn, "INSERT INTO `room_booking` (name, email, number,rooms, booking_date) VALUES ('$name','$email','$number','$rooms', '$bookingDate')") or die('query failed');

   if($insertRoomBooking){
      $roomBookingMessage[] = 'Room booking request submitted successfully!';
   }else{
      $roomBookingMessage[] = 'Room booking request failed';
   }
}
?>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'em_leave') or die('Connection failed');


if (isset($_POST['emergency_leave'])) {
    $doctorName = mysqli_real_escape_string($conn, $_POST['doctor_name']);
    $leaveDate = mysqli_real_escape_string($conn, $_POST['leave_date']);
    $reason = mysqli_real_escape_string($conn, $_POST['reason']);

    $insertLeaveRequest = mysqli_query($conn, "INSERT INTO `emergency_leave` (doctor_name, leave_date, reason) VALUES ('$doctorName','$leaveDate','$reason')") or die('Query failed');

    if ($insertLeaveRequest) {
        $leaveRequestMessage[] = 'Emergency leave request submitted successfully!';
    } else {
        $leaveRequestMessage[] = 'Emergency leave request failed';
    }
}
?>
<!-- process_add_doctor.php -->

<!-- Handle Doctor Addition Request in process_add_doctor.php -->

<?php

$conn = mysqli_connect('localhost', 'root', '', 'doc_add') or die('connection failed');

if (isset($_POST['add_doctor'])) {

    $doctor_name = mysqli_real_escape_string($conn, $_POST['doctor_name']);
    $specialization = mysqli_real_escape_string($conn, $_POST['specialization']);
    $availability = mysqli_real_escape_string($conn, $_POST['availability']);
    $education = mysqli_real_escape_string($conn, $_POST['education']);

    $insert = mysqli_query($conn, "INSERT INTO `doctors` (doctor_name, specialization, availability, education) 
                                    VALUES ('$doctor_name', '$specialization', '$availability', '$education')") or die('query failed');

    if ($insert) {
        $addDoctorMessage[] = 'Doctor added successfully!';
    } else {
        $addDoctorMessage[] = 'Failed to add doctor';
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive hospital website create by win coder</title>
    <style>
        /* Add your custom styles for the fancy admin button here */
        .admin-button-section {
            display: flex;
            align-items: center;
            padding: 20px;
            background-color: #ecf0f1; /* Light gray background color */
        }

        .admin-button img {
            margin-right: 15px;
            max-width: 50px; /* Adjust the max-width as needed */
            border-radius: 50%; /* Optional: Rounded corners for the image */
        }

        .admin-button {
            padding: 15px 30px;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            background-color: #3498db; /* Blue color, you can change it */
            color: white;
            border: 2px solid #2980b9;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .admin-button:hover {
            background-color: #2980b9; /* Darker blue color on hover */
        }
    </style>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>Health</strong>+ </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#services">services</a>
        <a href="#doctors">doctors</a>
        <a href="#appointment">appointment</a>
        <a href="#room">room booking</a>
        <a href="#leave">Leave</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="image/receptionist.png" alt="">
    </div>

    <div class="content">
        <h3>welcome to Health+ Bangladesh</h3>
        <p> A person who has good physical health is likely to have bodily functions and processes working at their peak.</p>
        <a href="#appointment" class="btn"> Welcome to admin dashboard <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<!-- Admin panel content -->



    <!-- Add your existing admin panel content here -->


<!-- icons section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="image/doctor.png" alt="">
        </div>

        <div class="content">
    <h3>Experience Top-Quality Healthcare Services at Health+</h3>
    <p>At Health+, we are dedicated to providing you with the best quality healthcare services in Bangladesh. Our team of skilled professionals is committed to your well-being, ensuring that you receive personalized and compassionate care.</p>
    <p>Discover a range of advanced medical treatments and services tailored to meet your unique needs. Your health is our priority, and we strive to deliver excellence in every aspect of your medical journey.</p>
   
</div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>Free Checkups</h3>
            <a href="#" class="btn"> Call on Hoteline <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 Ambulance</h3>
            <a href="#" class="btn"> Call on Hotline <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>Expert Doctors</h3>
            <a href="#" class="btn"> Call on Hotline <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>Medicines</h3>
            <a href="#" class="btn"> Call on Hotline <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>Bed facility</h3>
            <a href="#" class="btn"> Call on Hotline <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>Test</h3>
            <a href="#" class="btn"> Call on Hotline <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- services section ends -->



<!-- doctors section starts  -->

<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">

        <div class="doctor-profile">
            <img src="image/doc-2.jpg" alt="Doctor 1">
            <h2>Dr. Abdullah Rahman</h2>
            <p>Availability: Monday, Wednesday, Friday - 9:00 AM to 12:00 PM</p>
            <p class="education">Education: MBBS, FCPS (Medicine), Dhaka Medical College</p>
        </div>

        <div class="doctor-profile">
            <img src="image/doc-7.jpg" alt="Doctor 2">
            <h2>Dr. Mahira Khan</h2>
            <p>Availability: Tuesday, Thursday - 2:00 PM to 5:00 PM</p>
            <p class="education">Education: MBBS, FCPS (Pediatrics), Bangabandhu Sheikh Mujib Medical University</p>
        </div>

        <div class="doctor-profile">
            <img src="image/doc-5.jpg" alt="Doctor 3">
            <h2>Dr. Arif Hasan</h2>
            <p>Availability: Monday, Wednesday - 10:00 AM to 1:00 PM</p>
            <p class="education">Education: MBBS, MD (Cardiology), Chittagong Medical College</p>
        </div>

        <div class="doctor-profile">
            <img src="image/doc-8.jpg" alt="Doctor 4">
            <h2>Dr. Saifullah Khan</h2>
            <p>Availability: Tuesday, Thursday, Friday - 3:00 PM to 6:00 PM</p>
            <p class="education">Education: MBBS, FCPS (Orthopedics), Rajshahi Medical College</p>
        </div>

        <div class="doctor-profile">
            <img src="image/doc-3.jpg" alt="Doctor 5">
            <h2>Dr. Farida Akhtar</h2>
            <p>Availability: Monday, Wednesday - 2:00 PM to 5:00 PM</p>
            <p class="education">Education: MBBS, MS (Obstetrics and Gynecology), Sylhet MAG Osmani Medical College</p>
        </div>

        <div class="doctor-profile">
            <img src="image/doc-6.jpg" alt="Doctor 6">
            <h2>Dr. Aminul Haque</h2>
            <p>Availability: Tuesday, Thursday - 9:00 AM to 12:00 PM</p>
            <p class="education">Education: MBBS, MD (Dermatology), Khulna Medical College</p>
        </div>

        <div class="doctor-profile">
            <img src="image/doc-4.jpg" alt="Doctor 7">
            <h2>Dr. Nusrat Khan</h2>
            <p>Availability: Monday, Wednesday, Friday - 3:00 PM to 6:00 PM</p>
            <p class="education">Education: MBBS, FCPS (Ophthalmology), Barishal Medical College</p>
        </div>

        <div class="doctor-profile">
            <img src="image/doc-9.jpg" alt="Doctor 8">
            <h2>Dr. Imran Ahmed</h2>
            <p>Availability: Tuesday, Thursday - 1:00 PM to 4:00 PM</p>
            <p class="education">Education: MBBS, MS (Neurosurgery), Rangpur Medical College</p>
        </div>

        <div class="doctor-profile">
            <img src="image/doc-1.jpg" alt="Doctor 9">
            <h2>Dr. Shabnam Akter</h2>
            <p>Availability: Monday, Wednesday - 11:00 AM to 2:00 PM</p>
            <p class="education">Education: MBBS, FCPS (Psychiatry), Comilla Medical College</p>
        </div>

        <div class="doctor-profile">
            <img src="image/doc-6.jpg" alt="Doctor 10">
            <h2>Dr. Kamal Hossain</h2>
            <p>Availability: Tuesday, Thursday, Friday - 10:00 AM to 1:00 PM</p>
            <p class="education">Education: MBBS, MD (Rheumatology), Mymensingh Medical College</p>
        </div>
        <div class="doctor-profile">
            <img src="image/doc-2.jpg" alt="Doctor 1">
            <h2>Dr. Abdullah Rahman</h2>
            <p>Availability: Monday, Wednesday, Friday - 9:00 AM to 12:00 PM</p>
            <p class="education">Education: MBBS, FCPS (Medicine), Dhaka Medical College</p>
        </div>

        <div class="doctor-profile">
            <img src="image/doc-7.jpg" alt="Doctor 2">
            <h2>Dr. Mahira Khan</h2>
            <p>Availability: Tuesday, Thursday - 2:00 PM to 5:00 PM</p>
            <p class="education">Education: MBBS, FCPS (Pediatrics), Bangabandhu Sheikh Mujib Medical University</p>
        </div>

    </div>

</section>


<!-- doctors section ends -->

<section class="admin-button-section">
<div class="row">
        <div class="image">
        <img src="image/images.png" alt="Admin Icon">
        </div>
        <a href="http://localhost/phpmyadmin/index.php" class="admin-button">Database Visit</a>
    </div>
    </section>
<!-- appointmenting section starts   -->

<!-- Add Doctor's Emergency Leave Section -->

<!-- Add Doctor Section -->

<section class="appointment" id="appointment">

    <h1 class="heading"> <span>appointment</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="image/appointment-img.svg" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
              
            }
            }
        ?>
      
            <h3>make appointment</h3>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit" value="appointment now" class="btn">
        </form>

    </div>

</section>

<section class="appointment" id="add-doctor">

    <h1 class="heading"> <span>Add </span> Doctor</h1>    

    <div class="row">

        <div class="image">
            <img src="image/emergency-male-doctor-running-help-with-medicines-hospital-scene-professional-with-stethoscope-briefcase_61747-233.avif" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($addDoctorMessage)) {
                foreach($addDoctorMessage as $message) {
            ?>
                    <p class="success-message"><?php echo $message; ?></p>
            <?php
                }
            }
        ?>
      
            <h3>Add a new doctor</h3>
            <input type="text" name="doctor_name" placeholder="Doctor's Name" class="box">
            <input type="text" name="specialization" placeholder="Specialization" class="box">
            <input type="text" name="availability" placeholder="Availability" class="box">
            <input type="text" name="education" placeholder="Education" class="box">
            <input type="submit" name="add_doctor" value="Add Doctor" class="btn">
        </form>

    </div>

</section>

</section>


<!-- appointmenting section ends -->

<section class="appointment" id="room">
    <div class="row">
    <div class="image">
            <img src="image/poster-design-coronavirus-theme-with-old-woman-sick-bed_1308-42027.avif" alt="">
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <?php
            if(isset($roomBookingMessage)) {
                foreach($roomBookingMessage as $message) {
            ?>
                    <p><?php echo $message; ?></p>
            <?php
                }
            }
            ?>
            <h3>Patient's Room Booking</h3>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <label for="rooms">Number of rooms:</label>
            <input type="number" id="rooms" name="rooms" min="1" class="box">
            <label for="date">Choose a date:</label>
            <input type="date" id="date" name="booking_date" class="box">
            <input type="submit" name="book_room" value="Submit" class="btn">
        </form>
    </div>
</section>

<section class="appointment" id="leave">
    <div class="row">
    <div class="image">
    <img src="image/doctor-man-with-stethoscope-medical_251661-60.avif" alt="">
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <?php
            if(isset($leaveRequestMessage)) {
                foreach($leaveRequestMessage as $message) {
            ?>
                    <p><?php echo $message; ?></p>
            <?php
                }
            }
            ?>
            <h3>Doctor's Emergency Leave Application</h3>
            <input type="text" name="doctor_name" placeholder="Your name" class="box">
            <input type="date" name="leave_date" class="box">
            <textarea name="reason" placeholder="Reason for leave" class="box"></textarea>
            <input type="submit" name="emergency_leave" value="Submit" class="btn">
        </form>
    </div>
</section>

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a>
            
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
        </div>

        <div class="box">
            <h3>appointment info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +8801773643533 </a>
            <a href="#"> <i class="fas fa-phone"></i> +8801758788989 </a>
            <a href="#"> <i class="fas fa-envelope"></i> healthplus@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> ithealthpls@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Dhaka, bangladesh </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-faceappointment-f"></i> faceappointment </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> Health+ <span>2023</span> | all rights reserved </div>

</section>

<!-- footer section ends -->


<!-- js file link  -->
<script src="js/script.js"></script>

</body>
</html>

