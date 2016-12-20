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
    <title>Crowns-and-Bridges - MolarLab</title>
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
                        <h1>Crowns and Bridges</h1>
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
            <div class="container" style="margin-bottom:25px;">

                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-justify" style="color:#7e8186;">We understand that your dental patients deserve the very best restorations they can get and we're here to help you achieve that. Our dental crowns and bridges are made using the finest materials available, by a team of highly experienced technicians with years of experience in this field. These include a variety of PFM's, full cast, and all ceramic appliances. We ensure that the highest standards of care go into every restoration and the result is a crown or bridge that not only looks realistic, but does so without compromising on durability.</h4>

                        <br><h1 style="color:#0facee;">So how do we do this?</h1><br>
                         
                        <h4 class="text-justify" style="color:#7e8186;">It all starts with our choice of materials. We use the highest standards of porcelain, accredited alloys, and cast materials available. This ensures that every single crown or bridge we make is constructed to last. Add to this the use of the latest computer software and we're able to produce high quality, aesthetically driven restorations, time and time again. </h4>

                        <h4 class="text-justify"  style="color:#7e8186;">We're more than happy to discuss treatment planning, restoration pricing, and materials options with you, to help find the perfect solution for your patients. We believe that ongoing communication and exceptional customer service are the two key components to providing first class dental lab services to all our dentists, so why not call us on 855-665-2730 and talk to us about how we can help you today. </h4>
                        
                    </div>
                </div>




            </div><!-- /.container -->

             <!--  services  sections starts  -->
        <br>

        <div class="container services categeres ">
            <div class="row">
                <div class="roll-titlebox text-center" style="margin-bottom: 25px;">
                    <h1><span class="heading-underline"><strong>Products</strong></span> </h1><br>

                </div><!-- /.roll-titlebox -->

                <div class="col-md-4">
                      <aside class="widget widget_doctor_table">
                            <h2 class="widget-title"><strong>PFM</strong></h2>
                            <p class="text-center">PFM or porcelain-fused-to-metal restorations provide that perfect balance between aesthetics and strength. Consisting of a metal shell topped with porcelain it makes an ideal type of restoration to be used on both anterior or posterior teeth.</p> 
                            
                            <a href="PFM.php"  class="view-btn btn btn-primary btn-lg">View More</b>
                            </a>
                       </aside><!-- /.widget_doctor_table -->
                </div>

                <div class="col-md-4">
                      <aside class="widget widget_doctor_table">
                            <h2 class="widget-title"><strong>Full Cast</strong></h2>
                            <p class="text-center">Despite the advancements of composites and ceramics, full cast restorations continue to be a classic choice for durable posterior crowns and bridges. Fabricated from gold content alloys, not only do they make a strong and long lasting choice but they are also ....</p>
                            <a href="Full-Cast.php" class="view-btn btn btn-primary btn-lg">View More</a>
                        </aside><!-- /.widget_doctor_table -->
                </div>

                <div class="col-md-4">
                      <aside class="widget widget_doctor_table">
                            <h2 class="widget-title"><strong>All Ceramis</strong></h2>
                            <p class="text-center">All ceramic crowns are a popular choice of restoration, particularly on teeth that are highly visible, because they look so natural and lifelike. Made from 100% ceramic they mimic the natural luminous glossy look of a natural tooth.Also typically, the thicker the ceramic....</p>
                            <a href="All-ceramic.php" class="view-btn btn btn-primary btn-lg">View More</a>
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
