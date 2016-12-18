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
    <title>Printable Rx Forms - MolarLab</title>
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
                        <h1>Printable RX Forms</h1>
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 col-xs-12">
                        <div class="breadcrumbs">
                            <div class="breadcrumb-trail">
                                <a href="./">Home</a><span class="sep">/</span>
                                Printable RX Forms
                            </div>
                        </div>
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.page-title -->




        <!-- Main Content -->
        <div class="main-content has-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-heading">
                            <h3>Dowload <strong>Forms</strong></h3>
                            <p>Need to get started right away? You can download printable versions prescription forms here.</p>
                        </div>
                    </div>





                    <div class="col-md-6">
                        <div class="roll-doctor text-center">
                            <div class="doctor">
                                <img src="img/doctors/1.jpg" alt="image">
                            </div>
                            <h3 class="name"><a href="#">Crown & Bridge Rx</a></h3>
                            <hr />
                            <button class="btn btn-success">Download</button>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="roll-doctor text-center">
                            <div class="doctor">
                                <img src="img/doctors/1.jpg" alt="image">
                            </div>
                            <h3 class="name"><a href="#">Removable Rx</a></h3>
                            <hr />
                            <button class="btn btn-success">Download</button>
                        </div>
                    </div>



                    <div class="col-md-12">
                        &nbsp;
                    </div>









                    <div class="col-md-6">
                        <div class="roll-doctor text-center">
                            <div class="doctor">
                                <img src="img/doctors/1.jpg" alt="image">
                            </div>
                            <h3 class="name"><a href="#">Orthodontic Appliance Rx</a></h3>
                            <hr />
                            <button class="btn btn-success">Download</button>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="roll-doctor text-center">
                            <div class="doctor">
                                <img src="img/doctors/1.jpg" alt="image">
                            </div>
                            <h3 class="name"><a href="#">Full Cast High Noble Rx</a></h3>
                            <hr />
                            <button class="btn btn-success">Download</button>
                        </div>
                    </div>


                </div><!-- /.row -->
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
