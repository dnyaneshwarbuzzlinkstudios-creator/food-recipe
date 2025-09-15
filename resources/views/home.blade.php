<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cook with Judy & Flo - Food Recipes</title>
  <link rel="icon" type="image/png" href="{{ asset('images/favicon.ico') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
@font-face {
    font-family: 'Playfair Display';
    src: url('{{ asset("font/PlayfairDisplay-Regular.ttf") }}') format('truetype');
    font-weight: 400;
    font-style: normal;
}
@font-face {
    font-family: 'Tenor Sans';
    src: url('{{ asset("font/TenorSans-Regular.ttf") }}') format('truetype');
    font-weight: 400;
    font-style: normal;
}
@font-face {
    font-family: 'Font1';
    src: url('{{ asset("font/font1.woff2") }}') format('woff2');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'Font2';
    src: url('{{ asset("font/nuFvD-font2.woff2") }}') format('woff2');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'Font3';
    src: url('{{ asset("font/font3.woff2") }}') format('woff2');
    font-weight: normal;
    font-style: normal;
}


    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Playfair Display";
      overflow-x: hidden;
    }

    /* Fixed Background */
    .fixed-background {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url('{{ asset("images/bg.jpg") }}');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      z-index: -2;
    }

    .svg-overlay {
  position: absolute;
  opacity: 0.9;
  pointer-events: none;
  filter: invert(1); /* turns black → white */
}


.tomato {
    top: 30%;
    left: -1%;
    width: 15rem;
}

.onion {
    top: 0;
    right: 23%;
    width: 11rem;
}

.spoon {
    bottom: 50%;
    right: -4%;
    width: 16rem;
}


    /* Fixed Decorative Elements */
    .fixed-elements {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh;
      z-index: -1;
      pointer-events: none;
    }

    .decoration {
      position: absolute;
    }

    /* Decoration positions */
    .decoration-1 { top: 12%; left: 6%; }
    .decoration-2 { top: 8%; right: 12%; }
    .decoration-3 { bottom: 25%; left: 8%; }
    .decoration-4 { top: 35%; right: 5%; }
    .decoration-5 { bottom: 12%; right: 10%; }
    .decoration-6 { top: 45%; left: 3%; }

    /* Content Wrapper */
    .content-wrapper {
      position: relative;
      z-index: 1;
      min-height: 100%;
    }

    .main-content {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 11rem;
    }

    /* Slate Board */
    .slate-board {
      display: flex;
      margin-top:3.5rem;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    /* Logo */
    .logo-container { margin-bottom: 35px; }
    .logo-circle {
      width: 12rem;
      height: 12rem;
      background: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
      border: 2px solid #f0f0f0;
    }

    .logo-text { text-align: center; line-height: 1.1; }
    .cook-text, .with-text {
      display: block;
      font-size: 11px;
      font-weight: bold;
      color: #333;
      letter-spacing: 1.2px;
    }
    .names-container { display: block; margin: 3px 0; }
    .judy-text, .flo-text {
      font-size: 18px;
      font-weight: bold;
      color: #7ed321;
      letter-spacing: 1.5px;
    }
    .ampersand { font-size: 16px; color: #333; margin: 0 3px; font-weight: bold; }
    .recipes-text {
      display: block;
      font-size: 11px;
      color: #ff6b35;
      font-style: italic;
      margin-top: 3px;
      font-weight: 500;
    }

    /* Navigation */
    .main-nav {
    margin-bottom: 4.5rem;
    margin-top: 1.5rem;
    }
    .nav-list {
      list-style: none;
      display: flex;
      gap: 45px;
      margin: 0;
      padding: 0;
    }
    .nav-item { position: relative; }
    .nav-link {
    color: white;
    text-decoration: none;
    font-size: 1.18rem;
    font-weight: 300;
    /* transition: color 0.3s ease; */
    font-weight: normal;
    font-family: 'Tenor Sans';
}
    .nav-item.active .nav-link { color: white; }
    .nav-item.active::after {
      content: "";
      position: absolute;
      bottom: -10px;
      left: 0;
      right: 0;
      height: 3px;
      background: white;
      border-radius: 2px;
    }

    /* Hero Content */
    .hero-content h1 {
        font-family: "Playfair Display";
    font-size: 7.325em;
    letter-spacing: 0em;
    line-height: 1;
    color: rgb(255, 255, 255);

    }
   
    .view-recipes-btn {
      background: white;
      color: #0c0000;
    font-family: Poppins;
    font-size: 1.25em;
    font-weight: normal;
    text-align: center;
    line-height: 1.5;
      border: none;
      padding: 15px 57px;
      word-break: normal;
    box-shadow: ;
    border-color: #0c0000;
    border-style: solid;
    border-width: 2px;
    border-radius: 0;
    background-color: #ffffff;
    }
    .sub-heading {
        font-family: "Tenor Sans";
        font-size: 2.125em;
        line-height: 1.1;
        color: rgb(255, 255, 255);
    }
   

    /* Responsive */
   




    /* 2 nd  page  */
.sidepadding {
    padding: 0 6rem;
}
    #weeklyFavoritesSection {
      background:#ffffff;
    }
    font-family: "Playfair Display";
    font-size: 2.8125em;
    line-height: 1.1;
    color: rgb(12, 0, 0);

/* Recipe Cards */
.wf-recipe-card {
  background: #fff;
  border-radius: 0;
  overflow: hidden;
  height: 100%;
  display: flex;
  flex-direction: column;
}



.wf-recipe-image {
  position: relative;
  overflow: hidden;
  height: 250px;
}

.wf-recipe-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 10px;
}



..wf-recipe-content {
    padding: 1rem 0rem;
  text-align: center;
  flex-grow: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.wf-recipe-title {
    color: #0c0000;
    font-size: 1.5625em;
    text-align: center;
    word-break: normal;
    font-family: Playfair Display;
    font-weight: bold;
    line-height: 1.4;
    overflow-wrap: anywhere;
    margin:0.8rem 0px;
}

.wf-recipe-description {
    color: #0c0000;
    font-size: 1.1875em;
    text-align: center;
    word-break: normal;
    font-family: Tenor Sans;
    line-height: 1.4;
    overflow-wrap: anywhere;
}

/* Footer Section */
.wf-footer-section {
  background-color: #f8f9fa;
  border-top: 1px solid #e9ecef;
}

/* Footer Logo */
.wf-footer-logo {
  display: flex;
  align-items: center;
}

.wf-logo-circle {
  width: 80px;
  height: 80px;
  background: #2c2c2c;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  border: 3px solid #fff;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.wf-logo-text {
  text-align: center;
  line-height: 1;
}

.wf-cook-with {
  font-size: 8px;
  font-weight: 600;
  color: #7ed321;
  letter-spacing: 0.5px;
  margin-bottom: 1px;
}

.wf-judy-flo {
  font-size: 10px;
  font-weight: 700;
  color: #7ed321;
  letter-spacing: 0.5px;
  margin-bottom: 1px;
}

.wf-recipes {
  font-size: 8px;
  font-weight: 500;
  color: #ff6b35;
  letter-spacing: 0.5px;
}

/* Copyright */
.wf-copyright-text {
  font-size: 0.9rem;
  color: #666;
  font-weight: 400;
}

/* Social Icons */
.wf-social-icons {
  display: flex;
  gap: 15px;
  justify-content: center;
}

.wf-social-icon {
  width: 40px;
  height: 40px;
  background: #2c2c2c;
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  text-decoration: none;
  transition: all 0.3s ease;
  font-size: 16px;
}
.wf-section-title {
    padding: 0.5em 0px;
  }



/* Responsive Design */
@media (max-width: 991.98px) {
  .wf-section-title {
    font-size: 2.5rem;
  }

  .wf-social-icons {
    justify-content: center;
  }

  .wf-footer-logo {
    justify-content: center;
  }
}


/* footer  */
/* Footer Section Styles */
.footer-main-section {
  background-color: #ffffff;
  padding: 40px 0;
  border-top: 1px solid #f0f0f0;
}

.footer-main-row {
  min-height: 80px;
}

/* Logo Styles */
.footer-logo-container {
  display: flex;
  justify-content: center;
  align-items: center;
}

.footer-logo-circle {
  width: 120px;
  height: 120px;
  background-color: #2c2c2c;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  border: 4px solid #ffffff;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.footer-logo-text {
  text-align: center;
  font-family: "Inter", sans-serif;
  font-weight: 700;
  line-height: 1.1;
}

.footer-logo-cook {
  color: #ffffff;
  font-size: 11px;
  letter-spacing: 0.5px;
  margin-bottom: 2px;
}

.footer-logo-names {
  color: #7ed321;
  font-size: 16px;
  font-weight: 800;
  letter-spacing: 0.5px;
  margin-bottom: 2px;
}

.footer-logo-recipes {
  color: #ff6b35;
  font-size: 12px;
  font-weight: 600;
  font-style: italic;
  letter-spacing: 0.3px;
}

/* Copyright Styles */
.footer-copyright-text {
    color: #0c0000;
    font-size: 1.25em;
    word-break: normal;
    font-family: Poppins;
    line-height: 1.1;
    overflow-wrap: anywhere;
}

/* Social Icons Styles */
.footer-social-icons {
  display: flex;
  gap: 20px;
  justify-content: center;
  align-items: center;
}

.footer-social-link {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  color: #333333;
  text-decoration: none;
  transition: all 0.3s ease;
  border-radius: 8px;
}


.footer-social-icon {
  width: 24px;
  height: 24px;
}

/* Responsive Design */





/* Responsive Design */


@media (max-width: 767.98px) {
   
    .section-title {
    font-size: 2.5rem;
  }

  .social-icons {
    justify-content: center;
  }

  .footer-logo {
    justify-content: center;
  }
  .hero-content h1 {
        font-family: "Playfair Display";
    font-size: 5em;
    letter-spacing: 0em;
    line-height: 1;
    color: rgb(255, 255, 255);

    }
    .sub-heading {
        font-family: "Tenor Sans";
        font-size: 1.525em;
        letter-spacing: 1.5px;
        line-height: 1.1;
        color: rgb(255, 255, 255);
    }

  /* 2nd  page */
 
  .wf-weekly-favorites {
    padding: 60px 0;
  }

  .wf-section-title {
    font-size: 2rem;

    margin-bottom: 40px;
  }

  .wf-recipe-content {
    padding: 1rem 0rem
  }

  .wf-recipe-title {
    font-size: 1.3rem;
  }

  .wf-recipe-description {
    font-size: 0.9rem;
  }

  .wf-logo-circle {
    width: 70px;
    height: 70px;
  }

  .wf-cook-with,
  .wf-judy-flo {
    font-size: 7px;
  }

  .wf-recipes {
    font-size: 7px;
  }
  .sidepadding {
    padding: 0 1rem;
}

  /* footer */
  .footer-social-icons {
    justify-content: flex-end;
  }
  .footer-main-section {
    padding: 30px 0;
  }

  .footer-logo-circle {
    width: 100px;
    height: 100px;
  }

  .footer-logo-cook {
    font-size: 10px;
  }

  .footer-logo-names {
    font-size: 14px;
  }

  .footer-logo-recipes {
    font-size: 11px;
  }

  .footer-copyright-text {
    font-size: 14px;
  }

  .footer-social-icons {
    justify-content: center;
    margin-top: 10px;
  }

  .footer-social-link {
    width: 36px;
    height: 36px;
  }

  .footer-social-icon {
    width: 20px;
    height: 20px;
  }

  .tomato {
    top: 28%;
    left: -5%;
    width: 10rem;
}

.onion {
    top: 0;
    right: 6%;
    width: 11rem;
}

.spoon {
    bottom: 50%;
    right: -19%;
    width: 15rem;
}

}

@media (max-width: 575.98px) {
  .wf-section-title {
    font-size: 1.8rem;
  }

  .wf-recipe-image {
    height: 200px;
  }

  .wf-social-icon {
    width: 35px;
    height: 35px;
    font-size: 14px;
  }

  /* footer */
  .footer-main-section {
    padding: 25px 0;
  }

  .footer-main-row {
    text-align: center;
  }

  .footer-social-icons {
    gap: 15px;
    margin-top: 15px;
  }
}

  </style>
</head>
<body>
  <!-- Fixed Background -->
  <div class="fixed-background">
  <!-- SVG Overlays -->
    <img src="{{ asset('images/icon2.svg') }}" class="svg-overlay tomato">
    <img src="{{ asset('images/icon.svg') }}" class="svg-overlay onion">
    <img src="{{ asset('images/icon3.svg') }}" class="svg-overlay spoon">
    </div>


  <!-- Scrollable Content -->
  <div class="content-wrapper">
    <!-- Main Content Area -->
    <div class="main-content">
      <div class="slate-board">
        <!-- Logo -->
        <div class="logo-container">
            <div class="logo-circle">
                <img src="{{ asset('images/logo3.png') }}" alt="Cook with Judy & Flo" class="logo-img" style="width: 14rem;height: 14rem;">
            </div>
            </div>

        
        <!-- Navigation -->
        <nav class="main-nav">
          <ul class="nav-list">
            <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Recipes</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
          </ul>
        </nav>

        <!-- Hero -->
        <div class="hero-content">
          <h1 class="main-heading">Food Recipes</h1>
          <p class="sub-heading"><span>Delicious Home-Cooked Meals Made Easy</span></p>
          <button class="view-recipes-btn">View Recipes</button>
        </div>
      </div>
    </div>

    <!-- Extra Section to Enable Scrolling -->
        <div class="container-fluid" style="background: #ffffff;">
            <!-- Section Title -->
            <div class="row ">
                <div class="col-12 text-center justify-content-center align-items-center">
                    <h1 class="wf-section-title" style="font-size: 2.81rem;">Weekly Favorites</h1>
                </div>
            </div>

            <div class="row mb-4 justify-content-center">
                <!-- Search Box -->
                <div class="col-lg-3 col-md-6 col-12 mb-2 mb-md-0">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search recipes...">
                        <span class="input-group-text bg-white">
                            <!-- Search Icon (Bootstrap Icon) -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001l3.85 3.85a1 1 0 0 0 
                                    1.415-1.414l-3.85-3.85zm-5.242.656a5 5 0 1 
                                    1 0-10 5 5 0 0 1 0 10z"/>
                            </svg>
                        </span>
                    </div>
                </div>

                <!-- Category Dropdown -->
                <div class="col-lg-3 col-md-4 col-12">
                    <select class="form-select">
                        <option selected disabled>Select Category</option>
                        <option value="chicken">Chicken</option>
                        <option value="beef">Beef</option>
                        <option value="seafood">Seafood</option>
                        <option value="vegetarian">Vegetarian</option>
                        <option value="dessert">Dessert</option>
                    </select>
                </div>
            </div>

            
            <!-- Recipe Cards -->
            <div class="row g-4 mb-3 sidepadding">
                <!-- Bacon-Wrapped Chicken -->
    <!-- Bacon-Wrapped Chicken -->
                <div class="col-lg-4 col-md-6">
                    <div class="wf-recipe-card h-100 d-flex flex-column">
                        <div class="wf-recipe-image">
                            <img src="{{ asset('images/img3.jpeg') }}" alt="Bacon-Wrapped Chicken" class="img-fluid">
                        </div>
                        <div class="wf-recipe-content text-center">
                            <h3 class="wf-recipe-title">Bacon-Wrapped Chicken</h3>
                            <p class="wf-recipe-description">Crispy on the outside, juicy on the inside</p>
                        </div>
                    </div>
                </div>

                <!-- Grilled Ribeye Steak -->
                <div class="col-lg-4 col-md-6">
                    <div class="wf-recipe-card h-100 d-flex flex-column">
                        <div class="wf-recipe-image">
                            <img src="{{ asset('images/img2.jpeg') }}" alt="Grilled Ribeye Steak" class="img-fluid">
                        </div>
                        <div class="wf-recipe-content  text-center">
                            <h3 class="wf-recipe-title">Grilled Ribeye Steak</h3>
                            <p class="wf-recipe-description">Flavor that goes beyond the bone</p>
                        </div>
                    </div>
                </div>

                <!-- Salmon Poke Bowl -->
                <div class="col-lg-4 col-md-6">
                    <div class="wf-recipe-card h-100 d-flex flex-column">
                        <div class="wf-recipe-image">
                            <img src="{{ asset('images/img1.jpeg') }}" alt="Salmon Poke Bowl" class="img-fluid">
                        </div>
                        <div class="wf-recipe-content  text-center">
                            <h3 class="wf-recipe-title">Salmon Poke Bowl</h3>
                            <p class="wf-recipe-description">Light, refreshing, and bursting with taste</p>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row align-items-center footer-main-row">
                <!-- Logo -->
                <div class="col-lg-4 col-md-4 col-12 text-center text-md-start mb-3 mb-md-0">
                    <div class="footer-logo-container">
                    <div class="">
                        <img src="{{ asset('images/logo3.png') }}" alt="Bacon-Wrapped Chicken" style="width: 100%;height: 100%;max-width: 13rem;max-height: 13rem;">
                    </div>
                    </div>
                </div>
                
                <!-- Copyright -->
                <div class="col-lg-4 col-md-4 col-12 text-center mb-3 mb-md-0">
                    <p class="footer-copyright-text">© 2024. All Rights Reserved.</p>
                </div>
                
                <!-- Social Icons -->
                <div class="col-lg-4 col-md-4 col-12 text-center text-md-end">
  <div class="footer-social-icons">
    <!-- Facebook -->
    <a href="https://www.facebook.com/share/1BEgEM7p1d/" 
       class="footer-social-link" 
       aria-label="Facebook" target="_blank">
      <svg xmlns="http://www.w3.org/2000/svg" 
           viewBox="0 0 16 16" 
           class="footer-social-icon" 
           fill="currentColor">
        <path d="M6.2965 3.7118v1.9264H5V8h1.2965v7H8.96V8h1.7883s.1669-1.134.2517-2.3702H8.9704V4.0184c0-.2408.2909-.56.5779-.56H11V1H9.0265c-2.7952 0-2.73 2.359-2.73 2.7118Z"/>
      </svg>
    </a>

    <!-- Instagram -->
    <a href="https://www.instagram.com/cookwithjudyandflo?igsh=a20xcTJxdGJxbzBq" 
       class="footer-social-link" 
       aria-label="Instagram" target="_blank">
      <svg xmlns="http://www.w3.org/2000/svg" 
           viewBox="0 0 16 16" 
           class="footer-social-icon" 
           fill="currentColor">
        <path fill-rule="evenodd" clip-rule="evenodd" 
          d="M7.7163 2c-1.6296 0-1.8336.0072-2.4732.036-.4978.01-.9904.104-1.4568.2784a2.9448 2.9448 0 0 0-1.0632.6924A2.9448 2.9448 0 0 0 2.0307 4.07a4.4126 4.4126 0 0 0-.2784 1.4568c-.0288.6396-.036.8436-.036 2.4732s.0072 1.8336.036 2.4732c.01.4978.104.9904.2784 1.4568a2.945 2.945 0 0 0 .6924 1.0632 2.945 2.945 0 0 0 1.0632.6924c.4664.1743.959.2685 1.4568.2784.6396.0288.84.036 2.4732.036s1.8336-.0072 2.4732-.036a4.4124 4.4124 0 0 0 1.4568-.2784 3.0688 3.0688 0 0 0 1.7556-1.7556 4.4124 4.4124 0 0 0 .2784-1.4568c.0288-.6396.036-.84.036-2.4732s-.0072-1.8336-.036-2.4732a4.4123 4.4123 0 0 0-.2784-1.4568 2.945 2.945 0 0 0-.6924-1.0632 2.945 2.945 0 0 0-1.0632-.6924 4.4126 4.4126 0 0 0-1.4568-.2784C9.5499 2.0072 9.3459 2 7.7163 2Zm0 2.9184a3.0816 3.0816 0 1 0 0 6.1632 3.0816 3.0816 0 0 0 0-6.1632Zm0 5.082A2.0004 2.0004 0 1 1 9.7167 8a2.0016 2.0016 0 0 1-2.0004 2.0004Zm3.9228-5.2032a.72.72 0 1 1-1.44 0 .72.72 0 0 1 1.44 0Z"/>
      </svg>
    </a>

    <!-- YouTube -->
    <a href="https://www.youtube.com/@cookwithjudyandflo" 
       class="footer-social-link" 
       aria-label="YouTube" target="_blank">
      <svg xmlns="http://www.w3.org/2000/svg" 
           viewBox="0 0 16 16" 
           class="footer-social-icon" 
           fill="currentColor">
        <path d="M14.86 5.239c0-.0429-.14-1-.5852-1.4559a2.0226 2.0226 0 0 0-.6437-.4495 2.157 2.157 0 0 0-.7815-.1817H12.76C10.863 3.0221 8.035 3 7.9888 3c-.0238 0-2.8756.022-4.7488.1961h-.07a2.0855 2.0855 0 0 0-.7825.1765 1.9512 1.9512 0 0 0-.6399.4534C1.28 4.283 1.14 5.261 1.14 5.3039A20.2973 20.2973 0 0 0 1 7.5221v1.0208c0 1.087.14 2.1961.14 2.2181 0 .0429.14 1 .5852 1.4559.49.5195 1.0738.587 1.449.6312a.5391.5391 0 0 1 .1862.022c1.0752.087 4.487.1299 4.6284.1299.0224 0 2.8742 0 4.767-.1961h.07a2.084 2.084 0 0 0 .7847-.1757 1.95 1.95 0 0 0 .6419-.4542c.4676-.4571.6076-1.435.6076-1.4779.0872-.7367.1339-1.477.14-2.2182V7.4571c0-1.0805-.14-2.196-.14-2.2181Zm-8.274 4.9129V6.174l3.7394 2.0429-3.7394 1.935Z"/>
      </svg>
    </a>
  </div>
</div>

            </div>
        </div>
       
           
      
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
