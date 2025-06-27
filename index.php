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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive hospital website create by win coder</title>

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
        <h3>Welcome to Health+ Bangladesh</h3>
        <p> A person who has good physical health is likely to have bodily functions and processes working at their peak.</p>
        <a href="#appointment" class="btn"> appointment us <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

<marquee behavior="scroll" direction="left" style="font-size:20px; color:red;">
                        For emergency ambulance booking or any urgency, please call us at this number: <b>01878789989</b>
                        </marquee>

</section>

<!-- icons section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="image/thermometer.png" alt="">
        </div>

        <div class="content">
    <h3>Experience Top-Quality Healthcare Services at Health+</h3>
    <p>At Health+, we are dedicated to providing you with the best quality healthcare services in Bangladesh. Our team of skilled professionals is committed to your well-being, ensuring that you receive personalized and compassionate care.</p>
    <p>Discover a range of advanced medical treatments and services tailored to meet your unique needs. Your health is our priority, and we strive to deliver excellence in every aspect of your medical journey.</p>
   
</div>


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

<!-- appointmenting section starts   -->

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

