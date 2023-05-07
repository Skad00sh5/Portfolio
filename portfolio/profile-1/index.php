<?php 

$conn = mysqli_connect('localhost','root','','contact_db') or die ('connection failed');

if(isset($_POST['send'])) {
  
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $number = mysqli_real_escape_string($conn, $_POST['number']);
  $msg = mysqli_real_escape_string($conn, $_POST['message']);
  
  $select_message = mysqli_query($conn, "SELECT * FROM `msg_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die ('query failed');
  
  if(mysqli_num_rows($select_message) > 0) {
    $message[] = 'message sent already!';
  }else {
    mysqli_query($conn, "INSERT INTO `msg_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
    $message[] = 'message sent successfully!';
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio</title>
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    
    <?php
    
    if(isset($message)) {
      foreach($message as $message) {
        echo '
        <div class="message">
          <span>'.$message.'</span>
          <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
      }
    }
    
    ?>
    
    <!-- Header -->
    <header class="header">
      <div id="menu-btn" class="fas fa-bars"></div>

      <a href="#home" class="logo">JACK</a>

      <nav class="navbar">
        <a href="#home" class="active">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#contact">Contact</a>
      </nav>

      <div class="follow">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-github"></a>
      </div>
    </header>
    <!-- Header Ends -->

    <!-- Home Starts -->

    <section class="home" id="home">
      <div class="image">
        <img src="images/manga_ Gokurakugai.jpeg" alt="" />
      </div>

      <div class="content">
        <h3>Hi, I am Jack</h3>
        <span>Web Designer & Developer</span>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste ab
          doloremque adipisci neque, autem incidunt!
        </p>
        <a href="#about" class="btn">About Me</a>
      </div>
    </section>

    <!-- Home Ends -->

    <!-- About Section Starts -->

    <!-- Bio Starts -->

    <section class="about" id="about">
      <h1 class="heading"><span>Biography</span></h1>

      <div class="biography">
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus
          illo aliquid nemo incidunt nobis rem reprehenderit exercitationem eius
          omnis dolore!
        </p>

        <div class="bio">
          <h3><span>Name : </span> Jack</h3>
          <h3><span>Email : </span> tinoolwin5@gmail.com</h3>
          <h3><span>Address : </span> Yangon, Myanmar</h3>
          <h3><span>Phone : </span> +95-9 979 281 397</h3>
          <h3><span>Age : </span> 23 Years Old</h3>
          <h3><span>Experience : </span> 2+ Years of Web Developing</h3>
        </div>

        <a href="#" class="btn">Download CV</a>
      </div>

      <!-- Bio Ends -->

      <!-- Skill Starts -->

      <div class="skills">
        <h1 class="heading"><span>skills</span></h1>

        <div class="progress">
          <div class="bar">
            <h3><span>HTML</span><span>95%</span></h3>
          </div>
          <div class="bar">
            <h3><span>CSS</span><span>95%</span></h3>
          </div>
          <div class="bar">
            <h3><span>MySQL</span><span>95%</span></h3>
          </div>
          <div class="bar">
            <h3><span>Javascript</span><span>40%</span></h3>
          </div>
          <div class="bar">
            <h3><span>PHP</span><span>50%</span></h3>
          </div>
        </div>
      </div>

      <!-- Skill Ends -->

      <!-- Edu Starts -->

      <div class="edu-exp">
        <h1 class="heading"><span>Education & Experience</span></h1>

        <div class="row">
          <div class="box-container">
            <h3 class="title">Education</h3>

            <div class="box">
              <span>( 2019-2020 )</span>
              <h3>Web Designer</h3>
              <p>
                studied the course at Fairway Techology
              </p>
            </div>
            
            <div class="box">
              <span>( 2020-2021 )</span>
              <h3>Web Developer</h3>
              <p>
                studied the course at Fairway Techology
              </p>
            </div>

            <div class="box">
              <span>( 2021-2022 )</span>
              <h3>UI/UX Designer</h3>
              <p>
                studied the course at MMS One Stop IT Solutions
              </p>
            </div>
          </div>

          <div class="box-container">
            <h3 class="title">Experience</h3>

            <div class="box">
              <span>( 2019-2020 )</span>
              <h3>Front-end Developer</h3>
              <p>
                front-end web developer and designer in Fairway Technology
              </p>
            </div>

            <div class="box">
              <span>( 2020-2021 )</span>
              <h3>UI/UX Designer</h3>
              <p>
                entry level UI/UX designer in MMS One Stop IT Solutions
              </p>
            </div>

            <div class="box">
              <span>( 2021-2022 )</span>
              <h3>Full Stack Intern</h3>
              <p>
                work about a year in Fairway Techology
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Edu Ends -->
    </section>

    <!-- About Section Starts -->

    <!-- Services Section Starts -->

    <section class="services" id="services">
      <h1 class="heading"><span>services</span></h1>

      <div class="box-container">
        <div class="box">
          <i class="fas fa-code"></i>
          <h3>Web Developement</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic
            reiciendis beatae, exercitationem quo sunt culpa.
          </p>
        </div>

        <div class="box">
          <i class="fa-brands fa-figma"></i>
          <h3>Figma</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic
            reiciendis beatae, exercitationem quo sunt culpa.
          </p>
        </div>

        <div class="box">
          <i class="fab fa-bootstrap"></i>
          <h3>Bootstrap</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic
            reiciendis beatae, exercitationem quo sunt culpa.
          </p>
        </div>

        <!-- <div class="box">
          <i class="fas fa-chart-line"></i>
          <h3>SEO Marketing</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic
            reiciendis beatae, exercitationem quo sunt culpa.
          </p>
        </div>

        <div class="box">
          <i class="fas fa-bullhorn"></i>
          <h3>Digital Marketing</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic
            reiciendis beatae, exercitationem quo sunt culpa.
          </p>
        </div>

        <div class="box">
          <i class="fab fa-wordpress"></i>
          <h3>Wordpress</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic
            reiciendis beatae, exercitationem quo sunt culpa.
          </p>
        </div>
      </div> -->
    </section>

    <!-- Services Section Ends -->

    <!-- Portfolio Section Starts -->

    <section class="portfolio" id="portfolio">
      <h1 class="heading"><span>portfolio</span></h1>

      <div class="box-container">
        <div class="box">
          <img src="images/portfolio1.jpg" alt="" />
          <h3>Portfolio Page</h3>
          <span>( 2020 - 2022 )</span>
        </div>

        <div class="box">
          <img src="images/profilecard.png" alt="" />
          <h3>Profile Card</h3>
          <span>( 2020 - 2022 )</span>
        </div>

        <div class="box">
          <img src="images/loginform1.png" alt="" />
          <h3>Login Form</h3>
          <span>( 2020 - 2022 )</span>
        </div>

        <div class="box">
          <img src="images/loginform2.png" alt="" />
          <h3>Animated Login Form</h3>
          <span>( 2020 - 2022 )</span>
        </div>

        <div class="box">
          <img src="images/img_five.jpg" alt="" />
          <h3>Web Development</h3>
          <span>( 2020 - 2022 )</span>
        </div>

        <div class="box">
          <img src="images/img_six.jpg" alt="" />
          <h3>Web Development</h3>
          <span>( 2020 - 2022 )</span>
        </div>
      </div>
    </section>

    <!-- Portfolio Section Ends -->

    <!-- Contact Section Starts -->

    <section class="contact" id="contact">
      <h1 class="heading"><span>Contact Me</span></h1>

      <form action="" method="post">
        <div class="flex">
          <input
            type="text"
            name="name"
            placeholder="Enter Your Name"
            class="box"
            required />

          <input
            type="email"
            name="email"
            placeholder="Enter Your Email"
            class="box"
            required />
        </div>

        <input
          type="tel"
          name="number"
          placeholder="Enter Your Phone Number"
          class="box"
          required />

        <textarea
          name="message"
          placeholder="Enter Your Message"
          class="box"
          cols="30"
          rows="10"
          required></textarea>

        <input type="submit" value="Send Message" name="send" class="btn" />
      </form>

      <div class="box-container">
        <div class="box">
          <i class="fas fa-phone"></i>
          <h3>phone</h3>
          <p>+123-111-222-333</p>
        </div>

        <div class="box">
          <i class="fas fa-envelope"></i>
          <h3>email</h3>
          <p>tinoolwin5@gmail.com</p>
        </div>

        <div class="box">
          <i class="fas fa-map-marker-alt"></i>
          <h3>address</h3>
          <p>Yangon, Myanmar</p>
        </div>
      </div>
    </section>

    <!-- Contact Section Ends -->

    <div class="credit">
      &copy; copyright @ 2022
      <!-- <?php echo date('Y') ?> -->
      by <span>Mr. Web Designer</span>
    </div>

    <!-- Custom JS -->
    <script src="js/script.js"></script>
  </body>
</html>
