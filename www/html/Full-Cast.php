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
    <title>Full Cast - MolarLab</title>
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
                        <h1>Full Cast</h1>
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
                        <h4 class="text-justify" style="color:#7e8186;">Despite the advancements of composites and ceramics, full cast restorations continue to be a classic choice for durable posterior crowns and bridges. Fabricated from gold content alloys, not only do they make a strong and long lasting choice but they are also extremely bio-compatible with the gums. In fact, crowns made with high noble white and gold alloys and non-precious metals are able to resist oxidization and corrosion, as well as helping to prevent the buildup of plaque along the gum line.
                        </h4><br>

                        <h2>Indications</h2>
                        <hr/>
                        <ul>
                            <li><h4 class="text-justify" style="color:#7e8186;">Can be used anywhere in the mouth for single crowns as well as for bridges</h4> 
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Perfect choice for when occlusal space is limited</h4>  
                            </li>
                            
                        </ul><br>

                        <!-- Contraindications list -->

                        <h2>Contraindications</h2>
                        <hr/>
                        <ul>
                            <li><h4 class="text-justify" style="color:#7e8186;">Not advisable for patients only needing a partial bridge</h4> 
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Not suitable for patients with a metal allergy</h4>  
                            </li>
                            
                        </ul><br/>

                        <!-- Contraindications list close-->

                        <!-- Advantages list -->

                        <h2>Advantages</h2>
                        <hr/>
                        <ul>
                            <li><h4 class="text-justify" style="color:#7e8186;">Can be used as single crowns or multi-unit bridges, as well as for inlays and onlays</h4> 
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Long-term wear characteristics</h4>  
                            </li>
                            <li><h4 class="text-justify" style="color:#7e8186;">A long history of success
                            </h4>
                            </li>
                            <li><h4 class="text-justify" style="color:#7e8186;">Available in yellow and white gold alloys</h4></li>
                            <li><h4 class="text-justify" style="color:#7e8186;">High marginal integrity and durability</h4>  
                            </li>
                            <li><h4 class="text-justify" style="color:#7e8186;">Proven longevity</h4>  
                            </li>
                            <li><h4 class="text-justify" style="color:#7e8186;">Great choice for para-functional patients</h4>  
                            </li>
                        </ul><br/>

                        <!-- Advantages list close-->

                        <!-- Disadvantages list -->

                        <h2>Disadvantages</h2>
                        <hr/>
                        <ul>
                            <li><h4 class="text-justify" style="color:#7e8186;">Aesthetics – some patients prefer not to see metal anywhere in their mouth</h4> 
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Price volatility – it can be hard to persuade a patient to have a gold tooth as the price can vary drastically depending on the current gold price and the amount of gold alloy needed to prepare the tooth</h4>  
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
