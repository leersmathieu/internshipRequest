<?php

    /*
    ********************************************************************************************
    CONFIGURATION PHP
    ********************************************************************************************
    */

    $destinataire = 'leers.mathieu@gmail.com';
     
    // Messages de confirmation du mail
    $message_sent = "Your message has been sent!";
          
    if($_POST){

    $name=($_POST['name']);
    $mail=($_POST['mail']);
    $message=($_POST['message']);

    $form_mail ="Message de : $name \n";
    $form_mail .= "Email : $mail\n";
    $form_mail .= "Message : $message\n";

    }

    $sanitization = array (

    'name' 	=> FILTER_SANITIZE_STRING,
    'mail' 		=> FILTER_VALIDATE_EMAIL,
    'message' 	=> FILTER_SANITIZE_STRING,

    );

    $result = filter_input_array(INPUT_POST, $sanitization);

    foreach($sanitization as $key => $value) 
     {
        $result[$key]=trim($result[$key]);
     }

    /*
    ********************************************************************************************
    FIN DE LA CONFIGURATION
    ******************************************************************************************** 
    */

    if (isset($result['name']) AND !empty($result['name'])){
        $verif1 = "ok";
    } 
    else {
        $verif1 ="ko";
    }
    
    if (isset($result['mail']) AND !empty($result['mail'])){
        $verif2 = "ok";
    } 
    else {
        $verif2 ="ko";
    }
    
    if (isset($result['message']) AND !empty($result['message'])){
        $verif3 = "ok";
    } 
    else {
        $verif3 ="ko";
    }

    if ($verif1 == "ok" AND $verif2 == "ok" AND $verif3 == "ok"){

        mail("$destinataire","Contact for Stage","$form_mail","From: $mail"); //fonction mail

    }
     ?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mathieu Leers</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="assets/img/LM.png">
        <link rel="stylesheet" type="text/css" media="screen" href="assets/style/main.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    </head>

    <body>


        <div id="page">

            <div id="presentation" class="brColor">
                <?php

                    if (isset($_POST['name']) AND ($verif1 != "ok")){
                        echo "<span class=error> 'Name' champ is not valide </span>";
                    } 
                    if (isset($_POST['mail']) AND ($verif2 != "ok")){
                        echo "<span class=error> 'Mail' champ is not valide </span>";
                    } 
                    if (isset($_POST['message']) AND ($verif1 != "ok")){
                        echo "<span class=error> 'Message' champ is not valide </span>";
                    }  
                    if ($verif1 == "ok" AND $verif2 == "ok" AND $verif3 == "ok"){
                        echo "<span class=sended>".$message_sent."</span>";               
                    } 
                ?>
                
                <h1>
                    hello dupuis ! 
                </h1>

                <div id="circleAnim" title="Try me in responsive mode">
                    <div class="base">
                        <div class="first">
                            <div class="second">

                            </div>
                        </div>
                    </div>
                </div>

                <p class="inlineBlock">
                    I'm a 25 years old web developer<br />
                    I've honed my skills at 
                    <strong><a href="https://becode.org/" target="_blank">BeCode</a></strong><br />
                    By the way, my name is Leers, Mathieu Leers.
                </p>
                
                
                <div id="circleAnim2" title="Try me in responsive mode">
                    <div class="base">
                        <div class="first">
                            <div class="second">

                            </div>
                        </div>
                    </div>
                </div>


                <div class="centerDiv"></div>

            </div>
            <section id="lookingFor" class="brWhite">
                <div class="rect">
                    <svg width="400" height="400" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <rect width="400" height="400" fill="transparent" stroke-width="55"></rect>
                    </svg>
                </div>
                <div class="rect2">
                    <svg width="400" height="400" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <rect width="400" height="400" fill="transparent" stroke-width="55"></rect>
                    </svg>
                </div>
                
                <h1>i'm looking for an internship</h1>
                <ul>
                    <li>When ? from the end of August to... as long you would let me in</li>
                    <li>Where ? Charleroi area</li>
                    <li>For how long ? at least 1 month, up to 3 months</li>
                </ul>
                <div class="centerDiv"></div>
            </section>

            <section class="brColor" id="whyMe">
                <h1>Why me ?</h1>
                <div id="whyMeContent">
                    <h3>For 10 reasons :</h3>
                    <p>01 : I'm a nerd, the digital world is my world</p>
                    <p>10 : I'm starving for any new knowledge and any opportunity to improve my skills</p>
                </div>
                <p class="binaries">0100110101100101011100100110001101101001001000000110010001100101001000000</p>
                <p class="binaries">11101100110111101110100011100100110010100100000011000010111010001110100011001010110111001110100011010010110111101101110</p>
                <div class="centerDiv"></div>
            </section>

            <section class="noColor" id="skill">
                <h4>My skills</h4>

                <div id="allSkills">

                    <div id="skillHtml" class="skill">
                        <input class="text-output" value="0">
                    </div>

                    <div id="skillCss" class="skill">
                        <input class="text-output" value="0">
                    </div>

                    <div id="skillPhp" class="skill">
                        <input class="text-output" value="0">
                    </div>

                    <div id="skillWordPress" class="skill">
                        <input class="text-output" value="0">
                    </div>

                    <div id="skillSql" class="skill">
                        <input class="text-output" value="0">
                    </div>

                    <div id="skillJavaScript" class="skill">
                        <input class="text-output" value="0">
                    </div>

                    <div id="skillJQuery" class="skill">
                        <input class="text-output" value="0">
                    </div>

                    <div id="skillReactJs" class="skill">
                        <input class="text-output" value="0">
                    </div>

                </div>
                <a href="https://api.badgr.io/public/collections/26c23a30afd9b72fadafccce068313cc" title="Certification/Badge (badger)" target="_blank">
                    <p class="moreSkills"> . . .</p>
                </a>
                                
                <div class="centerDiv">

                </div>

            </section>
            
            <section class="brColor2" id="contact">

                <form action="index.php" method="post">
                    <h3>Contact</h3>
                    <label for="name">Name :<br /></label>
                    <input type="text" name="name" id="name" placeholder="Type your name">
                    <label for="mail">E-mail :<br /></label>
                    <input type="mail" id="mail" name="mail" placeholder="Enter your mail adress">
                    <label for="message">Message :<br /></label>
                    <textarea type="text" name="message" id="message" placeholder="Tell me something . . ."></textarea>
                    <div class="logo">
                        <a href="https://www.linkedin.com/in/leers-mathieu-35bb61157/" title="Linkedin Profile" target="_blank"> <i class="fab fa-linkedin"></i></a>
                        <a href="https://github.com/leersmathieu"> <i class="fab fa-github-square" title="Github" target="_blank"></i></a>
                        <a href="https://api.badgr.io/public/collections/26c23a30afd9b72fadafccce068313cc" title="Certification/Badge (badger)" target="_blank"> <i class="fas fab fa-certificate"></i></a>
                    </div>
                    <div class="centerDiv">
                    <input type="submit" name="send" value="Send message" id="send"></div>
                </form>
                <div class="centerDiv"></div>
             
            </section>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenLite.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/plugins/CSSPlugin.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/plugins/ScrollToPlugin.min.js"></script>
        <script src="assets/js/anime.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/animejs.js"></script>

    </body>
    
</html>