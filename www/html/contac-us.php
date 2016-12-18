<?php
    if( $_SERVER["REQUEST_METHOD"] == "POST" )
    {
        $to  = ' info@molarlab.com';
        $from  = 'admin@nettycoons.net';

        if( $_POST['name'] != "" &&
            $_POST['email'] != "" &&
            $_POST['phone'] != "" &&
            $_POST['message'] != ""
          )
        {
            // email
            $subject = "Contact Page - Enquiry - MolarLab";

            $message = "Hello Admin !\n\n";
            $message.= "You have received a Enquiry from (Molar Lab's Contact page) \n\n";
            $message.= "Following are the user details:.\n\n";
            $message.= "Name = ".$_POST['name']."\n";
            $message.= "E-mail = ".$_POST['email']."\n";
            $message.= "Phone = ".$_POST['phone']."\n";
            $message.= "Message = ".$_POST['message']."\n\n\n";
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
    <title>Contact Us - MolarLab</title>
    <meta name="description" content="">
    <meta name="keywords" content="">


    <?php include_once('head.php'); ?>
</head>


<body class="home">

    <div id="page" class="site animsition">

        <?php include_once('header.php'); ?>


        <!-- Page Title -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs">
                            <div class="breadcrumb-trail">
                                <a href="./">Home</a><span class="sep">/</span>
                                Contact Us
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Content -->
        <div class="roll-section contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="roll-titlebox text-center">
                            <h2>Write to Us <strong>If You Have Questions</strong></h2>
                            <p>Feel free to contact us.</p>
                        </div>
                        <div class="roll-spacer h70"></div>
                    </div><!-- /.col-md-12 -->
                    <div class="col-md-6">



                        <form class="roll-contact-form style2" method="post" action="">

                            <div class="form-left">
                                <div class="input-wrap">
                                    <input type="text" value="" tabindex="1" placeholder="Name *" name="name" id="name" required>
                                </div>
                                <div class="input-wrap">
                                    <input type="email" value="" tabindex="2" placeholder="Email *" name="email" id="email" required>
                                </div>
                                <div class="input-wrap">
                                    <input type="text" value="" tabindex="3" placeholder="Phone" name="phone" id="phone" required>
                                </div>
                            </div>
                            <div class="form-right">
                                <div class="message-wrap">
                                    <textarea class="" tabindex="5" placeholder="Message *" name="message" id="message" required></textarea>
                                </div>
                                <div class="send-wrap">
                                    <input type="submit" value="Send message" id="submit" name="submit" class="submit roll-button">
                                </div>
                            </div>
                        </form>








                    </div><!-- /.col-md-6 -->
                    <div class="col-md-5 col-md-offset-1">
                        <div class="roll-spacer h50 hide-on-desktop"></div>
                        <h5 class="w300">Our office in <strong>Albany</strong></h5>
                        <div class="roll-spacer h20"></div>
                        <ul class="roll-info">
                            <li class="address">3 Computer Dr W #107, Albany, NY 12205.</li>
                            <li class="phone">855-665-2730</li>
                            <li class="email">info@molarlab.com</li>
                        </ul>
                         <div class="roll-spacer h70"></div>


                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.main-content -->



















        <?php include_once('footer.php'); ?>



    </div><!-- /#page -->

    <?php include_once('scripts.php'); ?>

</body>

</html>
