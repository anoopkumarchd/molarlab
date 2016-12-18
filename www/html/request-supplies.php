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
    <title>Request Supplies - MolarLab</title>
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
                        <h1>Request Supplies</h1>
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 col-xs-12">
                        <div class="breadcrumbs">
                            <div class="breadcrumb-trail">
                                <a href="./">Home</a><span class="sep">/</span>
                                Request Supplies
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
                            <h3>Request <strong>Supplies</strong></h3>
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
                                    <input type="text" value="" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Last Name *</label>
                                    <input type="text" value="" required>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-md-12">
                                    <label>Office Name *</label>
                                    <input type="text" value="" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label>E-mail *</label>
                                    <input type="text" value="" required>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <label>Street Address *</label>
                                    <input type="text" value="" required>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-md-6">
                                    <label>City *</label>
                                    <input type="text" value="" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Postal Code *</label>
                                    <input type="text" value="" required>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <label>State/Region *</label>

                                    <select>
                                        <option> - Please Select - </option>
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="CA">California</option>
                                        <option value="CO">Colorado</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="DC">District Of Columbia</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="ID">Idaho</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IN">Indiana</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NV">Nevada</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="OH">Ohio</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="OR">Oregon</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="TX">Texas</option>
                                        <option value="UT">Utah</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WA">Washington</option>
                                        <option value="WV">West Virginia</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="WY">Wyoming</option>
                                    </select>

                                </div>
                            </div>



                            <div class="row">
                                <div class="col-md-12">
                                    <label>Phone Number *</label>
                                    <input type="text" value="" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label>Please send me *</label>
                                    <input type="checkbox" value=""> FedEx Shipping Labels
                                    <input type="checkbox" value=""> Crown & Bridge Rx
                                    <input type="checkbox" value=""> Removable Rx
                                    <input type="checkbox" value=""> Ortho Rx
                                    <input type="checkbox" value=""> Scheduling Calendar
                                    <input type="checkbox" value=""> Other
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <label>Your Message *</label>
                                    <textarea class="" name="message" id="message" required></textarea>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <label>Which describes you best? *</label>
                                    <select>
                                        <option> - Please Select - </option>
                                        <option>Dentist</option>
                                        <option>Office Manager</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-right">
                                <div class="send-wrap">
                                    <input type="submit" value="Request Supplies" id="submit" name="submit" class="submit roll-button">
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
