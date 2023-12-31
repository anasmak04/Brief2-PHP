<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funel - Agancy landing page</title>

  <!-- 
    - favicon link
  -->
  <link rel="sh ortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./public/css/spacing.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<style>
  .add {
    text-decoration: none;
    padding-top: 5px;
  }

  .delete {
    background-color: #101827;
    ;
    padding: 8px 20px;
    color: white;
    text-decoration: none;
    border: #1d283c 1px solid;
    margin: 5px;
  }

  .update {
    background-color: #101827;
    ;
    padding: 8px 20px;
    text-decoration: none;
    color: white;
    border: #1d283c 1px solid;
  }

  .modal {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.4);
  }


  .modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
  }


  .close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }
</style>


<body id="top">

  <!-- 
    - #HEADER
  -->

  <header>

    <div class="container">

      <a href="#" class="logo">
        <img src="./public/assets/logo.png" alt="Funel logo">
      </a>

      <div class="navbar-wrapper">

        <button class="navbar-menu-btn" data-navbar-toggle-btn>
          <ion-icon name="menu-outline"></ion-icon>
        </button>

        <nav class="navbar" data-navbar>

          <ul class="navbar-list">

            <li class="nav-item">
              <a href="#home" class="nav-link">Home</a>
            </li>

            <li class="nav-item">
              <a href="#about" class="nav-link">What we do</a>
            </li>

            <li class="nav-item">
              <a href="#features" class="nav-link">Why us?</a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">Our blog</a>
            </li>

            <li class="nav-item">
              <a href="#contact" class="nav-link">Contact</a>
            </li>

          </ul>

          <?php
          session_start();

          if (isset($_SESSION['role']) && $_SESSION['role'] === "user") {
            echo '<a href="http://localhost/agency/view/login/login.php" class="btn btn-primary">Logout</a>';
            session_destroy();
          } else {
            echo '<a href="./view/register/register.php" class="btn btn-primary">Reeeegister</a>';
          }
          ?>

        </nav>

      </div>

    </div>

  </header>





  <main>

    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
        <div class="container">

          <div class="hero-content">

            <h1 class="h1 hero-title">Your full-funnel growth agency</h1>

            <p class="hero-text">
              Capture and retrieve your lists across devices to help you stay organized at work, home, and on the go.
            </p>

            <button class="btn btn-primary">Get started</button>

          </div>

          <div class="hero-banner"></div>

        </div>

        <img src="./public/assets/bg.png" alt="shape" class="shape-content">
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="about" id="about">
        <div class="container">

          <div class="about-content">

            <h2 style="color: black !important;" class="h2 section-title">What we do</h2>

            <p class="section-text">
              Each time a digital asset is purchased or sold, Sequoir donates a percentage of the fees back into the
              development of
              the asset through its charitable foundation.
            </p>

            <div class="about-list-container">
              <?php
              include "./controller/Product/categoryName.php";

              if ($result->num_rows > 0) {


                while ($row = $result->fetch_assoc()) {

              ?>
                  <div class="about-card">
                    <div class="card-icon">
                      <ion-icon name="briefcase-outline"></ion-icon>
                    </div>
                    <h3 class="h3 card-title"><?= $row["category_name"]; ?></h3>
                    <p class="card-text">Description : <?= $row["product_description"]; ?></p>
                    <p class="card-text">Price : <?= $row["product_price"]; ?></p>
                  </div>
              <?php
                }
              } else {

                echo "no data";
              }
              ?>
            </div>

            <div class="about-bottom">
              <figure class="about-bottom-banner">
                <img src="./public/assets/about-banner.png" alt="about banner" class="about-banner">
              </figure>

              <div class="about-bottom-content">

                <h2 class="h2 section-title">We’re obsessed with growth</h2>

                <p class="section-text">
                  Each time a digital asset is purchased or sold, Sequoir donates a percentage of the fees back into
                  the
                  development of the asset through its charitable foundation.
                </p>

                <button class="btn btn-secondary">Sign Up For Free</button>

              </div>

            </div>

          </div>

        </div>
      </section>






      <!-- 
        - #FEATURES
      -->

      <!-- <section class="features" id="features">
        <div class="container">

          <h2 class="h2 section-title">Our team is made up of all different backgrounds from all over the world.</h2>

          <p class="section-text">
            Each time a digital asset is purchased or sold, Sequoir donates a percentage of the fees back into the
            development of
            the asset through its charitable foundation.
          </p>

          <ul class="features-list">

            <li class="features-item">

              <figure class="features-item-banner">
                <img src="./public/assets/feature-1.png" alt="feature banner">
              </figure>

              <div class="feature-item-content">
                <h3 class="h2 item-title">Cover your everyday expenses</h3>

                <p class="item-text">
                  Inspiration comes in many ways and you like to save everything from. sed do eiusmod tempor incididunt
                  ut labore et
                  dolore magna aliqua.
                </p>
              </div>

            </li>

            <li class="features-item">

              <figure class="features-item-banner">
                <img src="./public/assets/feature-2.png" alt="feature banner">
              </figure>

              <div class="feature-item-content">
                <h3 class="h2 item-title">We offer low fees that are transparent</h3>

                <p class="item-text">
                  Each time a digital asset is purchased or sold, Sequoir donates a percentage of the fees back into the
                  development of
                  the asset through its charitable foundation.
                </p>
              </div>

            </li>

          </ul>

        </div>
      </section> -->

      <section class="about" id="about">
        <div class="container">
          <div class="about-content">
            <h2 style="color: black !important;" class="h2 section-title">Our Blog</h2>
            <p class="section-text">
              Each time a digital asset is purchased or sold, Sequoir donates a percentage of the fees back into the
              development of the asset through its charitable foundation.
            </p>
            <div class="about-list-container" style="max-height: 400px; overflow-y: auto;">
              <?php
              $sql = "SELECT * FROM `blog`";
              $result = $connexion->query($sql);

              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
              ?>
                  <div class="about-card" style="width: fit-content;">
                    <div class="card-icon">
                      <ion-icon name="book-outline"></ion-icon>
                    </div>
                    <h3 class="h3 card-title"><?= $row["nom"]; ?></h3>
                    <p class="card-text" id="myBtn">click to read the blog</p>
                    <div id="myModal" class="modal">
                      <div class="modal-content">
                        <span class="close">&times;</span>
                        <p> <?= $row["description"]; ?>
                        </p>
                      </div>

                    </div>

                    <p class="card-text" style="color:blue;">Learn More</p>
                  </div>
              <?php
                }
              } else {
                echo "no data";
              }
              ?>
            </div>
            <div class="about-bottom">
              <!-- Rest of your content -->
            </div>
          </div>
        </div>
      </section>




      <!-- 
        - #CTA
      -->

      <section class="cta">
        <div class="container">

          <div class="cta-card">

            <h3 class="cta-title">Try for 7 days free</h3>

            <p class="cta-text">
              Each time a digital asset is purchased or sold, Sequoir donates a percentage of the fees back.
            </p>

            <form action="" class="cta-form">

              <input type="email" name="email" placeholder="Your email address">

              <button type="submit" class="btn btn-secondary">Try It Now</button>

            </form>

          </div>

        </div>
      </section>





      <!-- 
        - #CONTACT
      -->

      <section class="contact" id="contact">
        <div class="container">

          <div class="contact-content">
            <h2 class="h2 contact-title">Let’s scale your brand, together</h2>

            <figure class="contact-banner">
              <img src="./public/assets/contact.png" alt="contact banner">
            </figure>
          </div>

          <form action="https://getform.io/f/fcff189e-2369-4b47-8850-ab1c512ca864" method="post" class="contact-form">

            <div class="input-wrapper">
              <label for="name" class="input-label">Name *</label>

              <input type="text" name="name" id="name" required placeholder="Type Name" class="input-field">
            </div>

            <div class="input-wrapper">
              <label for="phone" class="input-label">Phone</label>

              <input type="tel" name="phone" id="phone" placeholder="Type Phone Number" class="input-field">
            </div>

            <div class="input-wrapper">
              <label for="email" class="input-label">Email Address *</label>

              <input type="email" name="email" id="email" required placeholder="Type Email Address" class="input-field">
            </div>

            <div class="input-wrapper">
              <label for="message" class="input-label">How can we help? *</label>

              <textarea name="message" id="message" placeholder="Type Description" required class="input-field"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Send Message</button>

          </form>

        </div>
      </section>

    </article>

  </main>


  <!-- 
    - #FOOTER
  -->


  <footer>

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./public/assets/logo.png" alt="Funel logo">
          </a>

          <p class="footer-text">Follow us on</p>

          <ul class="social-list">

            <li>
              <a href="https://github.com/Amit-Ashok-Swain" class="social-link">
                <ion-icon name="logo-github"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://instagram.com/_sanatani_hindutva_?igshid=OGQ5ZDc2ODk2ZA==" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <div class="footer-link-box">

          <ul class="footer-link-list">

            <li>
              <h3 class="h4 link-title">Company</h3>
            </li>

            <li>
              <a href="#" class="footer-link">About Us</a>
            </li>

            <li>
              <a href="#" class="footer-link">Features</a>
            </li>

            <li>
              <a href="#" class="footer-link">Pricing</a>
            </li>

          </ul>

          <ul class="footer-link-list">

            <li>
              <h3 class="h4 link-title">Products</h3>
            </li>

            <li>
              <a href="#" class="footer-link">Blog</a>
            </li>

            <li>
              <a href="#" class="footer-link">Help Center</a>
            </li>

            <li>
              <a href="#" class="footer-link">Contact</a>
            </li>

          </ul>

          <ul class="footer-link-list">

            <li>
              <h3 class="h4 link-title">Resources</h3>
            </li>

            <li>
              <a href="#" class="footer-link">FAQ’S</a>
            </li>

            <li>
              <a href="#" class="footer-link">Testimonial</a>
            </li>

            <li>
              <a href="#" class="footer-link">Terms & Conditions</a>
            </li>

          </ul>

          <ul class="footer-link-list">

            <li>
              <h3 class="h4 link-title">Relevent</h3>
            </li>

            <li>
              <a href="#" class="footer-link">Why</a>
            </li>

            <li>
              <a href="#" class="footer-link">Products</a>
            </li>

            <li>
              <a href="#" class="footer-link">Customers</a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <p class="copyright">
        &copy; 2023 <a href="https://github.com/Amit-Ashok-Swain">Amit Ashok Swain</a> All right reserved
      </p>
    </div>

  </footer>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top active" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./public/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script>
    const modal = document.getElementById("myModal");


    const btn = document.querySelectorAll("#myBtn");


    const span = document.getElementsByClassName("close")[0];


    btn.forEach((event) => {
      event.onclick = function() {
        modal.style.display = "block";
      }
    })


    span.onclick = function() {
      modal.style.display = "none";
    }


    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>

</body>

</html>