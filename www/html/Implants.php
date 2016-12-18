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
    <title>Implants - MolarLab</title>
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
                        <h1>Implants</h1>
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
                        <h4 class="text-justify" style="color:#7e8186;">Dental implants are one of the most successful forms of missing teeth replacement in the field of dentistry. They can be used to restore single or multiple units, including an entire arch of missing teeth. In our laboratory, we use a wide range of materials to create your choice of restoration with the utmost accuracy. Our highly skilled technicians will fabricate patient-centric abutments and customize any restoration so that it is strong, durable, and incredibly lifelike. </h4>

                        <h4 class="text-justify" style="color:#7e8186;">Our team of experienced, technicians are well versed in supporting implant cases and will be pleased to assist with planning, fabrication, and comprehensive case designs. We also support dental implant fabrication for most of the leading brands of implants including:
                        </h4> <br>
                        <ul>
                            <li><h4>Nobel Biocare</h4></li>
                            <li><h4>Zimmer Biomet</h4></li>
                            <li><h4>MIS</h4></li>

                        </ul>

                        <h4 class="text-justify" style="color:#7e8186;">By assisting the dentist with meticulously prepared case planning, we can ensure that each stage of the fabrication is carried out with the necessary skill and precision for outstanding results.</h4>

                        <h4 class="text-justify" style="color:#7e8186;">To find out more about our dental implant restorations please get in touch by calling on (insert tel number). We look forward to working with you. </h4>

                       

                        

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

                <div class="col-md-4">
                      <aside class="widget widget_doctor_table">
                            <h2 class="widget-title"><strong>Nobel Biocare</strong></h2>
                            <p class="text-center">Nobel Biocare are the true pioneers in the field of implant-based dental restorations. With over 60 years of experience behind them, the company has around 3000 products to help dentists treat their patients. Offering a multitude of solutions for all cases they offer some of the most cutting-edge implants in dentistry.</p> 
                            
                            <a href="Nobel-Biocare.php"  class="view-btn btn btn-primary btn-lg">View More</b>
                            </a>
                       </aside><!-- /.widget_doctor_table -->
                </div>

                <div class="col-md-4">
                      <aside class="widget widget_doctor_table">
                            <h2 class="widget-title"><strong>Zimmer</strong></h2>
                            <p class="text-center">Previously known as Zimmer Dental, the company joined forces with Biomet 3i to become Zimmer Biomet. Together they have more than 62 years of experience in the dental implant field. Zimmer Biomet provides an extensive range of implants and surgical products with a solution for practically every implant case.</p>
                            <a href="Zimmer.php" class="view-btn btn btn-primary btn-lg">View More</a>
                        </aside><!-- /.widget_doctor_table -->
                </div>

                <div class="col-md-4">
                      <aside class="widget widget_doctor_table">
                            <h2 class="widget-title"><strong>MIS</strong></h2>
                            <p class="text-center">Founded in 1995 MIS offers a comprehensive range of dental implant products and solutions aimed at simplifying implant dentistry. The unique V3 implant is designed for primary stability and speedy osseointegration and is particularly effective for use in the anterior regions where bone and ...</p>
                            <a href="MIS.php" class="view-btn btn btn-primary btn-lg">View More</a>
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
