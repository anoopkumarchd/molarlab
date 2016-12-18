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
    <title>Orthodontics - MolarLab</title>
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
                        <h1>Orthodontics</h1>
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
                        <h4 class="text-justify" style="color:#7e8186;">We're a full service orthodontic laboratory dedicated to designing and manufacturing high quality orthodontic appliances, splints, and retainers for adults and children. As a team, we work collectively to ensure our brace systems and aligners meet your exact specifications and more importantly, offer an accurate and comfortable fit for your patients. Our orthodontic technicians are highly qualified and experienced in their field. Thus, we provide reliable, well-fitting appliances for even the most complex of cases. </h4><br>

                        <h1 style="color:#0facee;">We listen!</h1>
                         
                        <h4 class="text-justify" style="color:#7e8186;">As a dentist, we understand that there's nothing worse than having to re-schedule appointments and deal with frustrated patients or parents. What's more, working with an orthodontics laboratory who fail to follow your prescription, or who don't have an efficient ordering system in place, can result in dissatisfied patients and a flawed professional reputation - all of which will have a seriously negative impact on your practice. Fortunately, you can avoid these pitfalls by working with an orthodontics laboratory that continually listens to your requirements and delivers what you need, when you need it.</h4></br>

                        <h1 style="color:#0facee;">Why work with us?</h1>

                        <h4 class="text-justify"  style="color:#7e8186;">We're an orthodontics lab that prides itself on delivering a balance of personal service, high quality products, and competitive prices. We're reliable and easy to work with and will provide your patients with a wide range of top quality, fully-customized dental appliances that are designed, made, and delivered fast! </h4>

                        <h4 class="text-justify"  style="color:#7e8186;">Enhance your practice by working with a lab that allows you to maximize patient satisfaction. Call us today on 
                        <strong>855-665-2730.</strong> </h4>
                        
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

                <div class="col-md-8 col-md-offset-2">
                      <aside class="widget widget_doctor_table">
                            <h2 class="widget-title"><strong>Mouthguards</strong></h2>
                            <p class="text-center">A mouth guard should be an integral part of any athlete's kit and we're pleased to be able to offer Mouthguards to protect your patients' smiles. Not only are these awesome mouth guards available in a range of colors and patterns, they can be customized to offer 6 varying degrees of protection, per risks of the sport that the wearer plays.</p> 
                            
                            <a href="Mouthguards.php"  class="view-btn btn btn-primary btn-lg">View More</b>
                            </a>
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
