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
    <title>PFM - MolarLab</title>
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
                        <h1>PFM</h1>
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
                        <h4 class="text-justify" style="color:#7e8186;">PFM or porcelain-fused-to-metal restorations provide that perfect balance between aesthetics and strength. Consisting of a metal shell topped with porcelain it makes an ideal type of restoration to be used on both anterior or posterior teeth. Even with technical advances that utilize alternative composites, PFM is still the most widely used form of restoration because of its ability to create both natural looking and durable prosthetics.
                        </h4><br>

                        <h2>Indications</h2>
                        <hr/>
                        <ul>
                            <li><h4 class="text-justify" style="color:#7e8186;">Perfect for teeth that require complete coverage where and when aesthetic demands are high</h4> 
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Ideal for teeth where destruction in the form of previous restoration trauma may prevent the use of other types of restoration</h4>  
                            </li>
                            <li><h4 class="text-justify" style="color:#7e8186;">Offers superior retention and strength  </h4></li>
                            <li><h4 class="text-justify" style="color:#7e8186;">Best choice if all-ceramic crowns are contraindicated</h4></li><br>
                        </ul>

                        <!-- Contraindications list -->

                        <h2>Contraindications</h2>
                        <hr/>
                        <ul>
                            <li><h4 class="text-justify" style="color:#7e8186;">As with all fixed restorations PFM restorations should not be given to those with untreated periodontal disease </h4> 
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Considerations should be given to young patients with large pulp chambers because of the high risk of pulp exposure. Alternatively, all-ceramic crowns with less reduction might be preferred</h4>  
                            </li>
                            <li><h4 class="text-justify" style="color:#7e8186;">A PFM restoration shouldn't be considered when a more conservative restoration is feasible.</h3>
                            </li>
                            <li><h4 class="text-justify" style="color:#7e8186;">Best choice if all-ceramic crowns are contraindicated</h4></li>
                        </ul><br/>

                        <!-- Contraindications list close-->

                        <!-- Advantages list -->

                        <h2>Advantages</h2>
                        <hr/>
                        <ul>
                            <li><h4 class="text-justify" style="color:#7e8186;">PFM restorations combine the strength of cast metal with the looks of all-ceramic crowns</h4> 
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Because the axial walls are included in the preparation, retentive qualities are high</h4>  
                            </li>
                            <li><h4 class="text-justify" style="color:#7e8186;">A seamless appearance can easily be achieved using color matching and staining/blemishing</h3>
                            </li>
                            <li><h4 class="text-justify" style="color:#7e8186;">Easy preparation and far less demanding than partial-coverage retainers </h4></li>
                        </ul><br/>

                        <!-- Advantages list close-->

                        <!-- Disadvantages list -->

                        <h2>Disadvantages</h2>
                        <hr/>
                        <ul>
                            <li><h4 class="text-justify" style="color:#7e8186;">Much of the tooth structure is removed to fit a PFM restoration</h4> 
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">In comparison with all-ceramic restorations, PFM's have slightly inferior aesthetics</h4>  
                            </li>
                            <li><h4 class="text-justify" style="color:#7e8186;">PFM restorations can be relatively expensive  </h3><br/>
                            </li>
                            
                        </ul>

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
