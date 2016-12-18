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
    <title>Zimmer - MolarLab</title>
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
                        <h1>Zimmer</h1>
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
                        <h4 class="text-justify" style="color:#7e8186;">Previously known as Zimmer Dental, the company joined forces with Biomet 3i to become Zimmer Biomet. Together they have more than 62 years of experience in the dental implant field. Zimmer Biomet provides an extensive range of implants and surgical products with a solution for practically every implant case. The company utilizes their unique Trabecular Metal technology in many of their implants which is specifically designed to promote bone on-growth and bone in-growth, likening it as the closest thing to natural bone. </h4><br>


                       <h2>Indications:</h2>
                        <hr/>
                        <ul>
                            <li><h4 class="text-justify" style="color:#7e8186;">A full range of implants designed to be placed surgically in the upper or lower jaw utilizing both immediate or delayed-loading restorations</h4> 
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Zimmer Biomet implants are suitable for single or multiple teeth, fixed or removable bridgework, and/or to retain over-dentures</h4>  
                            </li>

                            
                        </ul><br>

                        <!-- Contraindications list -->

                        <h2>Contraindications:</h2>
                        <hr/>
                        <ul>
                            <li><h4 class="text-justify" style="color:#7e8186;">Should not be used in cases where the patient is medically unfit for oral surgery or in cases where other factors could prevent successful healing of the bone and osseointegration</h4> 
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Must not be placed in patients who have insufficient jaw bone to provide adequate implant support
                            </h4> 
                            </li>

                        </ul><br/>

                        <!-- Contraindications list close-->

                        <!-- Advantages list -->

                        <h2>Advantages:</h2>
                        <hr/>
                        <ul>
                            <li><h4 class="text-justify" style="color:#7e8186;">Global leader in the dental implant field </h4> 
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Committed to achieving simplicity through innovation so that clinicians can provide patients with the best possible implant therapy</h4>  
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Unique 3D Trabecular Metal Technology promotes the growth of new bone cells quickly and efficiently</h4>
                            </li>

                        </ul><br/>

                        <!-- Advantages list close-->

                        <!-- Disadvantages list -->

                        <h2>Disadvantages:</h2>
                        <hr/>
                        <ul>
                            <li><h4 class="text-justify" style="color:#7e8186;"><strong>Cost</strong>– Zimmer Biomet implants are one of the most expensive brands on the market</h4> 
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
    