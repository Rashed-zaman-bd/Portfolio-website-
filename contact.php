<?php
include 'connect.php';

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $subject = $_POST['subject'];
    $subject = filter_var($subject, FILTER_SANITIZE_STRING);
    $message = $_POST['message'];
    $message = filter_var($message, FILTER_SANITIZE_STRING);

    $select_message = $conn->prepare("SELECT * FROM `contact` WHERE name = ? AND email = ? AND subject = ? AND message = ?");
    $select_message->execute([$name, $email, $subject, $message]);
 
    if($select_message->rowCount() > 0){
       $mess[] = 'already sent message!';
    }else{
 
       $insert_message = $conn->prepare("INSERT INTO `contact`(name, email, subject, message) VALUES(?,?,?,?)");
       $insert_message->execute([$name, $email, $subject, $message]);
 
       $mess[] = 'sent message successfully!';
 
    }
}

?>


<?php

include 'header.php';

?>



            <!-- Begin contact section -->
            <section id="contact-section" class="">
                <!-- Begin page header-->
                <div class="page-header animate__animated animate__zoomIn">
                    <h2>Contacts</h2>
                    <div class="devider"></div>
                    <p class="subtitle">all to contact me</p>
                </div>
                <!-- End page header-->

<?php
        if(isset($mess)){
            foreach($mess as $mess){
            echo '
                <div class="mess">
                <span>'.$mess.'</span>
                <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
                </div>
            ';
            }
        }
    ?>



                <div class="contact">

                    <div class="contact-info animate__animated animate__fadeInLeft">
                        <h4>Address</h4>
                        <ul class="contact-address">
                            <i class='bx bxs-map'></i>
                            <li>&nbsp; Uttara,&nbsp; Dhaka, &nbsp; Bangladesh</li>
                            <i class="bx bxs-phone"></i>
                            <li>&nbsp; (+88)&nbsp;01711&nbsp;253859</li>
                            <i class="bx bxs-envelope"></i>
                            <li> info@rasheds.net</li>
                        </ul>
                        <br><br>
                        <div class="social">

                        <a href=""><i class='bx bxl-linkedin'></i></a>
                        <a href=""><i class='bx bxl-youtube'></i></a>
                        <a href=""><i class='bx bxl-github'></i></a>
                        <a href=""><i class='bx bxl-facebook'></i></a>
                        <a href=""><i class='bx bxl-instagram'></i></a>
                        <a href=""><i class='bx bxl-twitter'></i></a>
                        
                    </div>

                    </div>


                    <div class="contact-form animate__animated animate__fadeInRight">
                        <h4>Text to me</h4>
                        <form role="form" action="" method="POST">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control input-lg"
                                    placeholder="Enter Your Name" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control input-lg"
                                    placeholder="Enter E-mail" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control input-lg"
                                    placeholder="Enter Subject" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <textarea name="message" class="form-control input-lg" rows="5"
                                    placeholder="Enter Your Message" required></textarea>
                            </div>
                            <br>
                            <button type="submit" name="submit" class="btn">Send Me</button>
                        </form>
                    </div>

                </div>
            </section>




<?php

include 'footer.php';

?>