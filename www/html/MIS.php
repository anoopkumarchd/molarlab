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
    <title>MIS- MolarLab</title>
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
                        <h1>MIS</h1>
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
                        <h4 class="text-justify" style="color:#7e8186;">Founded in 1995 MIS offers a comprehensive range of dental implant products and solutions aimed at simplifying implant dentistry. The unique V3 implant is designed for primary stability and speedy osseointegration and is particularly effective for use in the anterior regions where bone and space is often limited. The increased efficiency ultimately saves on chair time. </h4><br>


                       <h2>Indications:</h2>
                        <hr/>
                        <ul>
                            <li><h4 class="text-justify" style="color:#7e8186;">Good for anterior regions where space and bone is limited </h4> 
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Suitable for all indications and bone types</h4>  
                            </li>

                            
                        </ul><br>

                        <!-- Contraindications list -->

                        <h2>Contraindications:</h2>
                        <hr/>
                        <ul>
                            <li><h4 class="text-justify" style="color:#7e8186;">Conditions or treatments which can compromise healing</h4> 
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Lack of patient motivation to maintain oral hygiene

                            </h4> 
                            </li>

                        </ul><br/>

                        <!-- Contraindications list close-->

                        <!-- Advantages list -->

                        <h2>Advantages:</h2>
                        <hr/>
                        <ul>
                            <li><h4 class="text-justify" style="color:#7e8186;">Popular implant around the world, so easy to get parts</h4> 
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Well suited for a variety of clinical applications</h4>  
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Receptive implant surface to aid osseointegration</h4>
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">High aesthetic results due to more bone and more soft tissue being achieved</h4>
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Primary stability due to its aggressive threads</h4>
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">User-friendly tool kit</h4>
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Good value for money</h4>
                            </li>

                        </ul><br/>

                        <!-- Advantages list close-->

                        <!-- Disadvantages list -->

                        <h2>Disadvantages:</h2>
                        <hr/>
                        <ul>
                            <li><h4 class="text-justify" style="color:#7e8186;">For single implants hexed open tray impression copings means fitting can be more difficult for less experienced dentists</h4> 
                            </li>
                              <li><h4 class="text-justify" style="color:#7e8186;">Lacks the range of implant prosthetics that other more established companies have.</h4> 
                            </li>

                            
                        </ul><br/>

                        <!-- Disadvantages list close-->

                    </div>
                </div>




            </div><!-- /.container -->
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
    