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
    <title>Mouthguards - MolarLab</title>
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
                        <h1>Mouthguards</h1>
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
                        <h4 class="text-justify" style="color:#7e8186;">A mouth guard should be an integral part of any athlete's kit and we're pleased to be able to offer Mouthguards to protect your patients' smiles. Not only are these awesome mouth guards available in a range of colors and patterns, they can be customized to offer 6 varying degrees of protection, per risks of the sport that the wearer plays. For example, the higher the chance of receiving high intensity blows, the greater the recommended level of mouth guard protection. </h4>

                        <h4 class="text-justify" style="color:#7e8186;">Mouthguards can help prevent lacerations to the lips, chin, and cheeks, as well as guard against broken or displaced teeth, permanent jaw or neck injuries, and concussions.</h4> <br>

                       

                        <h2>Indications</h2>
                        <hr/>
                        <ul>
                            <li><h4 class="text-justify" style="color:#7e8186;">Ideal for patients who need to protect their teeth during sports activities</h4> 
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Particularly suited to those who are undergoing orthodontic treatment and need mouth protection</h4>  
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Can be worn with a variety of orthodontic brace systems</h4>  
                            </li>
                            
                        </ul><br>

                        <!-- Contraindications list -->

                        <h2>Contraindications</h2>
                        <hr/>
                        <ul>
                            <li><h4 class="text-justify" style="color:#7e8186;">Can be worn with a variety of orthodontic brace systems</h4> 
                            </li>

                        </ul><br/>

                        <!-- Contraindications list close-->

                        <!-- Advantages list -->

                        <h2>Advantages</h2>
                        <hr/>
                        <ul>
                            <li><h4 class="text-justify" style="color:#7e8186;">Custom fitted for better protection</h4> 
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">More comfortable so that athletes will want to wear it</h4>  
                            </li>
                            <li><h4 class="text-justify" style="color:#7e8186;">Designed to make breathing and speaking easier</h4>
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Absorbs and redistributes energy from blows</h4></li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Can be customized to match team colors</h4></li>
                            
                        </ul><br/>

                        <!-- Advantages list close-->

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
