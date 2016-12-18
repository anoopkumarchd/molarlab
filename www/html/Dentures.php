<?php
    /*
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
    }*/
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Dentures - MolarLab</title>
    <meta name="description" content="">
    <meta name="keywords" content="">


    <?php include_once('head.php'); ?>
</head>


<body class="home">

    <div id="page" class="site animsition">

        <?php include_once('header.php'); ?>


        <!-- Page Title -->
        <div class="page-title style2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <h1>Dentures</h1>
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 col-xs-12">
                        <div class="breadcrumbs">
                            <div class="breadcrumb-trail">
                                <a href="./">Home</a><span class="sep">/</span>
                                Services
                            </div>
                        </div>
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.page-title -->




        <!-- Main Content -->
        <div class="main-content has-heading" style="padding: 35px 0 100px;">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-justify" style="color:#7e8186;">It's understandable that your patients may be feeling some trepidation when it comes to removable dental appliances as a means of restoring their missing teeth. After all, no-one wants a smile that looks plastic and fake. Our dentures are fabricated from the finest lightweight, durable materials with natural aesthetics, thanks to a choice of convincing flesh tones and clear clasps. We specialize in full dentures and partial dentures, with or without alloy metal frameworks, as well as fixed/detachable or fixed removable hybrid cases. Providing that all-important balance between performance and aesthetics, our dentures offer first class removable solutions for an outstanding finish and natural looking teeth - all at a surprisingly affordable cost. </h4>

                        <br><h1 style="color:#0facee;">Our philosophy</h1><br>
                         
                        <h4 class="text-justify" style="color:#7e8186;">Everyone deserves a winning smile which is why we communicate with you and your staff to produce removable prostheses tailored to each patient's unique anatomy and individual needs. You can be assured that our dentures function well, fit comfortably, and enhance your patient's appearance.</h4>

                        <h4 class="text-justify"  style="color:#7e8186;">We'd love to join with you as your removable laboratory partner, providing you with years of technical experience, service, and value, so call or contact us today.</h4>
                        
                    </div>
                </div>




            </div><!-- /.container -->

            <!--  services  sections starts  -->
        <br>

        <div class="container" class="services categeres ">
            <div class="row">
                <div class="roll-titlebox text-center" style="margin-bottom: 25px;">
                    <h1><span class="heading-underline"><strong>Products</strong></span> </h1><br>

                </div><!-- /.roll-titlebox -->

                <div class="col-md-6 ">
                      <aside class="widget widget_doctor_table">
                            <h2 class="widget-title"><strong>Complete Dentures</strong></h2>
                            <p class="text-center">Dentures are one of the most popular methods of tooth restoration for those patients who don't want to (or are unable to) undergo invasive surgery. We pride ourselves on providing dentures which not only help patients to eat better, but also make them look years younger and feel great.</p> 
                            
                            <a href="Dentures.php"  class="view-btn btn btn-primary btn-lg">View More</b>
                            </a>
                       </aside><!-- /.widget_doctor_table -->
                </div>

                <div class="col-md-6">
                      <aside class="widget widget_doctor_table">
                            <h2 class="widget-title"><strong>Partial Dentures</strong></h2>
                            <p class="text-center">Removable partial dentures provide a realistic alternative to implants or fixed bridgework as a means of replacing missing teeth, and are a good solution for the budget conscious patient. We provide both cast metal partials and flexible partials which are lightweight, comfortable, and strong. </p>
                            <a href="Partial-Dentures.php" class="view-btn btn btn-primary btn-lg">View More</a>
                        </aside><!-- /.widget_doctor_table -->
                </div>

             </div>

        </div>

        <!-- services  sections  CLOSE-->

        </div><!-- /.main-content -->











        <!-- Phone -->
        <section id="calling-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form class="roll-phone-form" method="post" action="index.php">
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
