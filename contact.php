<!DOCTYPE html>
<html class="sr">
<head>
    <meta charset="utf-8">
    <meta Keyword="lewison, builders, contractors, design">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LEWISON BUILDERS AND CONTRACTORS</title>
    <link rel="stylesheet" type="text/css" href="css/lewison.css">
    <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css" media="all">
    <script src="js\jquery-3.3.1.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
    <script src="js\scrollreveal.js"></script>
    <link rel="icon" href="img/lewison.png">
</head>
<body>
    <header>
        <div class="top-bar">
            <span>| 0717944017 </span> <span>| info@lewisbuilders.com </span>
            <span> | Eagle centre 2nd floor</span> <span>| 
              <a href = "https://www.facebook.com/Lewisonbuilders/" target = "_blank"> <img src = "img\facebook icon.png" width="25px" height="25px"/></a>
              <a href = "https://twitter.com/Lewisongroup"target = "_blank"> <img src = "img\twitter icon.png" width="25px" height="25px"/></a> </span>
            </div>
        <div class="main-bar">
            <div class="bg">
            <div class="logo"><img src="img/lewison.png" heigh="100px" width="100px"></div>
            <div class="menu">
                <div class="dropdown">
            <button class="dropbtn" >About Us <span style="padding: 8px; font-weight: bolder">&#65088; </span></button>
            <div class="dropdown-content">
              <a href="about.html">Who we are</a>
              <a href="team.html">Our Team</a>
            </div>
          </div>
          
          <div class="dropdown">
            <button class="dropbtn">Our Services <span style="padding: 8px; font-weight: bolder">&#65088; </span></button>
            <div class="dropdown-content">
              <a href="generalBuilding.html">General Building & Construction</a>
              <a href="architecture.html">Architectural Designs</a>
              <a href="construction.html">Construction Management</a>
            </div>
          </div>
          
          <div class="dropdown">
            <button class="dropbtn">Our Projects <span style="padding: 8px; font-weight: bolder">&#65088; </span></button>
            <div class="dropdown-content">
              <a href="projectb.html">Ground Breaking</a>
              <a href="projecto.html">Ongoing Projects</a>
              <a href="projectc.html">Completed Projects</a>
              <a href="projecth.html">Handed Over</a>
            </div>
          </div>
          
          <div class="dropdown">
            <button class="dropbtn"><a href="designs.html">Our Designs</a></button>
            <div class="dropdown-content">
            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn"><a href="blog.html">Blog</a></button>
            <div class="dropdown-content">
            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn"><a href="diaspora-clients.html">Diaspora Clients</a></button>
            <div class="dropdown-content">
            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn"><a href="contact.html">Contact Us</a></button>
            <div class="dropdown-content">
            </div>
          </div>

            </div>
        </div></div>
    </header>
    <section>
        <H1 id="heading">CONTACT US</H1>
        <form action="" method="POST" id="contact-form">
            <h2 id="heading2">WRITE TO US</h2>
           <div class="form"><label for="form" id="label">Fields marked with * are required</label></div>
            <div class="form"><input type="text" name="name" required placeholder="Name*"></div>
            <div class="form"><input type="email" name="email" required placeholder="email*" id="mail"></div>
            <div class="form"><input type="text" name="subject" id="contact" id="contact-sub" placeholder="subject"></div>
            <div class="form"><textarea name="message" id="contact-us" cols="30" rows="10" required placeholder="Message*"></textarea></div>
            <div class="form"><button id="send">Send</button></div>
        </form>
        
        <?php /*
//collecting form data
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$mail_subject= $_POST['subject'];
$message = $_POST['message'];
//composing th email
$email_from = 'postmaster@localhost';
$email_subject = "New Form submission: ".$mail_subject;
$email_body = "You have received a new message from the user $name.\n".
"Here is the message:\n $message".

//sending the mail
 $to = "postmaster@localhost";
 $headers = "From: $email_from \r\n";
 $headers .= "Reply-To: $visitor_email \r\n";
 mail($to,$email_subject,$email_body,$headers);*/

?> 
    </section>

    <footer>
        <div class="service-pad">
            <div class="child">
              <h4>Reach Us</h4>
              <span> <img src="img\call.png" height="30px" width="30px"/> 0717944017 </span><hr>
               <span> <img src="img\mail-flat.png" height="30px" width="30px"/> info@lewisbuilders.com </span><hr>
              <span> <img src="img\loc.png" height="30px" width="30px"/> Eagle centre 2nd floor, Naivasha</span><br>
            </div>
            <div class="child">
              <h4>Our Services</h4>
              <ul><li>General Building and Construction</li><hr>
                  <li>Architectural Designs</li><hr>
                  <li>Construction Management</li>
              </ul>
            </div>
            <div class="child">
              <h4>Our Approach</h4>
              <span>Full Contract</span><hr>
              <span>Labour Contract</span><hr>
              <span>Project Supervision</span>
            </div>
            <div class="child">
              <h4>Follow us </h4>
              <a href = "https://www.facebook.com/Lewisonbuilders/" target = "_blank"> <img src = "img\facebook icon.png" width="25px" height="25px"/></a><hr>
              <a href = "https://twitter.com/Lewisongroup"target = "_blank"> <img src = "img\twitter icon.png" width="25px" height="25px"/></a>
            </div>
        </div>
        <div class="copyright"> &copy; 2019 All rights researved | LEWISON BUILDERS AND CONTRACTORS | Designed by GISIT media </div>
      </footer>
      <script>
       ScrollReveal().reveal('.gal', {delay:500});
       ScrollReveal().reveal('.gal1',{delay:750});
       ScrollReveal().reveal('.gal2',{delay:1000})
       ScrollReveal().clean('.gal')
       </script>
  </body>
  </html>