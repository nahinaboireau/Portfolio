<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NB</title>
    <link rel="stylesheet" href="style.css">
    <!-- 1er police d'écriture  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <img src="./images/logo-NB.svg" alt="" class="logo">
        <div class="rubrique">
            <a href="">A propos</a>
            <a href="">Projets</a>
            <a href="">Contact</a>
        </div>
    </nav>

    <main>
        <section class="header">
            <div class="boite-tout">
                <div class="boite-petit">
                    <div class="bordure"></div>
                    <p class="portfolio">PORTFOLIO</p>
                </div>
                <h1 class="nom">NAHINA BOIREAU</h1>
            </div>
            <div class="boite-image">
                <img src="./images/image-accueil.jpg" alt="">
            </div>
            <div class="boite-liste">
                <ul>
                    <li>Photographe</li>
                    <li>Monteuse</li>
                    <li>Musicienne</li>
                </ul>
            </div>
            <button class="scroll-down-button" onclick="scrollDown()">Scroll Down</button>

        </section>
        <!-- slider -->
        <section class="apropos">
            <h1 class="titre-apropo">A propos</h1>
            <div class="photo-apropo">
                <div class="caract">
                    <div class="cercle-photo">
                        <img src="./images/photo.svg" alt="">

                    </div>
                    <p>
                        <!--<img src="./images/pinceau.png" alt="" class="pinceau">-->Créative
                    </p>

                </div>
            </div>

            </div>
            <!-- rendre l'image ronde -->
            <!-- <div class="photo-apropo">
                <img src="./images/image-accueil.jpg" alt="" class=accueil-image>
            </div> -->
            <br>
            <div class="division1">

                <p class="paragraphe-apropo">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam provident
                    dignissimos a accusantium reprehenderit sunt repudiandae ex est, debitis dicta eaque! Officia atque
                    aut officiis nam laborum sunt dolore aliquid! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint labore repellat animi debitis perferendis dicta, neque a accusamus dolores. Ad dolorem expedita sit ipsam unde animi praesentium qui laudantium quos?</p>
                <ul class="essentiel">
                    <li>20 ans</li>
                    <li>BUT MMI</li>
                    <li>Champs
                        <br>sur-Marne
                    </li>
                </ul>

            </div>
            <p class="titre-competences">Compétences</p>
            <div class="competences">
                <div class="competences-associe">
                    <div class="carre">
                        <img src="./images/appareil.svg" alt="">
                    </div>
                    <p>Photographie</p>
                </div>
                <div class="competences-associe">
                    <div class="carre">
                        <svg xmlns="http://www.w3.org/2000/svg" width="145" height="98" viewBox="0 0 145 98"
                            fill="none">
                            <circle cx="49" cy="49" r="46.5" stroke="#6C3E3E" stroke-width="5" />
                            <circle cx="49.5" cy="49.5" r="37.5" fill="#6C3E3E" />
                            <circle cx="49.5" cy="26.5" r="7.5" fill="white" />
                            <circle cx="70.5" cy="39.5" r="7.5" fill="white" />
                            <circle cx="70.5" cy="63.5" r="7.5" fill="white" />
                            <circle cx="28.5" cy="63.5" r="7.5" fill="white" />
                            <circle cx="28.5" cy="39.5" r="7.5" fill="white" />
                            <circle cx="49.5" cy="48.5" r="3.5" fill="white" />
                            <circle cx="49.5" cy="71.5" r="7.5" fill="white" />
                            <path
                                d="M130 16C113.925 12.8532 105.264 13.9787 91 25.5L96 47L91 71C108.242 53.5615 118.8 46.9476 141.5 49L130 16Z"
                                stroke="#6C3E3E" stroke-width="4" />
                            <path d="M93.5 31.5C106.827 23.1414 115.158 21.7137 131 23" stroke="#6C3E3E"
                                stroke-width="4" />
                            <path d="M94 55.1974C110.082 43.2922 121.336 38.7451 139.5 42" stroke="#6C3E3E"
                                stroke-width="4" />
                            <path d="M100 18L116 52" stroke="#6C3E3E" stroke-width="4" />
                            <path d="M119.309 14.816L120.861 18.8029L122.414 22.7897" stroke="#6C3E3E"
                                stroke-width="4" />
                            <path d="M110.417 16L112.209 19.5L114 23" stroke="#6C3E3E" stroke-width="4" />
                            <path d="M120.385 42L122.176 45.5L123.967 49" stroke="#6C3E3E" stroke-width="4" />
                            <path d="M92.3848 25L94.176 28.5L95.9673 32" stroke="#6C3E3E" stroke-width="4" />
                            <path d="M104.385 49L106.176 52.5L107.967 56" stroke="#6C3E3E" stroke-width="4" />
                            <path d="M128.385 41L130.176 44.5L131.967 48" stroke="#6C3E3E" stroke-width="4" />
                        </svg>
                    </div>
                    <p>Cinéma</p>
                </div>
                <div class="competences-associe">
                    <div class="carre">
                        <svg xmlns="http://www.w3.org/2000/svg" width="41" height="62" viewBox="0 0 41 62" fill="none">
                            <path
                                d="M17.5002 25.1L17.5896 25.1L17.6751 25.074C18.0528 24.9589 18.3922 25.0025 18.7859 25.2979C19.2189 25.6229 19.7125 26.2534 20.2818 27.3352C21.4163 29.4908 22.7204 33.1754 24.4746 38.9339C26.2289 44.6925 27.7779 49.8835 28.6065 53.7193C29.0221 55.6429 29.2468 57.184 29.2378 58.2696C29.2333 58.8151 29.1695 59.198 29.0724 59.4436C28.9806 59.6759 28.8866 59.726 28.829 59.7435C28.7689 59.7618 28.6561 59.7719 28.4404 59.6284C28.2148 59.4782 27.9385 59.1966 27.619 58.75C26.9829 57.8609 26.2781 56.4661 25.5183 54.6492C24.0031 51.0264 22.3289 45.8745 20.5763 40.1215C19.9518 38.0712 19.3782 36.259 18.8731 34.6632C17.9508 31.7494 17.2568 29.5568 16.8975 27.9529C16.615 26.692 16.5783 25.9407 16.7059 25.5275C16.7603 25.3514 16.8355 25.2685 16.9186 25.2169C17.016 25.1566 17.1897 25.1 17.5002 25.1Z"
                                stroke="#6C3E3E" stroke-width="1.2" />
                            <path
                                d="M20.5992 18.3322C20.2927 20.1218 20.0185 21.4346 19.7336 22.3935C19.4456 23.3629 19.1652 23.9034 18.8864 24.2071C18.6391 24.4765 18.364 24.5918 17.9489 24.6143C17.4904 24.6391 16.9176 24.5484 16.1013 24.4086C14.8661 24.1971 13.6934 22.8685 12.9864 20.4574C12.294 18.0966 12.12 14.897 12.7224 11.3792C13.368 7.60851 12.211 4.75274 11.338 2.95503C11.2295 2.73159 11.1251 2.52401 11.0302 2.33549L11.0284 2.33185C10.9335 2.14312 10.8495 1.97614 10.7769 1.82506C10.7168 1.69972 10.6701 1.59621 10.6346 1.51114C10.692 1.51804 10.757 1.52754 10.8304 1.54012C11.1173 1.58924 11.518 1.75565 12.0175 2.06997C12.5088 2.37913 13.061 2.80924 13.6458 3.34406C14.8151 4.4135 16.0833 5.87299 17.2202 7.54163C19.5152 10.9103 21.1734 14.9787 20.5992 18.3322ZM10.5401 1.21778C10.5401 1.21782 10.5403 1.21896 10.5403 1.22111C10.5401 1.21883 10.5401 1.21775 10.5401 1.21778Z"
                                fill="#6C3E3E" stroke="#6C3E3E" stroke-width="1.2" />
                        </svg>
                    </div>
                    <p>Graphisme</p>
                </div>
                <div class="competences-associe">
                    <div class="carre">
                        <img src="./images/musique.svg" alt="">
                    </div>
                    <p>Musique</p>
                </div>
                <div class="competences-associe">
                    <div class="carre">
                        <svg xmlns="http://www.w3.org/2000/svg" width="73" height="78" viewBox="0 0 73 78" fill="none">
                            <path
                                d="M6 74V4C6 2.34315 7.34315 1 9 1H50.3836L66 18.6159V74C66 75.6569 64.6569 77 63 77H9C7.34315 77 6 75.6569 6 74Z"
                                fill="white" />
                            <path
                                d="M66 18.6159V74C66 75.6569 64.6569 77 63 77H9C7.34315 77 6 75.6569 6 74V4C6 2.34315 7.34315 1 9 1H50.3836M66 18.6159L50.3836 1M66 18.6159H53.3836C51.7267 18.6159 50.3836 17.2728 50.3836 15.6159V1"
                                stroke="#6C3E3E" stroke-width="2" />
                            <path d="M14 30H58.5" stroke="#6C3E3E" stroke-width="2" />
                            <path d="M14 46H58.5" stroke="#6C3E3E" stroke-width="2" />
                            <path d="M14 60H58.5" stroke="#6C3E3E" stroke-width="2" />
                        </svg>
                    </div>
                    <p>Infographie</p>
                </div>
                <div class="competences-associe">
                    <div class="carre">
                        <svg width="51" height="40" viewBox="0 0 51 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="11" cy="7" r="5.85" stroke="#6C3E3E" stroke-width="2.3" />
                            <circle cx="28" cy="7" r="5.85" stroke="#6C3E3E" stroke-width="2.3" />
                            <rect x="5.15" y="17.15" width="28.7" height="15.7" fill="#6C3E3E" stroke="#6C3E3E"
                                stroke-width="2.3" />
                            <path d="M38 28V21.5L49 16V34L38 28Z" stroke="#6C3E3E" stroke-width="2.3" />
                            <rect x="11" y="37" width="18" height="2" fill="#6C3E3E" stroke="#6C3E3E"
                                stroke-width="2" />
                        </svg>



                    </div>
                    <p>Vidéo</p>
                </div>




            </div>


        </section>
        <section class="cv">
            <h1 class="titre-cv">CV Vidéo</h1>
            <div class="cv-video">
                <div class="iframe-container">

                    <iframe src="https://www.youtube.com/embed/0bxNTe1TzYw" title="MON CV VIDÉO ! - Timothée Falcon"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
            <!-- <p class="cv-ecrit">Papier<svg xmlns="http://www.w3.org/2000/svg" width="30" height="20" viewBox="0 0 73 78"
                    fill="none">
                    <path
                        d="M6 74V4C6 2.34315 7.34315 1 9 1H50.3836L66 18.6159V74C66 75.6569 64.6569 77 63 77H9C7.34315 77 6 75.6569 6 74Z"
                        fill="#6C3E3E" />
                    <path
                        d="M66 18.6159V74C66 75.6569 64.6569 77 63 77H9C7.34315 77 6 75.6569 6 74V4C6 2.34315 7.34315 1 9 1H50.3836M66 18.6159L50.3836 1M66 18.6159H53.3836C51.7267 18.6159 50.3836 17.2728 50.3836 15.6159V1"
                        stroke="white" />
                    <path d="M14 30H58.5" stroke="white" />
                    <path d="M14 46H58.5" stroke="white" />
                    <path d="M14 60H58.5" stroke="white" />
                </svg></p> -->
            <div class="button-cv">

                <a href="">CV papier</a>

            </div>



        </section>
        <section class="aperçu">
            <h1 class="titre-aperçu">Aperçu projets</h1>
            <p class="paragraphe-aperçu">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab assumenda culpa
                repudiandae debitis illum
                quidem. Suscipit, repellendus! Voluptate officiis illo assumenda placeat voluptas, quisquam quidem,
                tempora, aliquam doloribus itaque distinctio.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab assumenda culpa repudiandae debitis illum
                quidem. Suscipit, repellendus! Voluptate.
            </p>
            <!-- slider -->
            <div class="slider-container">
                <div class="slider">
                    <div class="slide">
                        <img src="./images/image-accueil.jpg" alt="Image 1">
                        <span class="image-number">Résaweb /01</span>
                    </div>
                    <div class="slide">
                        <img src="./images/image-accueil.jpg" alt="Image 2">
                        <span class="image-number">Dataviz /02</span>
                    </div>
                    <div class="slide">
                        <img src="./images/image-accueil.jpg" alt="Image 3">
                        <span class="image-number">Interview /03</span>
                    </div>
                </div>
                <div class="button-savoir">

                    <a href="">En savoir + </a>

                </div>
            </div>





        </section>
        <footer class="footer">
            <img src="./images/logo-NB.svg" alt="retour a l'accueil" class="logo">
            <div class="footer-content">
                <div>
                    <p>Nahina Boireau - Portfolio &copy; 2023</p>
                    <p>Tout droit réservés</p>
                    <a href="">Mention légales</a><br>
                </div>
                <div class="reseaux-sociaux">
                    <a href=""><img src="./images/linkedin1.svg" alt=""></a>
                    <a href=""><img src="./images/linkedin1.svg" alt=""></a>
                    <a href=""><img src="./images/linkedin1.svg" alt=""></a>

                </div>

            </div>
        </footer>



    </main>




    <script src="script.js"></script>
</body>

</html>