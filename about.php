<?php
  include('HEADERFOOTER/header.html');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
    <link rel="stylesheet" href="CSS/about.css" />
    <link rel="shortcut icon" type="x-icon" href="OPMusic.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Calistoga&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Calistoga&family=Zen+Old+Mincho&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>
<body>
<header>
    <h1 class="welcome">Welcome to OPMusic: Your Filipino Music Hub</h1>
    <p>
        At OPMusic, we're all about Filipino music. Our goal is to showcase the amazing talent from the Philippines, bringing you the best tunes from local artists.
    </p>
</header>
<main>
<div class="container">
        <div class="content-section">
        <h1>FOUNDING CONTRIBUTORS</h1>
        <div class="top-row">
          <div class="circle">
            <img src="fundal.jpg" alt="Fundal" />
            <div class="name">Project Manager</div>
          </div>
          <div class="circle">
            <img src="donn.png" alt="Angsantos" />
            <div class="name">System Analyst</div>
          </div>
        </div>

        <div class="bottom-row">
          <div class="circle">
            <img src="David.jpg" alt="Condino" />
            <div class="name">Programmer</div>
          </div>
          <div class="circle">
            <img src="kim.jpg" alt="Sison" />
            <div class="name">QA Test</div>
          </div>
          <div class="circle">
            <img src="mico - Copy.png" alt="Mico" />
            <div class="name">Documenter</div>
          </div>
          <h1 id="founders">FOUNDERS DESCRIPTION</h1>
        </div>
        <div class="circle">
          <img src="fundal.jpg" alt="Fundal" />
          <p class="quotes">I'm not lazy, I'm on energy-saving mode.</p>
          <p class="text">Justine Felix V. Fundal</p>
          <p class="description">
            Hey there! I'm the Project Manager here at OPMusic. I'm responsible for planning,
             executing, and overseeing projects to ensure they are completed on time, 
             within budget, and meet quality standards. I coordinate tasks,
              manage team members, and communicate with stakeholders to keep everyone aligned.
              i am good to use my organizational, leadership, and communication skills 
               to handle challenges and ensure project success.
          </p>
        </div>
        <div class="circle">
          <img src="donn.png" alt="Angsantos" />
          <p class="quotes">
            Pag binato ka ng bato, batuhin mo ng paso, wag ka papatalo
          </p>
          <p class="text">Justine Donn B. Angsantos</p>
          <p class="description">
            Hi, I'm the System Analyst at OPMusic. I am the one  who 
            evaluates and improves computer systems to meet business needs. 
            I analyze requirements, design solutions, and coordinate with 
            developers and stakeholders to implement and maintain efficient systems. 
            My role involves understanding both the technical and business aspects 
            to ensure systems effectively support organizational goals
          </p>
        </div>
        <div class="circle">
          <img src="David.jpg" alt="Condino" />
          <p class="quotes">
            Pag may tiyaga, may nilaga. Pero 'pag may tinola, mas masarap!
          </p>
          <p class="text">Stephen David Q. Condino</p>
          <p class="description">
            Hey, I'm Programmer here at OPMusic. 
            As a Programmer, I write, test, and maintain
             code to create software applications and systems. 
             I use programming languages like HTML, Java, Python, C++, etc. to 
             develop software solutions based on project requirements. 
             Working closely with other developers, designers, and stakeholders, 
             I ensure the software meets user needs and functions correctly.
              Additionally, I debug and update existing code to improve performance 
              and resolve any issues.
          </p>
        </div>
        <div class="circle">
          <img src="kim.jpg" alt="Sison" />
          <p class="quotes">Hard work without self-belief is futile</p>
          <p class="text">Krizha Kimberly J. Sison</p>
          <p class="description">
            Hi there, I'm the QA Test at OPMusic. Certainly! As a QA Tester, 
            I am responsible for ensuring the quality and functionality of 
            software applications. I design and execute test plans, identify 
            and document bugs, and collaborate with developers to resolve issues. 
            By thoroughly testing the software, I help ensure it meets user 
            requirements and works smoothly before release. My goal is to identify
             potential problems and ensure the software is reliable and user-friendly.
          </p>
        </div>
        <div class="circle">
          <img src="mico - Copy.png" alt="Mico" />
          <p class="quotes">We are sharpest where we break</p>
          <p class="text">Rhobert Angelo S. Mico</p>
          <p class="description">
            Hello! I'm the Documenter at OPMusic. My role is to keep everything
            organized and documented. I create and maintain all the documents
            related to our project, like meeting notes and user manuals. My job
            is to make sure everyone on the team has access to the information
            they need, so we can all stay on the same page. I also keep track of
            any changes or updates to the project and make sure our documents
            stay up to date.
          </p>
        </div>
        <div class="footer-section">
          <h1>Join Us</h1>
          <p>
            Whether you're a lifelong fan of OPM or just starting to explore
            Filipino music, we invite you to join us at OPMusic. Let's come
            together to celebrate the incredible talent and diversity of our
            local music scene.
          </p>
        </div>
            <form method="POST" action="">
                <div class="contact-form">
                    <h2>Contact Us</h2>
                    <div class="fa-input">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" id="email" class="contact-input" placeholder="Your Email" required autocomplete="off" /><br />
                    </div>
                    <div class="fa-input">
                        <i class="fa-regular fa-envelope"></i>
                        <input type="text" name="subject" id="subject" class="contact-input" placeholder="Subject" required />
                    </div>
                    <textarea name="message" id="message" class="contact-textarea" placeholder="Your Message" required autocomplete="off"></textarea><br />
                    <input type="submit" name="submit" class="contact-button">
                </div>
            </form>
            <?php
              if (isset($_POST['submit'])) {
                  // Collect form data
                  $from_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
                  $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
                  $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

                  // Email address to send the form data to
                  $to_email = '8215348@ntc.edu.ph';

                  // Additional headers
                  $headers = 'From: ' . $from_email . "\r\n" .
                            'Reply-To: ' . $from_email . "\r\n" .
                            'X-Mailer: PHP/' . phpversion();

                  // Send the email
                  if (mail($to_email, $subject, $message, $headers)) {
                      echo "<p style='color:white; padding: 10pt; background-color: blue; border-radius: 30pt;margin-left: auto; margin-right: auto; width:fit-content;'>Submission successful! We'll get back to you soon</p>";
                  } else {
                      echo "<p style='color:white; padding: 10pt; background-color: blue; border-radius: 30pt; margin-left: auto; margin-right: auto; width:fit-content;'>Failed to send email.</p>";
                  }
              }
            ?>
        </div>
    </div>
</main>
</body>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>
</html>
<?php
  include('HEADERFOOTER/footer.html');
?>
