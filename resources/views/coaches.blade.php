@extends('layouts.nossalleslay')

@section('title', 'Coaches')

@section('content')


    <style>
         /*title+image*/
        .coach-section {
            
            padding: 0; 
            margin-top:0; 
            text-align: center;
            color: white; 
            font-family: Poppins, sans-serif; 
            cursor: default;
        }

        .coach-background {
            width: 100%;
            display: block;
        }

        .coach-title {
            position: absolute;
            padding-top: 35%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 6vw; 
            z-index: 1; 
        }


        /*search bar*/
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



        .specialisation-selection {
            background-color:#545454;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px;
            margin-top: 5px;  
            margin-bottom: 5px;
            margin-left: 10px;
            
            
        }
        .specialisation-selection select {
            
            background: #545454; 
            color: white; 
            border: none;
            font: 16px Lato, sans-serif;
            width: 100%; 
            padding: 5px; 
             cursor: pointer;
            
            
        }
        @media (max-width: 991px) {
            .specialisation-selection {
            padding:  5px 5px ;
            margin-right: 28px;
            
            
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
            }
        }


        

        
    
       





/*                      trainers section                  */

.row{
    padding: 30px 60px;
   
    
    
   
}

.flex-layout-row{
    gap: 85px;
    row-gap: 30px;
    display:flex;
    flex-wrap: wrap;
    justify-content:center; 
    
    
    
    
}

@media (max-width: 1200px) {
    .container-trainer {
        flex: 1 1 calc(50% - 47.5px); 
    }

    
}

@media (max-width: 768px) {
    .flex-layout-row {
        
        flex-direction: column;
        align-items: center;
        row-gap: 0;
    }
    .container-trainer {
        flex: 1 1 100%; 
        margin-bottom: 10px; 
        padding: auto;
        margin-top: 20px;
        display: none;
    }
    .row {
        padding: 10px 20px; 
        
    }
}
.container-trainer {
        display: flex;
        max-width: 300px;
        flex-direction: column;
        font-size: 20px;
        color: #fff;
        font-weight: 600;
        line-height: 145%;
        position: relative;
        transition: transform 0.3s ease, background-color 0.3s ease;

        max-width: 300px; 
        flex: 1 1 calc(33.333% - 95px); 
        box-sizing: border-box;
        cursor: default;


        
        

        
    }

    .container-trainer:hover {
        transform: scale(1.05); 
        
    }

    

    .profile-img {
        aspect-ratio: 0.91;
        object-fit: cover;
        object-position: center;
        width: 100%;
        border-radius: 10px 10px 0 0;
    }

    .profile-details {
        border-radius: 0 0 10px 10px;
        background-color: #111316;
        display: flex;
        flex-direction: column;
        width: 80%;
        padding: 20px 30px 12px;
        position: relative;
        top: -30px;
        height: 230px;
        
    }

    .profile-header {
        display: flex;
        gap: 17px;
        padding-right: 10px;
        font-size: 14px;
        font-weight: 600;
        line-height: 110%;
        border-radius: 10px;
  
    }

    .name {
        font-family: 'Inter', sans-serif;
         
    }

    .icon {
        aspect-ratio: 1.72;
        object-fit: cover;
        object-position: center;
        width: 36px;
        margin: auto 0;
        

    }

    .divider {
       
        height: 1px;
        margin-top: 4px;
        border: 1px solid rgba(255, 0, 0, 1);
        background-color: #f00;
        width: 240px;
    }

    .specialisations-label {
        font-family: Lato, sans-serif;
        text-transform: capitalize;
        margin-top: 22px;
        font-size:18px;
        
    }

    .specialisations {
        color: #858585;
        font-family: Lato, sans-serif;
        line-height: 29px;
        text-transform: capitalize;
        margin-top: 15px;
        font-size:18px;
        
    }

    .more-info {
        color: #f00;
        text-transform: capitalize;
        margin-top: 23px;
        font: 18px 'Lato', sans-serif;
        font-size:18px;
        font-weight: 300;
        text-decoration: none;
        transition: text-decoration 0.3s ease;
        margin-top: auto; 
        
    }

    .more-info:hover {
        text-decoration: underline; 
    }
        






    .visible-container {
        flex: 1 1 auto !important;

    }
    .hidden-container {
        display: none ;
        
    }

    .testcont{
        
       
       display: inline-flex !important;
    position: relative !important;
    padding: 0 0 !important;
    margin-left: 0 !important;
    margin-bottom: 10px !important; 
    flex: 1 1 100% !important; 
    box-sizing: border-box !important;

}
    
    .no-results {
            display: none;
            color: red;
            text-align: center;
            margin-top: 20px;
            font: 16px Lato, sans-serif;
            font-size:40px;
        }
    
    


    </style>

    <section class="coach-section">
        <div class="coach-title">NOS COACHES</div>
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/f2f4dd2e8be9bda30c371b76f814642559acfce93a15b52b64dbb8962c790c41?apiKey=435338ae13ee446e80458c14b996975e&" class="coach-background" alt="Coaches Background Image" />
    </section>

    <div class="search-bar">
    <section class="city-selection">
        <select id="city-selection">
        <option value="">VILLE</option>
        <option value="Agadir">Agadir</option>
        <option value="Casablanca">Casablanca</option>
        <option value="Marrakech">Marrakech</option>
        <option value="Rabat">Rabat</option>
        </select>
    </section>

    <section class="specialisation-selection"> 
        <select id="specialisation-selection">
            <option value="">SPECIALISATION</option>
            <option value="Aerobic Training">Aerobic Training</option>
            <option value="Athletic Class" >Athletic Class</option>
            <option value="Boxing">Boxing</option>
            <option value="Cardio Workout">Cardio Workout</option>
            <option value="Crossfit Expert">Crossfit Expert</option>
            <option value="Mixed Circuit">Mixed Circuit</option>
            <option value="Nutrition & Rehab">Nutrition & Rehab</option>
            <option value="Pilates">Pilates</option>
            <option value="Power Club">Power Club</option>
            <option value="Yoga">Yoga</option>
        </select>
    </section>

    <button class="search-button" id="search-button">
        <span>RECHERCHER</span>
    </button>
    </div>


    







<div class="row">

    <section class="flex-layout-row">

        <section class="trainer1" data-city="Casablanca">
        <section class="testcont" id="testcont1">
            <section class="container-trainer" id="container-trainer1">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/1460477543848aedca9de1215e207298db978b7657fb750e3118cc6737269717?apiKey=435338ae13ee446e80458c14b996975e&" alt="Profile Image of Madison Froning" class="profile-img" />
                <div class="profile-details">
                    <header class="profile-header">
                        <h2 class="name">Kayden Griffith</h2>
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8951faac8fc2d0a2eb08143aada3207a651c2e9025589c541324900818c5f90f?apiKey=435338ae13ee446e80458c14b996975e&" alt="Certification Icon" class="icon" />
                    </header>
                    <div class="divider"></div>
                    <div class="specialisations-label">Specialisations:</div>
                    <p class="specialisations">Crossfit Workout</p>
                    <a href="#" class="more-info">en savoir plus</a>
                </div>
            </section>

        </section>
        
        </section>


        <section class="trainer2" data-city="Casablanca">
        <section class="testcont" id="testcont2">
            <section class="container-trainer" id="container-trainer2">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/2d0211d15c4619c215f2b8ef4edf7646b41f3a9f97dbc9ab0047cec8948c42f7?apiKey=435338ae13ee446e80458c14b996975e&" alt="Profile Image of Madison Froning" class="profile-img" />
                <div class="profile-details">
                    <header class="profile-header">
                        <h2 class="name">Avi Barnett</h2>
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8951faac8fc2d0a2eb08143aada3207a651c2e9025589c541324900818c5f90f?apiKey=435338ae13ee446e80458c14b996975e&" alt="Certification Icon" class="icon" />
                    </header>
                    <div class="divider"></div>
                    <div class="specialisations-label">Specialisations:</div>
                    <p class="specialisations">Nutrition & Rehab</p>
                    <a href="#" class="more-info">en savoir plus</a>
                </div>
            </section>
        </section>
        </section>


        <section class="trainer3" data-city="Rabat">
        <section class="testcont" id="testcont3">
            <section class="container-trainer" id="container-trainer3">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/4a093ab8e1732d50c1c4a5f74b3b59ff89bfefba4a77bb5334cdb6e7d1bba259?apiKey=435338ae13ee446e80458c14b996975e&" alt="Profile Image of Madison Froning" class="profile-img" />
                <div class="profile-details">
                    <header class="profile-header">
                        <h2 class="name">Madison Froning</h2>
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8951faac8fc2d0a2eb08143aada3207a651c2e9025589c541324900818c5f90f?apiKey=435338ae13ee446e80458c14b996975e&" alt="Certification Icon" class="icon" />
                    </header>
                    <div class="divider"></div>
                    <div class="specialisations-label">Specialisations:</div>
                    <p class="specialisations">Crossfit Expert, Nutrition & Rehab</p>
                    <a href="#" class="more-info">en savoir plus</a>
                </div>
            </section>
        </section>
        </section>

        <section class="trainer4" data-city="Agadir">
        <section class="testcont" id="testcont4">
            <section class="container-trainer" id="container-trainer4">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/afb6a8e5ea479f0ca2eee1071ad7b4a720259b8f699b08bcc9e903a931167d61?apiKey=435338ae13ee446e80458c14b996975e&" alt="Profile Image of Madison Froning" class="profile-img" />
                <div class="profile-details">
                    <header class="profile-header">
                        <h2 class="name">Eric Glimore</h2>
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8951faac8fc2d0a2eb08143aada3207a651c2e9025589c541324900818c5f90f?apiKey=435338ae13ee446e80458c14b996975e&" alt="Certification Icon" class="icon" />
                    </header>
                    <div class="divider"></div>
                    <div class="specialisations-label">Specialisations:</div>
                    <p class="specialisations">Mixed Circuit, Cardio Workout</p>
                    <a href="#" class="more-info">en savoir plus</a>
                </div>
            </section>
        </section>
        </section>


        <section class="trainer5" data-city="Casablanca">
        <section class="testcont" id="testcont5">
            <section class="container-trainer" id="container-trainer5">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/b43791e8e542908c96b9e4fa8b1b5eda11f0b21777324bc9754ccd01448230f3?apiKey=435338ae13ee446e80458c14b996975e&" alt="Profile Image of Madison Froning" class="profile-img" />
                <div class="profile-details">
                    <header class="profile-header">
                        <h2 class="name">Sorian Berger</h2>
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8951faac8fc2d0a2eb08143aada3207a651c2e9025589c541324900818c5f90f?apiKey=435338ae13ee446e80458c14b996975e&" alt="Certification Icon" class="icon" />
                    </header>
                    <div class="divider"></div>
                    <div class="specialisations-label">Specialisations:</div>
                    <p class="specialisations">Mixed Circuit</p>
                    <a href="#" class="more-info">en savoir plus</a>
                </div>
            </section>
        </section>
        </section>


        <section class="trainer6" data-city="Marrakech">
        <section class="testcont" id="testcont6">
            <section class="container-trainer" id="container-trainer6">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/71cb16edf853d90462ccaf6fab0ffbb6383ab54c89dcf4288a6cd23e2bd8ef7b?apiKey=435338ae13ee446e80458c14b996975e&" alt="Profile Image of Madison Froning" class="profile-img" />
                <div class="profile-details">
                    <header class="profile-header">
                        <h2 class="name">Meredith Blevins</h2>
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8951faac8fc2d0a2eb08143aada3207a651c2e9025589c541324900818c5f90f?apiKey=435338ae13ee446e80458c14b996975e&" alt="Certification Icon" class="icon" />
                    </header>
                    <div class="divider"></div>
                    <div class="specialisations-label">Specialisations:</div>
                    <p class="specialisations">Crossfit Expert, Pilates</p>
                    <a href="#" class="more-info">en savoir plus</a>
                </div>
            </section>
        </section>
        </section>


        <section class="trainer7" data-city="Marrakech">
        <section class="testcont" id="testcont7">
            <section class="container-trainer" id="container-trainer7">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/2a5d68d0506344b58c46682f1e92f6605ea4297eba51a3df5baaeac33fb8d508?apiKey=435338ae13ee446e80458c14b996975e&" alt="Profile Image of Madison Froning" class="profile-img" />
                <div class="profile-details">
                    <header class="profile-header">
                        <h2 class="name">Emory Ford</h2>
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8951faac8fc2d0a2eb08143aada3207a651c2e9025589c541324900818c5f90f?apiKey=435338ae13ee446e80458c14b996975e&" alt="Certification Icon" class="icon" />
                    </header>
                    <div class="divider"></div>
                    <div class="specialisations-label">Specialisations:</div>
                    <p class="specialisations">Yoga, Athletic Class</p>
                    <a href="#" class="more-info">en savoir plus</a>
                </div>
            </section>
        </section>
        </section>


        <section class="trainer8" data-city="Agadir">
        <section class="testcont" id="testcont8">
            <section class="container-trainer" id="container-trainer8">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a5ba94f9f14563dc153bacd07c2c73e45a893b41fc7934a60e5334b572a2219c?apiKey=435338ae13ee446e80458c14b996975e&" alt="Profile Image of Madison Froning" class="profile-img" />
                <div class="profile-details">
                    <header class="profile-header">
                        <h2 class="name">Riley Marquez</h2>
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8951faac8fc2d0a2eb08143aada3207a651c2e9025589c541324900818c5f90f?apiKey=435338ae13ee446e80458c14b996975e&" alt="Certification Icon" class="icon" />
                    </header>
                    <div class="divider"></div>
                    <div class="specialisations-label">Specialisations:</div>
                    <p class="specialisations">Aerobic Training</p>
                    <a href="#" class="more-info">en savoir plus</a>
                </div>
            </section>
        </section>
        </section>


        <section class="trainer9" data-city="Rabat">
        <section class="testcont" id="testcont9">
            <section class="container-trainer" id="container-trainer9">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/62950379cb094ec53837129a79c97eafc1cd23a8737ebdc38292720576dc2fdc?apiKey=435338ae13ee446e80458c14b996975e&" alt="Profile Image of Madison Froning" class="profile-img" />
                <div class="profile-details">
                    <header class="profile-header">
                        <h2 class="name">Cleo Spencer</h2>
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8951faac8fc2d0a2eb08143aada3207a651c2e9025589c541324900818c5f90f?apiKey=435338ae13ee446e80458c14b996975e&" alt="Certification Icon" class="icon" />
                    </header>
                    <div class="divider"></div>
                    <div class="specialisations-label">Specialisations:</div>
                    <p class="specialisations">Power Club, Boxing</p>
                    <a href="#" class="more-info">en savoir plus</a>
                </div>
            </section>
        </section>
        </section>


    </section>
   
    <div class="no-results">Aucun Résultat</div>

</div>












    <script>
        document.getElementById('search-button').addEventListener('click', function() {
            const city = document.getElementById('city-selection').value.toLowerCase();
            const specialisation = document.getElementById('specialisation-selection').value.toLowerCase();
            let hasResults = false;

            document.querySelectorAll('.flex-layout-row > section').forEach(function(trainerSection) {
                const trainerCity = trainerSection.getAttribute('data-city').toLowerCase();
                const trainerSpecialisations = trainerSection.querySelector('.specialisations').textContent.toLowerCase();
                
                const matchesCity = city === "" || trainerCity === city;
                const matchesSpecialisation = specialisation === "" || trainerSpecialisations.includes(specialisation);
                
                if (matchesCity && matchesSpecialisation) {
                    trainerSection.style.display = '';
                    hasResults = true;
                } else {
                    trainerSection.style.display = 'none';
                }
            });

            const noResultsMessage = document.querySelector('.no-results');
            if (hasResults) {
                noResultsMessage.style.display = 'none';
            } else {
                noResultsMessage.style.display = 'block';
            }
        });
    </script>







  

@endsection