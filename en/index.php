<?php

require_once '../root/config.php';
require_once '../root/Model.php';

$pdo = new PDO("mysql:host=localhost:3306;dbname=".DBNAME.";charset=utf8;", USERNAME, PASSWORD);
$model = new Database($pdo);

$posts = $model->getPosts();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content='The public organization "4 VLADA UA" is a team of people who, for the rest of the 10 years on a permanent basis, supported child houses, boarding schools, wealthy and low-income families, persons with disabilities, internally displaced persons, self-employed.'>

    <link href="../img/favicon.ico" rel="icon" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="../css/style.css" rel="stylesheet">

    <title>4VLADAUA</title>
</head>
<body>

<header>
    <nav>
        <div class="d-flex p-3">
            <a href="./"><img src="../img/logo.png" alt="logo" style="width:200px;"></a>

            <div class="w-100 d-flex justify-content-evenly align-items-end menu">
                <a href="./">Home</a>
                <a href="#about">About</a>
                <a href="#help">Help</a>
                <a href="#contacts">Contacts</a>
                <a href="#ourhelp">We help</a>
            </div>

            <div class="position-fixed end-0 mt-5 me-2 p-2 bg-secondary border lang lang-full">
                <a href="../">UA</a>
                <span> | </span>
                <a class="bg-info" href="./">EN</a>
            </div>
        </div>

        <div class="toggler" hidden>
            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar">
                <span>Menu...</span>
            </button>
        </div>

        <div class="offcanvas offcanvas-end w-50" tabindex="-1" id="offcanvasNavbar"
             aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">4 VLADA UA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#help">Help</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contacts">Contacts</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#ourhelp">We help</a>
                    </li>

                </ul>

                <div class="mt-5 me-2 p-2 bg-secondary border lang">
                    <a href="../">UA</a>
                    <span> | </span>
                    <a class="bg-info" href="./">EN</a>
                </div>

            </div>
        </div>
    </nav>

    <div class="d-flex flex-column justify-content-center align-items-center text-center">

        <h1 class="display-6 text-center text-white">Reconstruction of Ukraine.<br>Cultural development of the population.</h1>

        <div class="w-75 p-4 header-list">
            <h2 class="display-6">Our mission</h2>

            <h4>Create high-quality innovative projects by a professional team with the involvement of a wide range of partners and donors.</h4>

            <p>The war brought a lot of suffering and social and economic harm to people. Although hostilities do not subside and missile strikes continue to destroy structures and buildings, planning for the reconstruction of Ukraine has already begun.</p>
            <p>&nbsp;We are looking into the future, when after the end of hostilities, the focus of attention will shift to the restoration of infrastructure. In our opinion, measures to restore Ukraine should focus not just on restoring what was destroyed, but on investing in future development.</p>
        </div>

        <div style="height: 100px"></div>

    </div>
</header>

<main>

    <div id="about"></div>
    <section class="pt-4">

        <div class="container">

            <h2 class="display-5 text-center m-5">About us</h2>

            <h2 class="h4 text-center m-4">The public organization <span style="white-space: nowrap;">«4 VLADA UA»</span> – is a team of people who, for the rest of the 10 years on a permanent basis, supported child houses, boarding schools, wealthy and low-income families, persons with disabilities, internally displaced persons, self-employed.</h2>


            <div class="border p-3">


                <p class="fs-4 mb-4">These were their own initiatives. Our official history was revealed during an important year for Ukraine, in the spring of 2022, to the fate of a small initiative group: debriefing the specialties of various spheres of activity with insensitive remarks.</p>
                
                <p class="fs-4 mb-4">The community organization was created to address specific problems of the locality and the population, as well as to help different groups of the population.</p>
                
                <p class="fs-4 mb-4">The public organization <span style="white-space: nowrap;">"4 VLADA UA"</span> is a team of people, who believe that initiatives are to create changes, and the skin of us is the life of change. The main is practice and do not be afraid to follow the plans of life.</p>
                
                <p class="fs-4 mb-4">Our team includes qualified lawyers, engineers, economists, and psychologists. These are people who are going to act, change and influence.</p>
                
                
                
                <p class="fs-4 mb-4">The main goal of the public organization <span style="white-space: nowrap;">"4 VLADA UA"</span> is the promotion and protection of rights and freedoms, satisfaction of the public, the protection of economic, social, cultural, environmental and other interests of its members.</p>
                
                

                <h2 class="h2 text-center mb-4">Main directions of activity:</h2>

                <ul class="fs-4 mb-4">
                    <li>Organization of entries, support of projects and initiatives, directing to the economic, infrastructure and mental life of Ukraine.
                    </li>
                    <li>Assistance in the restoration and reconstruction of buildings and structures that were destroyed or destroyed as a result of military actions, as well as those that are recognized as architectural monuments.
                    </li>
                    <li>Assistance to people who suffered from military activities in Ukraine, by joining the established organization of the work of rehabilitation centers.
                    </li>
                    <li>Assistance to internally displaced persons, people from Viysk, veterans, low-income fathers, people with limited abilities, children, children with lighting problems.
                    </li>
                    <li>Help protect motherhood and childhood, as well as help children and children with special lighting problems. To help children, orphaned children, children, who were left without guardianship, children who suffered under the hour of fighting, rich fathers.
                    </li>
                    <li>Popularization among the population of the feat of the heroes of Ukraine through the way of seeing books, making films, commercials, holding seminars, exhibitions, and presentations.
                    </li>
                    <li>Defender of legal rights, satisfying the needs of the people in the gallery of physical improvement, sports and healthy people.
                    </li>
                    <li>Contributing to the preservation of the natural environment, reducing the negative impact on it, increasing the ecological awareness of the population by popularizing the ecological lifestyle.
                    </li>
                </ul>

                <p class="fs-4">We want to be socially useful in this difficult time for the whole country. Therefore, much is being done to attract partners and donors to socially important projects.</p>
                <p class="fs-4 mb-4">The focus of attention is public activity at the local level.
We are always open to everyone, we monitor all receipts, talk about our plans and work done.</p>


            </div>

        </div>

    </section>

    <hr>


    <section>

        <div class="parallax"></div>

    </section>


    <hr>
    <div id="help" class="pb-4"></div>


    <section>

        <div class="container">

            <div class="d-flex flex-column align-items-center">

                <h2 class="display-5 text-center">Help</h2>


                <div class="mt-4" style="max-width: 900px;">

                    <p class="fs-4"><b>PUBLIC ORGANIZATION <span style="white-space: nowrap;">&laquo;4 VLADA UA&raquo; </span></b>works on a volunteer basis - all donations are used directly for activities aimed at restoring Ukraine, helping the military and citizens affected by the war.
                    </p>
                    <p class="fs-4">We regularly report on the receipt and use of funds.</p>

                    <p class="fs-4">How you can join our activities:</p>
                    
                    <p class="fs-4">Officially — to the bank account of the organization:</p>

                    <p class="fs-4">Recipient's name:&nbsp;<b style="white-space: nowrap;">4 VLADA UA</b>

                    <p class="fs-4">Recipient's code:&nbsp;<b>44714586</b></p>

                    </p>
                    <p class="fs-4">Recipient's account: <strong>UA723133990000026009010208959</strong></p>

                    <p class="fs-4">Name of the bank: <b>ZAPORIZKE RU JSC CB "PRIVATBANK"</b></p>

                    <p class="fs-4">Purpose of payment: <b>Voluntary donation</b></p>

                </div>

            </div>


        </div>

    </section>

    <hr>

    <div id="volunteering"></div>
    <div class="separator"></div>

    <section>

        <div class="container">

            <div class="d-flex flex-column align-items-center">

                <h2 class="display-5 text-center mb-4">Volunteering</h2>


                <p class="fs-4">If you have the desire and opportunity to join the activities of the PUBLIC ORGANIZATION <span style="white-space: nowrap;">&laquo;4 VLADA UA&raquo; </span></b>as a volunteer, as well as support our country and its citizens who find themselves in difficult life circumstances, then you need to take only 2 steps:</p>
                <ol class="fs-4">
                    <li>Attend an interview in the office;</li>
                    <li>Send your ideas, wishes or suggestions to e-mail.</li>
                </ol>

                <p class="fs-4">In order to join our team, you only need a sincere desire to be useful for society and help those who need it!</p>

                <h2 class="h2 text-center mb-4">Your skills can be useful to us:</h2>

                <ul class="fs-4">
                    <li>organization of offline or online events (round tables, exhibitions, press conferences)</li>
                    <li>information activities (SMM, translations, content creation)</li>
                    <li>communication (with public organizations, authorities, international partners)</li>
                    <li>research (survey, interview)</li>
                    <li>volunteer assistance to soldiers and displaced persons (transportation, distribution of aid)</li>
                </ul>


            </div>

        </div>

    </section>
    <hr>


    <div id="ourhelp"></div>
    
    <?php if($posts): ?>

<!--    Ми допомогли...-->
    
    <div class="separator"></div>

    <section>

        <div class="text-center mt-5">
            <h2 class="display-5 mb-5 pb-md-4">We help</h2>
        </div>

        <div class="container-md">

            <div class="d-flex flex-wrap justify-content-evenly mb-5" style="max-width: 1300px;">
                
                <?php foreach ($posts as $post): ?>
                    
                    <div class="card m-1 mb-3" style="max-width: 400px;">
                        <img src="../root/<?= $post['uri'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text fs-4"><?= $post['text_en'] ?></p>
                        </div>
                    </div>
                    
                <?php endforeach; ?>

            </div>

        </div>

    </section>
    
    <?php endif; ?>


    <div class="separator"></div>
    <hr>
    <div class="separator"></div>

</main>

<div id="contacts"></div>
<footer>

    <div class="container">

        <div class="p-4 about">


            <h4 class="h4 mb-3">Contacts:</h4>
            <div class="">

                <p class="fs-5 me-4">69001, Ukraine, Zaporizhzhia, 177 Soborny ave., office 1</p>
                <p class="fs-5 me-4">tel.: <a href="tel:+3800934575757">+38 (095) 500 500 2</a></p>

                <div>
                    <p class="fs-5">email: <a href="mailto:4vlastua@gmail.com">4vlastua@gmail.com</a></p>

                </div>


            </div>

            <div></div>

        </div>

        <div class="pt-4 text-center">
            <p class="fs-5">© 2022 - «4 VLADA UA». All rights reserved.</p>
        </div>

    </div>

</footer>


<a href="#" id="scrollup"></a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

<script>
    let arrowTop = document.getElementById('scrollup');
    let menu = document.querySelector('.menu');
    let toggler = document.querySelector('.toggler');



    window.addEventListener('scroll', function () {

        arrowTop.hidden = (pageYOffset < 300);
        if (pageYOffset > 100) {
            menu.style.position = 'fixed';
            menu.style.top = '0';
            menu.style.left = '0';
            menu.style.width = '100%';
            menu.style.padding = '10px 0 10px 0';
            menu.style.backgroundColor = '#97b6f8';

            toggler.style.top = '5px';


        } else {
            menu.style.position = 'static';
            menu.style.padding = null;
            menu.style.backgroundColor = null;

            toggler.style.top = '40px';


        }

    });

    async function sendRequest(url, body) {
        const response = await fetch(url, {
            method: 'POST',
            body: body
        });
        return await response.json();
    }


</script>

</body>
</html>