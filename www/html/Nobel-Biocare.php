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
    <title>Nobel Biocare - MolarLab</title>
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
                        <h1>Nobel Biocare</h1>
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
                        <h4 class="text-justify" style="color:#7e8186;">Nobel Biocare are the true pioneers in the field of implant-based dental restorations. With over 60 years of experience behind them, the company has around 3000 products to help dentists treat their patients. Offering a multitude of solutions for all cases they offer some of the most cutting-edge implants in dentistry. They're light and durable and their implant to abutment connection is second to none, making for the best possible secure fit.</h4><br>


                       <h2>Indications:</h2>
                        <hr/>
                        <ul>
                            <li><h4 class="text-justify" style="color:#7e8186;">Suitable for use as a foundation when anchoring tooth replacements into either jaw </h4> 
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Ideal for retaining an over-denture</h4>  
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">State-of-the-art metal technology allows speedy osseointegration </h4>  
                            </li>
                            
                        </ul><br>

                        <!-- Contraindications list -->

                        <h2>Contraindications:</h2>
                        <hr/>
                        <ul>
                            <li><h4 class="text-justify" style="color:#7e8186;">Pre-operation evaluation of the patient is necessary to ensure there are no factors which could put them at risk during the surgery itself or which may affect the capability of the bone to heal</h4> 
                            </li>
                            <li><h4 class="text-justify" style="color:#7e8186;">Should not be used in patients who are medically unfit for surgery</h4> 
                            </li>
                            <li><h4 class="text-justify" style="color:#7e8186;">Patients need to have sufficient volume of bone to support implants and anticipated functional load
                            </h4> 
                            </li>

                        </ul><br/>

                        <!-- Contraindications list close-->

                        <!-- Advantages list -->

                        <h2>Advantages:</h2>
                        <hr/>
                        <ul>
                            <li><h4 class="text-justify" style="color:#7e8186;">Clinical success since 1965</h4> 
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Unique design allows for superior stability and excellent aesthetics even in compromised bone situations</h4>  
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">One implant system for all your needs </h4>
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Speedy implants designed for 4 on 4 immediate treatment concept</h4></li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Flexible solutions whether you're new to implantology or an experienced clinician</h4></li>
                            
                        </ul><br/>

                        <!-- Advantages list close-->

                        <!-- Disadvantages list -->

                        <h2>Disadvantages:</h2>
                        <hr/>
                        <ul>
                            <li><h4 class="text-justify" style="color:#7e8186;">More expensive than most other dental implants</h4> 
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Certain implants can be more difficult to use in the mandible than the maxilla</h4>  
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
