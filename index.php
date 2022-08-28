<?php

require_once 'root/config.php';
require_once 'root/Model.php';

$pdo = new PDO("mysql:host=localhost:3306;dbname=".DBNAME.";charset=utf8;", USERNAME, PASSWORD);
$model = new Database($pdo);

$posts = $model->getPosts();

?>


<!doctype html>
<html lang="ua">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Громадська організація «4 ВЛАДА ЮА» – це команда людей, яка протягом останніх 10 років на постійній основі допомагала дитячим будинкам, школам-інтернатам, багатодітним та малозабезпеченим сім’ям, особам з інвалідністю, внутрішньо переміщеним особам, самотнім пенсіонерам.
			">

    <link href="img/favicon.ico" rel="icon" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="css/style.css" rel="stylesheet">

    <title>4VLADAUA</title>
</head>
<body>

<header>
    <nav>
        <div class="d-flex p-3">
            <a href="./"><img src="img/logo.png" alt="logo" style="width:200px;"></a>

            <div class="w-100 d-flex justify-content-evenly align-items-end menu">
                <a href="./">Головна</a>
                <a href="#about">Про нас</a>
                <a href="#help">Допомога</a>
                <a href="#contacts">Контакти</a>
                <a href="#ourhelp">Ми допомагаємо</a>
            </div>

            <div class="position-fixed end-0 mt-5 me-2 p-2 bg-secondary border lang lang-full">
                <a class="bg-info" href="./">UA</a>
                <span> | </span>
                <a href="./en/">EN</a>
            </div>
        </div>

        <div class="toggler" hidden>
            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar">
                <span>Меню...</span>
            </button>
        </div>

        <div class="offcanvas offcanvas-end w-50" tabindex="-1" id="offcanvasNavbar"
             aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">4 ВЛАДА UA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">Головна</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#about">Про нас</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#help">Допомога</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contacts">Контакти</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#ourhelp">Ми допомагаємо</a>
                    </li>



                </ul>

                <div class="mt-5 me-2 p-2 bg-secondary border lang">
                    <a class="bg-info" href="./">UA</a>
                    <span> | </span>
                    <a href="./en/">EN</a>
                </div>

            </div>
        </div>
    </nav>

    <div class="d-flex flex-column justify-content-center align-items-center text-center">

        <h1 class="display-6 text-center text-white">Інфраструктурна відбудова України. <br> Культурний розвиток
            населення.</h1>

        <div class="w-75 p-4 header-list">
            <h2 class="display-6">Наша місія</h2>

            <h4>Робити якісні інноваційні проекти силами професійної команди із залученням широкого кола партнерів і
                донорів.</h4>

            <p>Війна принесла величезні страждання та соціально-економічну шкоду людям. Хоча бойові дії не втихають,
                ракетні удари продовжують знищувати споруди та будівлі, обговорення та планування відновлення, яке
                врешті відбуватиметься, вже почалися.</p>
            <p>&nbsp;Ми дивимося у майбутнє, коли після завершення воєнних дій фокус уваги зміститься на відновлення
                інфраструктури. На нашу думку, заходи по відновленню України мають зосереджуватись не просто на
                відбудові зруйнованого, а на інвестуванні в майбутній розвиток.</p>
        </div>

        <div style="height: 100px"></div>

    </div>
</header>

<main>

    <div id="about"></div>
    <section class="pt-4">

        <div class="container">

            <h2 class="display-5 text-center m-5">Про нас</h2>

            <h2 class="h4 text-center m-4">Громадська організація <span style="white-space: nowrap;">«4 ВЛАДА ЮА»</span> – це команда людей, яка протягом останніх
                10 років на постійній основі допомагала дитячим будинкам, школам-інтернатам, багатодітним та
                малозабезпеченим сім’ям, особам з інвалідністю, внутрішньо переміщеним особам, самотнім
                пенсіонерам.</h2>


            <div class="border p-3">


                <p class="fs-4 mb-4">Але це були власні ініціативи. Наша офіційна історія розпочалася у важкий для
                    України час, навесні 2022 року з невеликої ініціативної групи: де досвідчені спеціалісти різних сфер
                    діяльності зіштовхнутися з нечуваними викликами.
                    Громадьска організація створена, щоб вирішувати конкретні проблеми міста та його населення, а також
                    допомагати вразливим групам населення.</p>
                <p class="fs-4 mb-4">Громадська організація <span style="white-space: nowrap;">«4 ВЛАДА ЮА»</span> – це команда людей, які вірять в те, що
                    ініціативи творять зміни, а кожен з нас є джерелом змін. Головне – працювати і не боятися втілювати
                    задумане в життя.</p>
                <p class="fs-4 mb-4">В нашій команді є дипломовані юристи, інженери, економісти, психологи. Це люди, які
                    зібралися, щоб діяти, змінювати та впливати.</p>
                <p class="fs-4 mb-4">Головною метою ГРОМАДСЬКОЇ ОРГАНІЗАЦІЇ <span style="white-space: nowrap;">«4 ВЛАДА ЮА»</span> є здійснення та захист прав і
                    свобод, задоволення суспільних, зокрема економічних, соціальних, культурних, екологічних та інших
                    інтересів її членів.</p>

                <h2 class="h2 text-center mb-4">Основні напрямки діяльності:</h2>

                <ul class="fs-4 mb-4">
                    <li>Організація заходів, підтримка проектів та ініціатив, спрямованих на економічну, інфраструктурну
                        та ментальну відбудову України.
                    </li>
                    <li>Сприяння у відновленні та реконструкції будівель та споруд, які було знищено або які зазнали
                        руйнувань внаслідок військових дій, також і тих, що є пам’ятками архітектури.
                    </li>
                    <li>Допомога людям, що постраждали від воєнних дій в Україні, сприяння у створенні та організації
                        роботи реабілітаційних центрів.
                    </li>
                    <li>Допомога внутрішньо переміщеним особам, військовим, ветеранам, малозабезпеченим родинам, людям з
                        обмеженими можливостями, дітям, дітям з освітніми проблемами.
                    </li>
                    <li>Сприяння захисту материнства та дитинства, а також допомога дітям та дітям з особливими
                        освітніми проблемами. Допомога дітям, дітям-сиротам, дітям, які залишились без опіки, дітям, які
                        постраждали під час бойових дій, багатодітним родинам.
                    </li>
                    <li>Популяризація серед населення подвигу героїв України шляхом видання книг, виробництва фільмів
                        роликів, проведення семінарів, виставок, презентацій тощо.
                    </li>
                    <li>Захист законних прав, задоволення потреб громадян у галузі фізичного виховання, спорту та
                        здоров’я людини.
                    </li>
                    <li>Сприяння збереженню природного довкілля, зменшення негативного впливу на нього, підвищення
                        екологічної свідомості населення шляхом популяризації екологічного способу життя.
                    </li>
                </ul>

                <p class="fs-4">Ми бажаємо бути суспільно корисними у цей важкий для всієї країни час. Тому багато
                    робиться для залучення партнерів та донорів до соціально важливих проектів.</p>
                <p class="fs-4 mb-4">У фокусі уваги є громадська активність на місцевому рівні.
                    Ми завжди відкриті для кожного, ми контролюємо всі надходження, розповідаємо про наші плани і
                    проведену роботу.</p>


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

                <h2 class="display-5 text-center">ДОПОМОГА:</h2>


                <div class="mt-4" style="max-width: 900px;">

                    <p class="fs-4"><b>ГРОМАДСЬКА ОРГАНІЗАЦІЯ <span style="white-space: nowrap;">&laquo;4 ВЛАДА ЮА&raquo; </span></b>працює на
                        волонтерських засадах &mdash; всі пожертви використовуються безпосередньо на діяльність,
                        спрямовану на відбудову України, допомогу військовим та громадянам, які постраждали через війну.
                    </p>
                    <p class="fs-4">Ми&nbsp;регулярно звітуємо про надходження та використання коштів.</p>

                    <p class="fs-4">Долучитися до нашої діяльності ви можете офіційно на банківський рахунок організації:</p>

                    <p class="fs-4">Найменування отримувача:&nbsp;<b style="white-space: nowrap;">ГО 4 Влада ЮА</b>

                    <p class="fs-4">Код отримувача:&nbsp;<b>44714586</b></p>

                    </p>
                    <p class="fs-4">Рахунок отримувача: <strong>UA723133990000026009010208959</strong></p>

                    <p class="fs-4">Назва банку: <b>Запорiзьке РУ АТ КБ "ПриватБанк"</b></p>

                    <p class="fs-4">Призначення платежу: <b>Добровільна пожертва</b></p>

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

                <h2 class="display-5 text-center mb-4">Волонтерство</h2>


                <p class="fs-4">Якщо Ви маєте бажання та можливість долучитися до діяльності <b>ГРОМАДСЬКОЇ
                    ОРГАНІЗАЦІЇ <span style="white-space: nowrap;">&laquo;4 ВЛАДА ЮА&raquo; </span></b>як волонтер,&nbsp;а також підтримати нашу країну та її
                    громадян, що опинились в тяжких життєвих обставинах, то потрібно зробити лише два кроки:</p>
                <ol class="fs-4">
                    <li>Завітати на співбесіду в офіс;</li>
                    <li>Надіслати свої ідеї, бажання чи пропозиції на електронну пошту.</li>
                </ol>

                <p class="fs-4">Для того, щоб приєднатися до нашої команди, потрібне лише щире бажання бути корисним для
                    соціуму та допомагати тим, хто цього потребує!</p>

                <h2 class="h2 text-center mb-4">Ваші вміння можуть стати нам у пригоді:</h2>

                <ul class="fs-4">
                    <li>організація офлайн- або онлайн-заходів (круглих столів, виставок, прес-конференцій)</li>
                    <li>інформаційна діяльність (SMM, переклади, виготовлення контенту)</li>
                    <li>комунікація (з громадськими організаціями, владою, міжнародними партнерами)</li>
                    <li>дослідження (опитування, інтерв&rsquo;ю)</li>
                    <li>волонтерська допомога військовим та переселенцям (транспортування, роздача допомоги)</li>
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
            <h2 class="display-5 mb-5 pb-md-4">Ми допомагаємо</h2>
        </div>

        <div class="container-md">

            <div class="d-flex flex-wrap justify-content-evenly mb-5" style="max-width: 1300px;">
                
                <?php foreach ($posts as $post): ?>
                    
                    <div class="card m-1 mb-3" style="max-width: 400px;">
                        <img src="root/<?= $post['uri'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text fs-4"><?= $post['text'] ?></p>
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


            <h4 class="h4 mb-3">КОНТАКТИ:</h4>
            <div class="">

                <p class="fs-5 me-4">69001, Україна, м. Запоріжжя, пр. Соборний 177, офіс 1</p>
                <p class="fs-5 me-4">Тел.: <a href="tel:+3800934575757">+38 (095) 500 500 2</a></p>

                <div>
                    <p class="fs-5">email: <a href="mailto:4vlastua@gmail.com">4vlastua@gmail.com</a></p>

                </div>


            </div>

            <div></div>

        </div>

        <div class="pt-4 text-center">
            <p class="fs-5">© 2022 - «4ВладаЮА». Всі права захищені.</p>
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