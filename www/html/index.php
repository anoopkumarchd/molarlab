<?php
    if( $_SERVER["REQUEST_METHOD"] == "POST" )
    {
        $to  = ' info@molarlab.com';
        $from  = 'admin@nettycoons.net';

        if($_POST['phone'])
        {
            // email
            $subject = "Enquiry - MolarLab";

            $message = "Hello Admin !\n\n";
            $message.= "You have received a Enquiry from (Molar Lab's Homepage) \n\n";
            $message.= "Following are the user details:.\n\n";
            $message.= "Phone = ".$_POST['phone']."\n\n\n";
            $message.= "The MolarLab Team\n";

            $headers = "From: Molar Lab <".$from.">\r\n";
            $headers.= "Reply-To: <".$from.">\r\n";

            @mail( $to, $subject, $message, $headers );


            echo '<script language="javascript">';
            echo 'alert("Thank you, your message has been sent to the team. We will respond to you as quickly as possible.")';
            echo '</script>';
        }
    }
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>MolarLab</title>
    <meta name="description" content="">
    <meta name="keywords" content="">


    <?php include_once('head.php'); ?>
</head>


<body class="home">

    <div id="page" class="site animsition">

        <?php include_once('header.php'); ?>

        <?php include_once('main-slider.php'); ?>

        <!-- Welcome -->
        <!-- Four boxes section -->
        <section class="roll-section">
        <div class="container" id="box-container">
            <div class="row">

                <!-- box1 -->
                <div class="col-md-3">
				<div class="banner-bottom-section">
                     <div class="icons image text-center">
                        <img src="i/i1.jpg" width="150" />
                     </div>
                     <hr>
                     <ul class="list-unstyled text-center" id="box-content">
                        <li>Print Rx Forms</li>
                        <li>Click, Print & Sign</li>
                        <li>&nbsp;</li>
                        <li><a href="./printable-rx-forms.php">Get Forms</a></li>

                        <!--
                        <li><a>Crown & Bridge Rx Form</a></li>
                        <li><a>Removable Rx Form</a></li>
                        <li><a>Orthodontics Rx Form</a></li> -->

                     </ul>

                </div></div>

                 <!-- box2 -->
                <div class="col-md-3">
				<div class="banner-bottom-section">
                     <div class="icons image text-center">
                        <img src="i/i2.jpg" width="150" />
                     </div>
                     <hr>
                     <ul class="list-unstyled text-center" id="box-content">
                        <li>Ship Your Case</li>
                        <li>Click, fill and Print Shipping Label</li>
                        <li><a href="./pack-and-send-a-case.php">Fedex Shipping label</a></li>
                     </ul>

                </div></div>

                <!-- box3 -->
                <div class="col-md-3">
				<div class="banner-bottom-section">
                     <div class="icons image text-center">
                        <img src="i/i3.jpg" width="150" />
                     </div>
                     <hr>
                     <ul class="list-unstyled text-center" id="box-content">
                        <li>Order Shipping Supplies</li>
                        <li>Fill Information to receive Supplies</li>
                        <li><a href="./request-supplies.php">Get your Shipping supplies</a></li>
                     </ul>
 </div>
                </div>

                <!-- box4 -->
                <div class="col-md-3">
				<div class="banner-bottom-section">
                     <div class="icons image text-center">
                        <img src="i/i4.jpg" width="150" />
                     </div>
                     <hr>
                     <ul class="list-unstyled text-center" id="box-content">
                        <li>MyMolarlab.com</li>
                        <li>Login to track cases, Schedule Pickup</li>
                        <li><a href="#loginbox" data-toggle="modal" data-animated data-z="0.5" data-hover-z="1"> Login Now</a></li>
                     </ul>









 </div>

                </div>

            </div>

        </div>

    <!-- close four boxes -->




        </section>

        <!--  services 4 sections -->
        <div class="container services-div">
            <div class="row">
                <div class="roll-titlebox text-center" style="margin-bottom: 25px;">
                    <h2><strong class="services-heading">Services & Products</strong> </h2><br>
                </div><!-- /.roll-titlebox -->

                <div class="col-md-3">
                      <aside class="widget widget_doctor_table">
                            <h2 class="widget-title"><strong>Crowns & Bridges</strong></h2>
                            <p class="text-center">Our dental crowns and bridges are made using the finest materials available, by a team of highly experienced technicians with years of experience in this field. These include a variety of PFM's, full cast, and all ceramic appliances.</p>
                           
                            <a href="Crowns-and-Bridges.php"  class="view-btn btn btn-primary btn-lg">View More</b>
                            </a>
                       </aside><!-- /.widget_doctor_table -->
                </div>

                <div class="col-md-3">
                      <aside class="widget widget_doctor_table">
                            <h2 class="widget-title"><strong>Dentures</strong></h2>
                            <p class="text-center">Our dentures are fabricated from the finest lightweight, durable materials with natural aesthetics, thanks to a choice of convincing flesh tones and clear clasps. We specialize in full dentures and partial dentures, with or without alloy metal frameworks, as well as fixed/detachable or fixed removable hybrid cases.</p>
                            <a href="Dentures.php" class="view-btn btn btn-primary btn-lg">View More</a>
                        </aside><!-- /.widget_doctor_table -->
                </div>

                <div class="col-md-3">
                      <aside class="widget widget_doctor_table">
                            <h2 class="widget-title"><strong>Orthodontics</strong></h2>
                            <p class="text-center">We're a full service orthodontic laboratory dedicated to designing and manufacturing high quality orthodontic appliances, splints, and retainers for adults and children. Our orthodontic technicians are highly qualified and experienced in their field.</p>
                            <a href="Orthodontics.php" class="view-btn btn btn-primary btn-lg">View More</a>
                        </aside><!-- /.widget_doctor_table -->
                </div>

                <div class="col-md-3">
                      <aside class="widget widget_doctor_table">
                            <h2 class="widget-title"><strong>Implants</strong></h2>
                            <p class="text-center">In our laboratory, we use a wide range of materials to create your choice of restoration with the utmost accuracy. Our highly skilled technicians will fabricate patient-centric abutments and customize any restoration so that it is strong, durable, and incredibly lifelike.</p>
                            <a href="Implants.php" class="view-btn btn btn-primary btn-lg">View More</a>
                        </aside><!-- /.widget_doctor_table -->
                </div>

            </div>

        </div>

        <!-- services 4 sections  CLOSE-->




        <!-- Testimonials -->
        <section class="roll-section testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="roll-titlebox text-center">
                            <h2><strong>What Client Dentist Say </strong>About Us?</h2>
                            <p>Your Trust, Our Commitment</p>
                        </div>
                        <div class="roll-spacer h60"></div>
                        <div class="roll-testimonials">
                            <div class="owl-carousel">

                                <div class="customer">
                                    <blockquote class="whisper">I used several labs over one and half decades of dentistry before I decided to try Molar lab. I must say

that the work this lab did for my trial case completely blew me away. I decided at this point that I will

not use another lab and I am proud to say that I had made the right decision.</blockquote>
                                    <div class="name">New York City, New York</div>
                                </div>
                                <div class="customer">
                                    <blockquote class="whisper">We love Molar lab and its ceramists for their artistic skills. The ceramists will craft the teeth in a way that

fits each individual case. Molar lab is awesome for making the teeth look super natural and beautiful. It’s

amazing how this lab makes each case turn out successful.</blockquote>
                                    <div class="name">Manchester, Los Angeles</div>
                                </div>
                                <div class="customer">
                                    <blockquote class="whisper">I started my dental practice from scratch and with no patients. I only had a hope and a dream for

success. After 11 years of practice, I have managed to put up two practices. One of the factors in my

success is a strong partnership with Molar lab. I truly believe that Molar is the best dental lab in the

country.</blockquote>
                                    <div class="name">California, Los Angeles</div>
                                </div>
                                <div class="customer">
                                    <blockquote class="whisper">I have worked with numerous labs for over 23 years. In the last 9 years, I have only partnered with one

lab. Molar lab is amazing. Their craftsmanship, their service and attention to detail for each case are

valuable. The lab’s services are always there when needed. I have never waited on the phone and lab

experts are always ready for suggestion for best fit for each case.</blockquote>
                                    <div class="name">Las Vegas, Nevada</div>
                                </div>
                                <div class="customer">
                                    <blockquote class="whisper">I have worked with Molar lab for close to a decade. The lab’s professionals are truly welcoming. Molar

lab has assisted me achieve my desired aesthetics. This lab has been instrumental on my live-patient

continuums. I attribute the incredible beautiful and functional smiles of my patients to a lab that work to

restore the needs of wide range of dental patients.</blockquote>
                                    <div class="name">Jersey City, New Jersey</div>
                                </div>
                                <div class="customer">
                                    <blockquote class="whisper">
I consider the team at Molar lab as a partner for our dental practice. The lab assists me settle the most

stressful cases that appear each day. I never realized that I would not function without lab work, but this

lab brings beauty, accuracy and predictability in many cases that I have handled. I am spoiled and love it

that way. Thanks Molar lab.</blockquote>
                                    <div class="name">Oklahoma City, Oklahoma</div>
                                </div>
                                <div class="customer">
                                    <blockquote class="whisper">I have experienced many things with three solid decades of dental practice. However, this lab has made

me a better dentist with their talented artistic work of dental restorations.</blockquote>
                                    <div class="name">Manchester, New Hampshire</div>
                                </div>
                                <div class="customer">
                                    <blockquote class="whisper">I have had the opportunity to work with the finest dental labs over the past 15 years. During this time, I

have watched the evolution of Molar lab that turned out to be the lab that I have always wanted to

work with, for my dental practice.</blockquote>
                                    <div class="name">Las Vegas, Nevada</div>
                                </div>
                                <div class="customer">
                                    <blockquote class="whisper">I have been using Molar lab for 5 years now. The quality of services here has always been consistent and

timely. Professionals in this lab are always in the forefront of using the latest technologies and

techniques to give impeccable results of many cases. Molar lab is not just a lab, but a dental partner.
</blockquote>
                                    <div class="name"> Miami, Florida</div>
                                </div>

                            </div>
                        </div><!-- /.roll-testimonials -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>






        <!-- Phone -->
        <section id="calling-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form class="roll-phone-form" method="post" action="">
                            <div class="input-wrap phone">
                                <input type="text" value="" tabindex="1" placeholder="Enter your phone number and we will call you back" name="phone" id="phone" required>
                            </div>
                            <div class="send-wrap">
                                <input type="submit" value="Call Me" id="submit" name="submit" class="submit">
                            </div>
                        </form><!-- /.contact-form -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>










        <?php include_once('footer.php'); ?>



    </div><!-- /#page -->




    <?php include_once('scripts.php'); ?>


</body>

</html>
