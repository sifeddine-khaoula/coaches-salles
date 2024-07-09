<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        html, body {
        margin: 0;
        padding: 0;
        width: 100%;
        overflow-x: hidden; 
        background-color: #000;
        
        }
        
        .container {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            width: 100%;
            display: flex;
            flex-direction:column;
            min-height: 100vh;
            position:initial;
        }

        .header {
            background-color: #000;
            display: flex;
            width: 100%;
            flex-direction: column;
            justify-content: center;
            box-sizing: border-box;
        }

        @media (max-width: 991px) {
            .header {
                max-width: 100%;
            }
        }

        .banner {
            background:#090909;
            display: flex;
            width: 100%;
            flex-direction: column;
            padding-bottom: 0;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            box-sizing: border-box;
        
            
        }

        @media (max-width: 991px) {
            .banner {
                max-width: 100%;
            
            }
        }

        .logo-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid rgba(226, 226, 226, 1);
            width: 100%;
            gap: 8px;
            font-size: 21px;
            color: #fff;
            font-weight: 700;
            line-height: 120%;
            padding: 20px 80px;
            box-sizing: border-box;
            cursor:default;
        }

        @media (max-width: 991px) {
            .logo-bar {
                max-width: 100%;
                flex-wrap: wrap;
                padding: 0 20px;
            }
        }

        .logo {
            font: bold 40px Bebas Neue, sans-serif;
            color: #fff; 
        }

        .logo .red-text {
            color: #f00; 
        }

        .menu-toggle {
        display: none;
        background: none;
        border: none;
        color: white;
        font-size: 24px;
        cursor: pointer;
        
       }

        .nav-links {
            align-self: stretch;
            display: flex;
            gap: 20px;
            text-align: center;
            justify-content: space-between;
            margin: auto 0;
            z-index: 10;
            
        }

        @media (max-width: 996px) {
            .nav-links {
                flex-wrap: wrap;
                display: none;
                position: absolute;
                flex-direction: column;
                gap: 0;
                background-color: #121212;
                top: 46px; 
                width: 100%;
                left: 0;
                
                
                }   

            .nav-links.active {
                display: flex;
                
            }

            .nav-item {
                padding: 10px;
                border-bottom: 1px solid #333;
            }

            .menu-toggle {
                display:block;
                margin-left: 10px;
                margin-right: 10px;
                         
            }
        }
    

        .nav-item {
            font-family: Bebas Neue, sans-serif;
            color: white;
            text-decoration: none;
            font-weight: normal;
            padding: 8px;
            margin-left: 10px;
        }

        .nav-item:hover {
        color: #f00;
        }

        button {
            font-family: Bebas Neue, sans-serif;
            background-color: #f00;
            margin-right:5px;
            margin-left: 60px;
            
            padding: 16px 40px;
            color:#fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease; 

        }

        button:hover {
            background-color: #c30042; 
        }

        button:active {
            background-color: #a00336; 
            transform: scale(0.98); 
        }

        @media (max-width: 991px) {
            button {
                padding: 0 20px;
                margin-top: 10px;
                margin-right:45px;
            }
        }
        
        /*footer             */
        .content {
            flex: 1; 
        }

        .footer-wrapper {
            justify-content: center;
            align-items: center;
            background-color: #111316;
            display: flex;
            padding: 24px 0;
            justify-content: space-between;
            width: 100%;
            box-sizing: border-box;
            
            
        }
        .footer-content {
            justify-content: space-between;
            display: flex;
            width: 100%;
            max-width: 1082px;
            gap: 8px;
            padding:  0 80px;
            box-sizing: border-box;
            
            
            
        }
        @media (max-width: 991px) {
            .footer-content {
            max-width: 100%;
            flex-wrap: wrap;
            padding: 0 20px;
            }
        }
        .brand-container {
            align-self: start;
            display: flex;
            flex-direction: column;
            cursor: default;
        }

        .logo-footer {
            font: bold 20px Bebas Neue, sans-serif;
            color: #fff; 
        }

        .logo-footer .red-text-footer {
            color: #f00; 
        }


        .brand-slogan {
            color: #fff;
            margin-top: 16px;
            font: 500 14px/150% Poppins, sans-serif;
        }
        .footer-sections {
            display: flex;
            gap: 20px;
        }
        @media (max-width: 991px) {
            .footer-sections {
            flex-direction: column;
            align-items: stretch;
            gap: 0px;
            }
        }
        .sitemap-section,
        .support-section,
        .social-media-section {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 33%;
            
        }
        @media (max-width: 991px) {
            .sitemap-section,
            .support-section,
            .social-media-section {
            width: 100%;
            }
        }
        .sitemap,
        .support,
        .social-media {
            display: flex;
            flex-direction: column;
            font-size: 16px;
            color: #fff;
            font-weight: 500;
            cursor: default;
        }
        @media (max-width: 991px) {
            .sitemap,
            .support,
            .social-media {
            margin-top: 40px;
            }
        }
        .sitemap-title,
        .support-title,
        .social-media-title {
            font: 700 18px Poppins, sans-serif;
        }
        .sitemap-item,
        .support-item,
        .social-media-item {
            font-family: Poppins, sans-serif;
            margin-top: 16px;
            color: white;
            text-decoration: none;         
        }

        .sitemap-item:hover,
        .support-item:hover,
        .social-media-item:hover {
            color: #f00;
        }


        .support-item:first-child,
        .social-media-item:first-child {
            margin-top: 10px;
        }
        @media (max-width: 991px) {
            .support-item,
            .social-media-item {
            margin-right: 10px;
            }
        }
        .social-media-icons {
            display: flex;
            margin-top: 10px;
            gap: 16px;
            padding-right: 40px;
        }
        @media (max-width: 991px) {
            .social-media-icons {
            padding-right: 20px;
            }
        }

        .social-icon {
            aspect-ratio: 1;
            object-fit: auto;
            object-position: center;
            width: 24px;
            transition: filter 0.3s ease;
        }

        .social-icon-twitter:hover {
            filter: brightness(0) saturate(100%) invert(79%) sepia(92%) saturate(240%) hue-rotate(120deg) brightness(87%) contrast(92%);
        }

        .social-icon-instagram:hover {
            filter: brightness(0) saturate(100%) invert(79%) sepia(92%) saturate(240%) hue-rotate(280deg) brightness(87%) contrast(92%);
        }

        .social-icon-facebook:hover {
            filter: brightness(0) saturate(100%) invert(79%) sepia(92%) saturate(240%) hue-rotate(165deg) brightness(87%) contrast(92%);
        }

        /* droits d'auteur*/
        .footer-container-DA {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #000;
        border-top: 2px solid rgba(72, 72, 72, 1);
        color: #fff;
        font-size: 12px;
        font-weight: 300;
        line-height: 1.33;
        padding: 24px 80px;
        flex-shrink: 0;
        
        }

        .footer-links-DA {
        display: flex;
        gap: 4px;
        align-items: center;
        }

        .footer-link-DA {
        font-family: Poppins, sans-serif;
        color: #fff;
        text-decoration: none;
        }
 

        .footer-rights-DA {
        font-family: Poppins, sans-serif;
        margin-left: auto;
        cursor: default;
        }

        @media (max-width: 991px) {
        .footer-container-DA {
            flex-direction: column;
            align-items: flex-start;
            padding: 0 20px;
        }
        .footer-rights-DA {
            margin-top: 10px; 
            margin-left: 0; 
        }
        }



        

        
    </style>
</head>
<body>
    <div class="container"> 
        <header class="header">
            <div class="banner">    
                <div class="logo-bar">
                     <div class="logo">
                        GOFIT<span class="red-text">PRO</span>
                    </div>
                    <button class="menu-toggle">☰</button>
                    <nav class="nav-links">
                        <a href="#" class="nav-item">Accueil</a>
                        <a href="nossalles" class="nav-item">Salles</a>
                        <a href="coaches" class="nav-item">Coaches</a>
                        <a href="#" class="nav-item">Nutrition</a>
                        <a href="#" class="nav-item">Shop</a>
                        <button class="login">Connexion</button>
                    </nav>
                    
                </div>
            </div>
        </header>
        <div class="content">
            @yield('content')
        </div>
        
        <footer class="footer-wrapper">
            <div class="footer-content">
                <div class="brand-container">
                <div class="logo-footer">
                        GOFIT<span class="red-text-footer">PRO</span>
                </div>
                <div class="brand-slogan">YOUR GOAL, OUR COMMITMENT!</div>
                </div>
                <div class="footer-sections">
                <section class="sitemap-section">
                    <div class="sitemap">
                    <div class="sitemap-title">Sitemap</div>
                    <a href="#" class="sitemap-item">Acceuil</a>
                    <a href="nossalles" class="sitemap-item">Salles</a>
                    <a href="coaches" class="sitemap-item">Coachs</a>
                    <a href="#" class="sitemap-item">Nutrition</a>
                    <a href="#" class="sitemap-item">Shop</a>
                    </div>
                </section>
                <section class="support-section">
                    <div class="support">
                    <div class="support-title">Support</div>
                    <a href="#" class="support-item">FAQ</a>
                    <a href="#" class="support-item">Contactez-nous</a>
                    </div>
                </section>
                <section class="social-media-section">
                    <div class="social-media">
                    <div class="social-media-title">Social Media</div>
                    <div class="social-media-icons">
                        <a href="https://www.instagram.com" target="_blank">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/207af7e1e1d49dec3ebb1bdf0914bdd095814b0b2ae9fa2bb31be9e7b34fa655?apiKey=435338ae13ee446e80458c14b996975e&" class="social-icon-instagram" alt="Instagram" />
                        </a>
                        <a href="https://www.twitter.com" target="_blank">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/9e3a0e1fbb1839bf08bf19afef5b7740f9ff74ba8b51b05846e4e36bf9a43e95?apiKey=435338ae13ee446e80458c14b996975e&" class="social-icon-twitter" alt="Twitter" />
                        </a>
                        <a href="https://www.facebook.com" target="_blank">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/096f05746a66a2cd45952fe99a245d58b2dea2903769d63ce595b0a9677f91b9?apiKey=435338ae13ee446e80458c14b996975e&" class="social-icon-facebook" alt="Facebook" />
                        </a>
                    </div>

                    </div>
                </section>
                </div>
            </div>
        </footer>
        
        <div class="footer-container-DA">
            <div class="footer-links-DA">
                <a href="/privacy-policy" target="_blank" class="footer-link-DA">Confidentialité</a>
                <div class="slash">/</div>
                <a href="/terms-and-conditions" target="_blank" class="footer-link-DA">Termes et Conditions</a>
            </div>
            <div class="footer-rights-DA">Ⓒ 2023 Tous les droits sont réservés à GoFitPro Company.</div>
        </div>
    </div>
    <script>
        // JavaScript to toggle the navigation menu
        document.querySelector('.menu-toggle').addEventListener('click', function() {
        document.querySelector('.nav-links').classList.toggle('active');
        });


    </script>
</body>
</html>
