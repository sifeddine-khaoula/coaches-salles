@extends('layouts.gofitprolay')

@section('title', 'Salles')

@section('content')

    <style>
        /*             title+image            */
        .salle-section {
            
            padding:  0;
            margin-bottom: 0; 
            text-align: center;
            color: white; 
            font-family: Poppins, sans-serif; 
            cursor: default;
        }

        .salle-background {
            width: 100%;
            display: block;
        }

        .salle-title {
            position: absolute;
            padding-top: 35%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 6vw; 
            z-index: 1; 
        }


 
        /*              search bar                */
        .search-bar {
            background-color: #111316;
            display: flex;
            justify-content: flex-end;
            gap: 0;
            color: #fafafa;
            font-weight: 400;
            padding: 10px 80px;
            
            
        }
        @media (max-width: 991px) {
            .search-bar {
            flex-wrap: wrap;
            padding: 0 20px;
            }
        }
        .city-selection {
            background-color:#545454;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px;
            margin-top: 5px;
            margin-bottom: 5px;
            
            
            
        }
        .city-selection select {
            
            background: #545454; 
            color: white; 
            border: none;
            font: 16px Lato, sans-serif;
            width: 100%; 
            padding: 5px; 
            cursor: pointer;
            
            
        }
        @media (max-width: 991px) {
            .city-selection {
            padding: 5px 5px ;
            
            
            
            }
        }
        .search-button {
            background-color: red;
            letter-spacing: 1.44px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 19px 33px;
            font: 18px Lato, sans-serif;
            border: none;
            color: #fafafa;
            cursor: pointer;
            margin-top: 5px;
            margin-bottom: 5px;
            transition: background-color 0.3s ease;
            
        }

        .search-button:hover {
            background-color: #c30042; 
        }

        .search-button:active {
            background-color: #a00336; 
            transform: scale(0.98); 
        }
        
        @media (max-width: 991px) {
            .search-button {
            padding: 10px 10px;
            margin-right: 28px;
            margin-left: 10px;
            }
        }

        .container {
            display: block;
        }

        /*            casablanca section                */
        .container-casablanca {
            padding: 56px 56px;
        }

        .flex-layout-casa {
            gap: 20px;
            display:flex;
        }

        @media (max-width: 991px) {
            .flex-layout-casa {
            flex-direction: column;
            align-items: stretch;
            gap: 0px;
            }
        }

        .column-30-casa {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 30%;
            margin-left: 0;
        }

        @media (max-width: 991px) {
            .column-30-casa {
            width: 100%;
            }
        }

        .column-70-casa {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 70%;
            margin-left: 20px;
        }

        @media (max-width: 991px) {
            .column-70-casa {
            width: 100%;
            margin-left: 18px;
            }
        }

        .item-details-casa {
            display: flex;
            margin-top: 8px;
            flex-grow: 1;
            flex-direction: column;
            font-weight: 400;
            letter-spacing: 1.92px;
        }

        @media (max-width: 991px) {
            .item-details-casa {
            margin-top: 40px;
            }
        }

        .brand-casa {
            display: flex;
            gap: 12px;
            font-size: 32px;
            letter-spacing:0;
            color: #f00;
            white-space: nowrap;
            padding: 0 20px;
            cursor: default;
        }

        @media (max-width: 991px) {
            .brand-casa {
            white-space: initial;
            
            }
        }

        .line-casa {
            aspect-ratio:  3/0.006;
            object-fit: cover;
            object-position: center;
            width: 45px;
            border: 2px solid #fd0054;
            margin: auto 0;
        }

        .city-name-casa {
            font-family: "Bebas Neue", sans-serif;
            flex-grow: 1;
        }

        .location-details-casa {
            display: flex;
            margin-top: 20px;
            gap: 20px;
            font-size: 22px;
            color: #fff;
            text-align: center;
            padding: 0 20px;
        }

        .location-icon-casa {
            
            object-fit: cover;
            object-position: center;
            width: 29px;
            align-self: start;
            
        }

        .location-text-casa {
            font-family: "Bebas Neue", sans-serif;
            flex-grow: 1;
        }

        .location-map-casa {
            aspect-ratio: 1.49/1;
            object-fit: cover;
            object-position: center;
            width: 100%;
            margin-top: 45px;
            margin-left:20px ;
        }

        @media (max-width: 991px) {
            .location-map-casa {
            margin-top: 40px;
            }
        }

        .main-image-casa {
            aspect-ratio: 1.82/1;
            object-fit: cover;
            object-position: center;
            width: 100%;
            flex-grow: 1;
            max-width: 735px;
            margin-right: 20px;
        }

        @media (max-width: 991px) {
            .main-image-casa {
            max-width: 100%;
            margin-top: 40px;
            }
        }








        /*            rabat section                */
        .container-rabat {
            margin-top: 2vw;
            padding: 56px 56px;
            
        }

        .flex-layout-rabat {
            gap: 10px;
            display: flex;
        }

        @media (max-width: 991px) {
            .flex-layout-rabat {
                flex-direction: column-reverse;
                align-items: stretch;
                gap: 0px;
            }
        }

        .column-30-rabat {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 30%;
            margin-left:0;
        }

        @media (max-width: 991px) {
            .column-30-rabat {
                width: 100%;
                
                /*   *******************stoped here*/
                
            }
        }

        .column-70-rabat {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 63%;
            margin-left: 0;
            margin-right: 30px;
        }

        @media (max-width: 991px) {
            .column-70-rabat {
                width: 100%;
                margin-left: 18px;
            }
        }

        .item-details-rabat {
            display: flex;
            flex-direction: column;
            margin-top: 8px;
            flex-grow: 1;
            flex-direction: column;
            font-weight: 400;
            letter-spacing: 1.92px;
        }

        @media (max-width: 991px) {
            .item-details-rabat {
                margin-top: 10px;
            }
        }

        .brand-rabat {
            display: flex;
            gap: 12px;
            font-size: 32px;
            color: #f00;
            white-space: nowrap;
            padding: 0 20px;
            cursor: default;

        }

        @media (max-width: 991px) {
            .brand-rabat {
                white-space: initial;
            }
        }



        .main-image-rabat {
            aspect-ratio: 1.82/1;
            object-fit: cover;
            object-position: center;
            width: 100%;
            flex-grow: 1;
            max-width: 735px;
            margin-left: 20px;
        }

        @media (max-width: 991px) {
            .main-image-rabat {
                max-width: 100%;
                margin-top: 40px;
                margin-left: 0;
               
            }
        }


        .line-rabat {
            aspect-ratio:  3/0.006;
            object-fit: cover;
            object-position: center;
            width: 45px;
            border: 2px solid #fd0054;
            margin: auto 0;
        }

        .location-text-rabat {
            font-family: 'Bebas Neue', sans-serif;
            flex-grow: 1;
        }

        .location-details-rabat {
            display: flex;
            margin-top: 20px;
            gap: 20px;
            font-size: 22px;
            color: #fff;
            text-align: center;
            padding: 0 20px;
        }

        .location-icon-rabat {
            object-fit: cover;
            object-position: center;
            width: 29px;
            align-self: start;
        }

        .city-name-rabat {
            font-family: 'Bebas Neue', sans-serif;
            flex-grow: 1;
        }

        .location-map-rabat {
            aspect-ratio: 1.49/1;
            object-fit: cover;
            object-position: center;
            width: 100%;
            margin-top: 45px;
            margin-right:0 ;
        }

        @media (max-width: 991px) {
            .location-map-rabat {
                margin-top: 40px;
                margin-left: 20px;
            }
        }






        /*            marrakech section                */
        .container-marrakech {
            margin-top: 2vw;
            padding: 56px 56px;
        }

        .flex-layout-marrakech {
            gap: 20px;
            display:flex;
        }

        @media (max-width: 991px) {
            .flex-layout-marrakech {
            flex-direction: column;
            align-items: stretch;
            gap: 0px;
            }
        }

        .column-30-marrakech {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 30%;
            margin-left: 0;
        }

        @media (max-width: 991px) {
            .column-30-marrakech {
            width: 100%;
            }
        }

        .column-70-marrakech {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 70%;
            margin-left: 20px;
        }

        @media (max-width: 991px) {
            .column-70-marrakech {
            width: 100%;
            margin-left: 18px;
            }
        }

        .item-details-marrakech {
            display: flex;
            margin-top: 8px;
            flex-grow: 1;
            flex-direction: column;
            font-weight: 400;
            letter-spacing: 1.92px;
        }

        @media (max-width: 991px) {
            .item-details-marrakech {
            margin-top: 10px;
            }
        }

        .brand-marrakech {
            display: flex;
            gap: 12px;
            font-size: 32px;
            letter-spacing:0;
            color: #f00;
            white-space: nowrap;
            padding: 0 20px;
            cursor: default;
        }

        @media (max-width: 991px) {
            .brand-marrakech {
            white-space: initial;
            
            }
        }

        .line-marrakech {
            aspect-ratio:  3/0.003;
            object-fit: cover;
            object-position: center;
            width: 45px;
            border: 2px solid #fd0054;
            margin: auto 0;
        }

        .city-name-marrakech {
            font-family: "Bebas Neue", sans-serif;
            flex-grow: 1;
        }

        .location-details-marrakech {
            display: flex;
            margin-top: 20px;
            gap: 20px;
            font-size: 22px;
            color: #fff;
            text-align: center;
            padding: 0 20px;
        }

        .location-icon-marrakech {
            
            object-fit: cover;
            object-position: center;
            width: 29px;
            align-self: start;
            
        }

        .location-text-marrakech {
            font-family: "Bebas Neue", sans-serif;
            flex-grow: 1;
        }

        .location-map-marrakech {
            aspect-ratio: 1.49/1;
            object-fit: cover;
            object-position: center;
            width: 100%;
            margin-top: 45px;
            margin-left:20px ;
        }

        @media (max-width: 991px) {
            .location-map-marrakech {
            margin-top: 40px;
            }
        }

        .main-image-marrakech {
            aspect-ratio: 1.82/1;
            object-fit: cover;
            object-position: center;
            width: 100%;
            flex-grow: 1;
            max-width: 735px;
            margin-right: 20px;
        }

        @media (max-width: 991px) {
            .main-image-marrakech {
            max-width: 100%;
            margin-top: 40px;
            }
        }





        /*            agadir section                */
        .container-agadir {
            margin-top: 2vw;
            padding: 56px 56px;
            
        }

        .flex-layout-agadir {
            gap: 10px;
            display: flex;
        }

        @media (max-width: 991px) {
            .flex-layout-agadir {
                flex-direction: column-reverse;
                align-items: stretch;
                gap: 0px;
            }
        }

        .column-30-agadir {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 30%;
            margin-left:0;
        }

        @media (max-width: 991px) {
            .column-30-agadir {
                width: 100%;
              
            }
        }

        .column-70-agadir {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 63%;
            margin-left: 0;
            margin-right: 30px;
        }

        @media (max-width: 991px) {
            .column-70-agadir {
                width: 100%;
                margin-left: 18px;
            }
        }

        .item-details-agadir {
            display: flex;
            flex-direction: column;
            margin-top: 8px;
            flex-grow: 1;
            flex-direction: column;
            font-weight: 400;
            letter-spacing: 1.92px;
        }

        @media (max-width: 991px) {
            .item-details-agadir {
                margin-top: 10px;
            }
        }

        .brand-agadir {
            display: flex;
            gap: 12px;
            font-size: 32px;
            color: #f00;
            white-space: nowrap;
            padding: 0 20px;
            cursor: default;
           

        }

        @media (max-width: 991px) {
            .brand-agadir {
                white-space: initial;
            }
        }



        .main-image-agadir {
            aspect-ratio: 1.82/1;
            object-fit: cover;
            object-position: center;
            width: 100%;
            flex-grow: 1;
            max-width: 735px;
            margin-left: 20px;
        }

        @media (max-width: 991px) {
            .main-image-agadir {
                max-width: 100%;
                margin-top: 40px;
                margin-left: 0;
               
            }
        }


        .line-agadir {
            aspect-ratio:  3/0.006;
            object-fit: cover;
            object-position: center;
            width: 45px;
            border: 2px solid #fd0054;
            margin: auto 0;
        }

        .location-text-agadir {
            font-family: 'Bebas Neue', sans-serif;
            flex-grow: 1;
        }

        .location-details-agadir {
            display: flex;
            margin-top: 20px;
            gap: 20px;
            font-size: 22px;
            color: #fff;
            text-align: center;
            padding: 0 20px;
        }

        .location-icon-agadir {
            object-fit: cover;
            object-position: center;
            width: 29px;
            align-self: start;
        }

        .city-name-agadir {
            font-family: 'Bebas Neue', sans-serif;
            flex-grow: 1;
        }

        .location-map-agadir {
            aspect-ratio: 1.49/1;
            object-fit: cover;
            object-position: center;
            width: 100%;
            margin-top: 45px;
            margin-right:0 ;
        }

        @media (max-width: 991px) {
            .location-map-agadir {
                margin-top: 40px;
                margin-left: 20px;
            }
        }

        

    </style>

    <section class="salle-section">
        <div class="salle-title">NOS SALLES</div>
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/2d9d807ecea12e884830ecd3dda6b273bee4343e90566a051177c3e3272d4dcf?apiKey=435338ae13ee446e80458c14b996975e&" class="salle-background" alt="Coaches Background Image" />
    </section>


    <div class="search-bar">
    <section class="city-selection" >
        <select id="city-selection">
        <option value="">VILLE</option>
        <option value="Agadir">Agadir</option>
        <option value="Casablanca">Casablanca</option>
        <option value="Marrakech">Marrakech</option>
        <option value="Rabat">Rabat</option>
        </select>
    </section>
    <button class="search-button" id="search-button">
        <span>RECHERCHER</span>
    </button>
    </div>

    
    <div class="container-casablanca" id="container-casablanca">
    <section class="flex-layout-casa">
        <article class="column-30-casa">
        <div class="item-details-casa">
            <div class="brand-casa">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/f5272c1b3b847256c8093700835cd6ffa8e3f41e50a9709f2717aa25f537ca28?apiKey=435338ae13ee446e80458c14b996975e&" alt="line-casa" class="line-casa" />
            <div class="city-name-casa">CASABLANCA</div>
            </div>
            <div class="location-details-casa">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/c4d37f87fdbfc44c6f93ae1b4133f5c1695272cc57eb90fcd238216fca8c9537?apiKey=435338ae13ee446e80458c14b996975e&" alt="Location icon" class="location-icon-casa" />
            <div class="location-text-casa">39, Rue Omar Slaoui, Plateau Taoufik, 5ème Étage.Casablanca</div>
            </div>
            <iframe class="location-map-casa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3303.8709142517075!2d-7.624481485048468!3d33.59101068073468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cd76f9aa0b3b%3A0x7c63d295c5a5a2d0!2s39%20Rue%20Omar%20Slaoui%2C%20Casablanca%2020200%2C%20Morocco!5e0!3m2!1sen!2sus!4v1623421456411!5m2!1sen!2sus" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" alt="map" class="location-map-casa"></iframe>
        </div>
        </article>
        <aside class="column-70-casa">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8497280fcd66f6b875508efc597fbbd1420547dd1de444d13b2db7cff57fd0ba?apiKey=435338ae13ee446e80458c14b996975e&" alt="Main image" class="main-image-casa" />
        </aside>
    </section>
    </div>




    <div class="container-rabat" id="container-rabat">
    <section class="flex-layout-rabat">
        <div class="column-70-rabat">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/d8c2ec6887a56dcf19f293d68c2ec7e1c5453645f0c2194ed992d4e2305a8521?apiKey=435338ae13ee446e80458c14b996975e&" alt="Main image" class="main-image-rabat">
        </div>
        <aside class="column-30-rabat">
            <div class="item-details-rabat">
                <div class="brand-rabat">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/f5272c1b3b847256c8093700835cd6ffa8e3f41e50a9709f2717aa25f537ca28?apiKey=435338ae13ee446e80458c14b996975e&" alt="line-rabat" class="line-rabat">
                    <span class="city-name-rabat">RABAT</span>
                </div>
                <div class="location-details-rabat">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/43a244ebedc5b3aa74bf61280294d610da796e76ba33cd3764503084d5d33c2d?apiKey=435338ae13ee446e80458c14b996975e&" alt="Location icon" class="location-icon-rabat">
                    <span class="location-text-rabat"> 23, Avenue Chellah, Hassan.Rabat</span>
                </div>
                <iframe class="location-map-rabat" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.704149634777!2d-6.832554284788094!3d34.020882480614506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd9ff3562a3f8f0d%3A0x2db43a08e11b69b2!2s23%20Avenue%20Chellah%2C%20Rabat%2C%20Morocco!5e0!3m2!1sen!2sus!4v1623421456411!5m2!1sen!2sus" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </aside>
    </section>
    </div>  





    <div class="container-marrakech" id="container-marrakech">
    <section class="flex-layout-marrakech">
        <article class="column-30-marrakech">
        <div class="item-details-marrakech">
            <div class="brand-marrakech">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/f5272c1b3b847256c8093700835cd6ffa8e3f41e50a9709f2717aa25f537ca28?apiKey=435338ae13ee446e80458c14b996975e&" alt="line-marrakech" class="line-marrakech" />
            <div class="city-name-marrakech">MARRAKECH</div>
            </div>
            <div class="location-details-marrakech">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/c4d37f87fdbfc44c6f93ae1b4133f5c1695272cc57eb90fcd238216fca8c9537?apiKey=435338ae13ee446e80458c14b996975e&" alt="Location icon" class="location-icon-marrakech" />
            <div class="location-text-marrakech">N 60 rue Triq Bnou Ziad (à côté du carré éden ). Marrakech</div>
            </div>
            <iframe class="location-map-marrakech" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.2455857171695!2d-8.0125!3d31.637139999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafeff286d89c43%3A0x5baf77b9a7c1e49e!2s31%C2%B038'13.7%22N%208%C2%B000'45.6%22W!5e0!3m2!1sen!2sus!4v1623421456411!5m2!1sen!2sus" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" alt="map" class="location-map-marrakech"></iframe>
        </div>
        </article>
        <aside class="column-70-marrakech">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/2b01bd7ed34964d9a7be33a29e0a5f00f461f179cf7490969655ccf4b9d3b972?apiKey=435338ae13ee446e80458c14b996975e&" alt="Main image" class="main-image-marrakech" />
        </aside>
    </section>
    </div>





    <div class="container-agadir" id="container-agadir">
    <section class="flex-layout-agadir">
        <div class="column-70-agadir">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/beb93d9a5a5b7f79ccb8fe08ba0c6167547c84f2ca56ddadf080ce7ba42ef7cb?apiKey=435338ae13ee446e80458c14b996975e&https://cdn.builder.io/api/v1/image/assets/TEMP/d8c2ec6887a56dcf19f293d68c2ec7e1c5453645f0c2194ed992d4e2305a8521?apiKey=435338ae13ee446e80458c14b996975e&" alt="Main image" class="main-image-agadir">
        </div>
        <aside class="column-30-agadir">
            <div class="item-details-agadir">
                <div class="brand-agadir">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/f5272c1b3b847256c8093700835cd6ffa8e3f41e50a9709f2717aa25f537ca28?apiKey=435338ae13ee446e80458c14b996975e&" alt="line-agadir" class="line-agadir">
                    <span class="city-name-agadir">AGADIR</span>
                </div>
                <div class="location-details-agadir">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/43a244ebedc5b3aa74bf61280294d610da796e76ba33cd3764503084d5d33c2d?apiKey=435338ae13ee446e80458c14b996975e&" alt="Location icon" class="location-icon-agadir">
                    <span class="location-text-agadir"> N89 Rajaflah Cite Alqods. Agadir</span>
                </div>
                <iframe class="location-map-agadir" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3316.290445982269!2d-9.5588599!3d30.41351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzDCsDI0JzQ4LjYiTiA5wrAzMycyMS45Ilc!5e0!3m2!1sen!2sus!4v1623421456411!5m2!1sen!2sus" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </aside>
    </section>
    </div>  






<script>

document.getElementById('search-button').addEventListener('click', filterSalles);

function filterSalles() {
    const citySelect = document.getElementById('city-selection');
    const selectedCity = citySelect.value.toLowerCase();

    const allContainers = document.querySelectorAll('[id^="container-"]');

    allContainers.forEach(container => {
        if (selectedCity === "" || citySelect.selectedIndex === 0) {
                    container.style.display = 'block';
        } else if (container.id === `container-${selectedCity}`) {
                    container.style.display = 'block';
        } else {
            container.style.display = 'none';
        }
    });
}

// Initially show all city containers
window.onload = () => {
    const allContainers = document.querySelectorAll('[id^="container-"]');
    allContainers.forEach(container => container.style.display = 'block');
};
</script>


@endsection
