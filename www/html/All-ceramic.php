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
    <title>All Ceramics - MolarLab</title>
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
                        <h1>All Ceramics</h1>
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
                        <h4 class="text-justify" style="color:#7e8186;">All ceramic crowns are a popular choice of restoration, particularly on teeth that are highly visible, because they look so natural and lifelike. Made from 100% ceramic they mimic the natural luminous glossy look of a natural tooth. Also typically, the thicker the ceramic and more translucent the porcelain, the closer it matches the light handling characteristics of a natural tooth. 

                        </h4><br>

                        <h2>Indications</h2>
                        <hr/>
                        <ul>
                            <li><h4 class="text-justify" style="color:#7e8186;">Ceramic has a natural translucency which mimics that of a natural tooth</h4> 
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Ceramic can be easily and precisely shade matched to blend in with the patient's existing teeth</h4>  
                            </li>
                            
                        </ul><br>

                        <!-- Contraindications list -->

                        <h2>Contraindications</h2>
                        <hr/>
                        <ul>
                            <li><h4 class="text-justify" style="color:#7e8186;">Should not be used for patients with a deep overbite, a super-erupted opposing tooth, or short clinical crown</h4> 
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Because ceramic is easily broken and can be abrasive, it is not a suitable choice for patients with bruxism or other para-functional habits</h4>  
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Ceramic restorations must be kept dry when cemented in place if the outcome is to be successful</h4>  
                            </li>
                            
                        </ul><br/>

                        <!-- Contraindications list close-->

                        <!-- Advantages list -->

                        <h2>Advantages:</h2>
                        <hr/>
                        <ul>
                            <li><h4 class="text-justify" style="color:#7e8186;">The natural appearance of all ceramic restorations makes them a popular choice</h4> 
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">All ceramic restorations are more durable than most other direct restorative materials</h4>  
                            </li>
                            <li><h4 class="text-justify" style="color:#7e8186;">They're bio-compatible making them a good alternative for patients suffering from metal allergies

                            </h4>
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Since all ceramic restorations are fabricated indirectly, it allows for a more accurate shape and fit, when compared to directly placed restorations</h4></li>
                            
                        </ul><br/>

                        <!-- Advantages list close-->

                        <!-- Disadvantages list -->

                        <h2>Disadvantages:</h2>
                        <hr/>
                        <ul>
                            <li><h4 class="text-justify" style="color:#7e8186;">It can take at least two appointments to complete since all ceramic restorations are fabricated indirectly. As a result additional lab fees can make this type of restoration more expensive than other direct restorations</h4> 
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Because ceramic is brittle, an adequate thickness of ceramic needs to be used to prevent fracturing</h4>  
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">In most cases fractures are not normally able to be repaired</h4>  
                            </li>

                            <li><h4 class="text-justify" style="color:#7e8186;">Ceramics can potentially cause wear to opposing teeth and/or restorations in certain circumstances</h4>  
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
