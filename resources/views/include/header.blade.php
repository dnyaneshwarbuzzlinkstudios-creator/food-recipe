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

    .nav-link {
  color: white;
  text-decoration: none;
  padding-bottom: 5px;
  position: relative;
}

.nav-link.active::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: -5px;
  width: 100%;
  height: 3px;
  background-color: white;
}

    .main-nav {
    margin-bottom: 4.5rem;
    margin-top: 0.5rem;
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
    font-size: 2.8125em;
  }

  

/* recipe  page  */
.recipe-hero-section {
            background: #000000;
            color: rgb(255, 255, 255);
            padding:2rem;
            text-align: center;
        }
        
        .recipe-hero-main-title {
            font-size: 3.1875em;
            margin-bottom: 20px;
            font-family: 'Playfair Display';
        }
        
        .recipe-hero-subtitle {
            font-family: "Tenor Sans";
    font-size: 2.0625em;
    letter-spacing: 0px;
    line-height: 1.4;
    color: rgb(255, 255, 255);
}
        
        .recipe-main-section {
            padding: 3rem 0;
            background-color: #ffffff;
        }
        
        .recipe-category-tabs {
            border-bottom: 3px solid #e9ecef;
            justify-content: center;
            margin-bottom: 40px;
        }
        
        .recipe-category-tabs .recipe-tab-link {
            color: #0c0000;
    font-size: 1.625em;
    text-align: center;
    word-break: normal;
    font-family: Tenor Sans;
    line-height: 1.4;
    overflow-wrap: anywhere;
    letter-spacing: 0;
    padding:0.3rem 2rem;
        }
        
  .nav-link:hover,
  .nav-link:focus {
    color:  #ffffff;      /* keep normal color */
    text-decoration: none !important; 
    transition: none !important;     /* remove hover animation */
  }





        
        .recipe-category-tabs .recipe-tab-link.active {
    /* color: #fff; */
    /* background-color: #dc3545; */
    /* border-color: #dc3545; */
    border-bottom: 2px solid #000000;
        }
        
        .recipe-video-card {
            border-radius: 15px;
            overflow: hidden;
            margin-bottom: 30px;
            height: 90%;
        }
        
       
        
        .recipe-video-thumbnail {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        .recipe-card-content {
            padding: 20px;
        }
        
        .recipe-video-title {
            color: #0c0000;
            font-size: 1.5625em;
            text-align: center;
            word-break: normal;
            font-family: Playfair Display;
            font-weight: bold;
            line-height: 1.4;
            overflow-wrap: anywhere;
        }
        
        .recipe-video-description {
            color: #0c0000;
    font-size: 1.1875em;
    text-align: center;
    word-break: normal;
    font-family: Tenor Sans;
    line-height: 1.4;
    overflow-wrap: anywhere;
        }
        
        .recipe-video-play-btn {
           
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: rgb(255 16 39 / 74%);
    color: white;
    border: none;
    border-radius: 50%;
    width: 55px;
    height: 55px;
    font-size: 23px;
    transition: all 0.3s ease;
}
        
        .recipe-video-play-btn:hover {
            transform: translate(-50%, -50%) scale(1.1);
        }
        
        .recipe-video-wrapper {
            position: relative;
            overflow: hidden;
        }

        /*  Added unique IDs for each category section */
        #recipe-chicken-section .recipe-video-card {
            border: 1px solid #d1d1d1;
        }

        #recipe-vegetarian-section .recipe-video-card {
            border: 1px solid #d1d1d1;
        }

        #recipe-seafood-section .recipe-video-card {
            border: 1px solid #d1d1d1;
        }

        #recipe-dessert-section .recipe-video-card {
            border: 1px solid #d1d1d1;
        }

        #recipe-beef-section .recipe-video-card {
            border: 1px solid #d1d1d1;
        }

#recipe1 {
    padding: 0 5rem;
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
    .recipe-hero-main-title {
    font-size: 1.8rem;
    margin-bottom: 20px;
    font-family: 'Playfair Display';
}
.recipe-hero-subtitle {
    font-family: "Tenor Sans";
    font-size: 1.25em;
    letter-spacing: 0px;
    line-height: 1.4;
    color: rgb(255, 255, 255);
}
    #recipe1 {
    padding: 0 1rem;
}
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
    font-size: 4.5em;
    letter-spacing: 0em;
    line-height: 1;
    color: rgb(255, 255, 255);

    }
    .sub-heading {
        font-family: "Tenor Sans";
        font-size: 1.525em;
        letter-spacing: 1.5px;
        color: rgb(255, 255, 255);
    }

  /* 2nd  page */
 
  .wf-weekly-favorites {
    padding: 60px 0;
  }

  .wf-section-title {
    font-size: 2rem;
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

            <nav class="main-nav">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" 
                           class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                           Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('recipes') }}" 
                           class="nav-link {{ request()->is('recipes') ? 'active' : '' }}">
                           Recipes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/') }}" 
                           class="nav-link {{ request()->is('') ? 'active' : '' }}">
                           Contact
                        </a>
                    </li>
                </ul>
            </nav>
            
        <!-- Hero -->
    