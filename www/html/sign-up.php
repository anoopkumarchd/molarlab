<?php

    if( $_SERVER["REQUEST_METHOD"] == "POST" )
    {
        $to  = ' info@molarlab.com';
        $from  = 'admin@nettycoons.net';

        if(
            $_POST['first_name'] &&
            $_POST['last_name'] &&
            $_POST['office_name'] &&
            $_POST['office_phone_number'] &&
            $_POST['office_address'] &&
            $_POST['city'] &&
            $_POST['zip_code'] &&
            $_POST['email']
            )
        {
            // email
            $subject = "Page : Create an account - MolarLab";

            $message = "Hello Admin !\n\n";
            $message.= "You have received a Enquiry from (Molar Lab's Create an account) \n\n";
            $message.= "Following are the user details:.\n\n";

            $message.= "First Name = ".$_POST['first_name']."\n";
            $message.= "Last Name = ".$_POST['last_name']."\n";
            $message.= "Office Name = ".$_POST['office_name']."\n";
            $message.= "Office Phone Number = ".$_POST['office_phone_number']."\n";
            $message.= "Office Address = ".$_POST['office_address']."\n";
            $message.= "City = ".$_POST['city']."\n";
            $message.= "Zip Code = ".$_POST['zip_code']."\n";
            $message.= "E-mail = ".$_POST['email']."\n\n\n";
            $message.= "The MolarLab Team\n";

            $headers = "From: Molar Lab <".$from.">\r\n";
            $headers.= "Reply-To: <".$from.">\r\n";

            @mail( $to, $subject, $message, $headers );


            echo '<script language="javascript">';
            echo 'alert("Thank you, your account information has been sent to the team. We will respond to you as quickly as possible.")';
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
    <title>Sign up - MolarLab</title>
    <meta name="description" content="">
    <meta name="keywords" content="">


    <?php include_once('head.php'); ?>
</head>
<style type="text/css">
input:focus {
    border-color: #66afe9 !important;
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6) !important;
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6) ;
}
input[type="text"] {
    border-radius: 6px;
}
</style>

<body class="home">

    <div id="page" class="site animsition">

        <?php include_once('header.php'); ?>


        <!-- Page Title -->
        <div class="page-title style2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <h1>Create an account </h1>
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 col-xs-12">
                        <div class="breadcrumbs">
                            <div class="breadcrumb-trail">
                                <a href="./">Home</a><span class="sep">/</span>
                                Sign-up
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
                            <h3 style="color:#0facee;"><strong>Create an account</strong></h3>
                            <p>*(denotes required field)</p>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-8 col-md-offset-2">




                        <form class="roll-contact-form style2" method="post" action="">



                            <div class="row">
                                <div class="col-md-6">
                                    <label>First Name *</label>
                                    <input type="text" name="first_name" value="" placeholder="First Name" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Last Name *</label>
                                    <input type="text" name="last_name" value="" placeholder="Last Name" required>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-md-12">
                                    <label> Office Name *</label>
                                    <input type="text" name="office_name" value="" placeholder="Office Name" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label>Office Phone Number *</label>
                                    <input type="text" name="office_phone_number" value="" placeholder="Office Phone Number" required>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <label>Office Address *</label>
                                    <input type="text" name="office_address" value="" placeholder="Office Address" required>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-md-6">
                                    <label>City *</label>
                                    <input type="text" name="city" value="" placeholder="City" required>
                                </div>
                                <div class="col-md-6">
                                    <label>State *</label>
                                    <input type="text" name="state" value="" placeholder="State" required>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <label>Zip Code *</label>
                                    <input type="text" name="zip_code" value="" placeholder="Zip Code" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Email *</label>
                                    <input type="email" name="email" value="" placeholder="Email" required>

                                </div>
                            </div>

                            <div class="form-right">
                                <div class="send-wrap">
                                    <input type="submit" value="Create an account " id="submit" name="submit" class="btn btn-block btn-primary btn-lg">
                                </div>
                            </div>
                        </form>






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
