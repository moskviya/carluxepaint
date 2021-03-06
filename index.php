<?php
$api = [
    'key' => '12040',
    'secret' => '4JJjmV8qfsd8w4oPmfbOL7F1HKW9nBMI',
    'flow_url' => 'https://leadrock.com/URL-40C39-32F42?sub1=g'
];

function send_the_order($post, $api)
{
    $params = [
        'flow_url' => $api['flow_url'],
        'user_phone' => $post['phone'],
        'user_name' => $post['name'],
        'other' => $post['other'],
        'ip' => $_SERVER['REMOTE_ADDR'],
        'ua' => $_SERVER['HTTP_USER_AGENT'],
        'api_key' => $api['key'],
        'sub1' => $post['sub1'],
        'sub2' => $post['sub2'],
        'sub3' => $post['sub3'],
        'sub4' => $post['sub4'],
        'sub5' => $post['sub5'],
        'ajax' => 1,
    ];
    $url = 'https://leadrock.com/api/v2/lead/save';

    $trackUrl = $params['flow_url'] . (strpos($params['flow_url'], '?') === false ? '?' : '&') . http_build_query($params);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $trackUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    $params['track_id'] = curl_exec($ch);

    $params['sign'] = sha1(http_build_query($params) . $api['secret']);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
    curl_exec($ch);
    curl_close($ch);

    header('Location: ' . (empty($post['success_page']) ? 'confirm.html' : $post['success_page']));
}

if (!empty($_POST['phone'])) {
    send_the_order($_REQUEST, $api);
}

if (!empty($_GET)) {
?>
    <script type="text/javascript">
        window.onload = function() {
            let forms = document.getElementsByTagName("form");
            for(let i=0; i<forms.length; i++) {
                let form = forms[i];
                form.setAttribute('action', form.getAttribute('action') + "?<?php echo http_build_query($_GET)?>");
                form.setAttribute('method', 'post');
            }
        };
    </script>
<?php
}

?>
<!DOCTYPE html><html><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.12.3, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="img/paint-regen-logo-alta.png" type="image/x-icon">
    <meta name="description" content>
    <title>CarLuxe Paint против надраскване</title>
    <link href="css/css2.css" rel="stylesheet">
    <link rel="stylesheet" href="css/mobirise-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/tether.min.css">
    <link rel="stylesheet" href="css/style_1.css">
    <link rel="stylesheet" href="css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="css/mbr-additional.css" type="text/css">
    <script src="js/adb3ad8199.js"></script>
</head>

<body>
    <section class="menu cid-s2PXY7YXl5" once="menu" id="menu2-1">
        <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="menu-logo">
                <div class="navbar-brand">
                    <span class="navbar-logo"> <img src="img/paint-regen-logo-alta.png" alt="Mobirise" title style="height: 3.8rem;"></span>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="#header7-4"> ВИДЕО</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="#testimonials1-c"> Отзиви</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="#toggle1-a"> Често задавани въпроси</a>
                    </li>
                </ul>
                <div class="navbar-buttons mbr-section-btn">
                    <a class="btn btn-sm btn-primary display-4" href="#form4-1a">
                        <span class="mbri-delivery mbr-iconfont mbr-iconfont-btn"></span> ПОРЪЧАЙ СЕГА</a>
                </div>
            </div>
        </nav>
    </section>
    <section class="engine"><a href="https://mobirise.info/r"> free bootstrap templates</a></section>
    <section class="header14 cid-s2PXZVyUBl mbr-fullscreen" id="header14-2">
        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);"></div>

        <div class="container">
            <div class="media-container-row">
                <div class="mbr-figure" style="width: 60%;">
                    <img src="img/bote.png" alt="Mobirise" title>
                </div>

                <div class="media-content">
                    <h1 class="mbr-section-title pb-3 align-left mbr-white mbr-fonts-style display-1" style="color: #f7ed4a;">
                        <strong> Има ли драскотини по колата?</strong>
                        <strong>
                            <br> Ето как да ги премахнете за постоянно!</strong>
                    </h1>

                    <div class="mbr-section-text pb-3">
                        <p class="mbr-text align-left mbr-white mbr-fonts-style display-5"> * Премахва драскотини от колата<br> * Не уврежда боята<br> * Колата е като нова</p>

                        <p class="mbr-text text2 pt-4 mbr-light mbr-fonts-style display-2" style="line-height: 50px;">
                            <span style="font-size: 2.5rem; font-weight: bold; color: red!important;"> </span><span style="font-weight: bold; color: #f7ed4a; font-size: 2.5rem;"> 79Lv </span>
                            <strike style="color: red;"><span style="color: white; font-weight: bold; font-size: 2rem;"> 160Lv</span></strike>
                        </p>
                    </div>

                    <div class="media-container-column" data-form-type="formoid">
                        <div hidden="hidden" data-form-alert-danger class="alert alert-danger col-12"></div>
                    </div>
                    <div class="dragArea row form-inline">
                        <div class="mbr-section-btn"><a class="btn btn-md btn-primary display-4" href="#form4-1a"> ПОРЪЧАЙ СЕГА</a></div>
                    </div>
                    <!---Formbuilder Form--->
                </div>
            </div>
        </div>
    </section>
    <section class="mbr-section content5 cid-s2PYNvnyUw" id="content5-3">
        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">
                        <strong> Леки удари при маневриране, удари по небрежност - сега всичките им последици се премахват много лесно!</strong>
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <section class="header7 cid-s2PYQAU7tQ" id="header7-4">
        <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(35, 35, 35);"></div>

        <div class="container">
            <div class="media-container-row">
                <div class="media-content align-right">
                    <h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-2" style="color: #f7ed4a;">
                        <strong> Отървете се от драскотини!</strong></h1>
                    <div class="mbr-section-text mbr-white pb-3">
                        <p class="mbr-text mbr-fonts-style mbr-light display-5"> Рано или късно на всяка кола се появяват драскотини. Така е, но не забравяйте, че са лесни за премахване.</p>
                    </div>
                    <div class="mbr-section-btn"><a class="btn btn-md btn-primary display-4" href="#form4-1a"> ПОРЪЧАЙ СЕГА</a></div>
                </div>

                <div class="mbr-figure video-wrap" style="width: 100%;height: 507px">
                    <div class="youtube" id="ZGqmEE8sG4c"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="header3 cid-s2PYQUDymh" id="header3-5">
        <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(35, 35, 35);"></div>

        <div class="container">
            <div class="media-container-row">
                <div class="mbr-figure" style="width: 100%;">
                    <img src="img/11-3.png" alt="Mobirise" title>
                </div>

                <div class="media-content">
                    <h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-2" style="color: #f7ed4a;">
                        <strong> Подходящ за всички повърхности</strong></h1>

                    <div class="mbr-section-text mbr-white pb-3">
                        <p class="mbr-text mbr-fonts-style mbr-light display-5"> Всички искат колата да е в перфектно състояние. Отсега нататък отличен резултат, както и значителни икономии на време и пари, са гарантирани!</p>
                    </div>
                    <div class="mbr-section-btn"><a class="btn btn-md btn-primary display-4" href="#form4-1a"> ПОРЪЧАЙ СЕГА</a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="header3 cid-s2PYSggNlx" id="header3-6">
        <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(35, 35, 35);"></div>

        <div class="container">
            <div class="media-container-row">
                <div class="mbr-figure" style="width: 100%;">
                    <img src="img/giphy.gif" alt="Mobirise" title>
                </div>

                <div class="media-content">
                    <h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-2" style="color: #f7ed4a;">
                        <strong> Подходящ за всеки тип корпус</strong></h1>

                    <div class="mbr-section-text mbr-white pb-3">
                        <p class="mbr-text mbr-fonts-style mbr-light display-5"> Грешна маневра или твърде висок бордюр, шофьор, който е повредил колата ви, или дори вандализъм ... Каквато и да е причината за драскотината, от днес можете да разрешите този проблем с CarLuxe Paint!<br>
                            <br> Ако драскотините не са твърде дълбоки, препоръчваме да използвате CarLuxe Paint - чудесен продукт за премахване на драскотини от вашия автомобил, лодка, мотоциклет и всяка боядисана повърхност.<br>
                        </p>
                    </div>
                    <div class="mbr-section-btn"><a class="btn btn-md btn-primary display-4" href="#form4-1a"> ПОРЪЧАЙ СЕГА</a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="mbr-section content5 cid-s2Q7gzlwMG" id="content5-8">
        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1"> Премахва малки драскотини по повърхността</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="features18 popup-btn-cards cid-s2Q6CfIkLz" id="features18-7">
        <div class="container">
            <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2"><strong> Как се използва CarLuxe Paint?</strong></h2>
            <h3 class="mbr-section-subtitle display-5 align-center mbr-fonts-style mbr-light"> На първо място, важно е да почистите повърхността, върху която ще нанесете продукта. След това нанесете CarLuxe Paint и изчакайте няколко минути, докато продуктът изсъхне. Резултатът ще ви изненада!</h3>
            <div class="media-container-row pt-5">
                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-wrapper">
                        <div class="card-img">
                            <img src="img/10.png" alt="Mobirise" title>
                        </div>

                        <div class="card-box">
                            <h4 class="card-title mbr-fonts-style display-7"> Разклатете<br> CarLuxe Paint<br>
                                <br>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-wrapper">
                        <div class="card-img">
                            <img src="img/11-2.png" alt="Mobirise" title>
                        </div>

                        <div class="card-box">
                            <h4 class="card-title mbr-fonts-style display-7"> Нанесете директно <br> върху повредената повърхност<br>
                                <br>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-wrapper">
                        <div class="card-img">
                            <img src="img/12.png" alt="Mobirise" title>
                        </div>

                        <div class="card-box">
                            <h4 class="card-title mbr-fonts-style display-7"> Избършете излишното с парцал<br>
                                <br>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mbr-section content5 cid-s2Q9uyRc4I" id="content5-9">
        <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(35, 35, 35);"></div>

        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1"> Премахва щетите за минути</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="mbr-section content4 cid-s2QaTnXKlZ" id="content4-h">
        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center pb-3 mbr-fonts-style display-2"><strong> CarLuxe Paint може да се използва за:</strong></h2>
                </div>
            </div>
        </div>
    </section>
    <section class="features9 cid-s2QapjwnQm" id="features9-g">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card p-3 col-12 col-md-6 col-lg-3">
                    <div class="media-container-row">
                        <div>
                            <img src="img/coche.png" style="width: 5rem;">
                        </div>

                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-7" style="font-size: 1.3rem;"> Корпуса<br> на автомобила</h4>
                        </div>
                    </div>
                </div>

                <div class="card p-3 col-12 col-md-6 col-lg-3">
                    <div class="media-container-row">
                        <div>
                            <img src="img/embarcacion.png" style="width: 5rem;">
                        </div>

                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-7" style="font-size: 1.3rem;"> корпуса<br> на лодка<br> боядисани<br> в определени цветове</h4>
                        </div>
                    </div>
                </div>

                <div class="card p-3 col-12 col-md-6 col-lg-3">
                    <div class="media-container-row">
                        <div>
                            <img src="img/scooter.png" style="width: 5rem;">
                        </div>

                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-7" style="font-size: 1.3rem;"> корпус<br> на мотоциклет</h4>
                        </div>
                    </div>
                </div>

                <div class="card p-3 col-12 col-md-6 col-lg-3">
                    <div class="media-container-row">
                        <div>
                            <img src="img/bicicleta.png" style="width: 5rem;">
                        </div>

                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-7" style="font-size: 1.3rem;">  рамка<br> велосипедна </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features3 cid-s2Us41nZdA" id="features3-j">
        <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(35, 35, 35);"></div>
        <div class="container">
            <p class="card-title mbr-fonts-style display-5" style="font-size: 3rem; color: yellow;"> Опаковката съдържа:</p>
            <br>
            <br>
            <div class="media-container-row">
                <div class="card p-3 col-12 col-md-6">
                    <div class="card-wrapper">
                        <div class="card-img">
                            <img src="img/19.png" alt="Mobirise" title>
                        </div>

                        <div class="card-box">
                            <h4 class="card-title mbr-fonts-style display-2"><strong> CarLuxe Paint</strong></h4>
                            <p class="mbr-text mbr-fonts-style display-5">  - 1 CarLuxe Paint в туба 100 мл <br>  - 1 инструкция</p>

                            <p class="mbr-text text2 pt-4 mbr-light mbr-fonts-style display-2" style="line-height: 50px;">
                                <span style="font-size: 2.5rem; font-weight: bold; color: red!important;"> </span><span style="font-weight: bold; color: #dc2323; font-size: 2.5rem;"> 79Lv </span>
                                <strike style="color: red;"><span style="color: grey; font-weight: bold; font-size: 2rem;"> 160Lv</span></strike>
                            </p>
                        </div>
                        <div class="mbr-section-btn text-center">
                            <a href="#form4-1a" class="btn btn-primary display-4"> ПОРЪЧАЙ СЕГА</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials1 cid-s2Q9U8dJlP" id="testimonials1-c">
        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 align-center">
                    <h2 class="pb-3 mbr-fonts-style display-2"> Доволни купувачи</h2>
                </div>
            </div>
        </div>

        <div class="container pt-3 mt-2">
            <div class="media-container-row">
                <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                    <div class="panel-item p-3">
                        <div class="card-block">
                            <div class="testimonial-photo">
                                <img src="img/7.png" alt title>
                            </div>

                            <p class="mbr-text mbr-fonts-style display-7">
                                <strong> Надежден</strong><br> Купих CarLuxe Paint за ремонт на автомобила и съм много доволен от резултата! С удоволствие бих препоръчал на всички да ремонтират колата си, ще спестите време и пари!</p>
                        </div>
                        <div class="card-footer">
                            <div class="mbr-author-name mbr-bold mbr-fonts-style display-7"> Иван Динев</div>
                            <small class="mbr-author-desc mbr-italic mbr-light mbr-fonts-style display-7"> Варна, 25 юни 2020 </small>
                        </div>
                    </div>
                </div>

                <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                    <div class="panel-item p-3">
                        <div class="card-block">
                            <div class="testimonial-photo">
                                <img src="img/9.png" alt title>
                            </div>

                            <p class="mbr-text mbr-fonts-style display-7">
                                <strong> Надминава очакванията!<br></strong> Купих CarLuxe Paint, след като прочетох страхотни отзиви за продукта и цената беше добра. Имах доста забележима драскотина на капака на колата си, затова реших да се опитам да се справя с нея ... 100% съм доволна от резултата!</p>
                        </div>
                        <div class="card-footer">
                            <div class="mbr-author-name mbr-bold mbr-fonts-style display-7"> Мария Кръстева</div>
                            <small class="mbr-author-desc mbr-italic mbr-light mbr-fonts-style display-7"> Бургас, 31 май 2020 </small>
                        </div>
                    </div>
                </div>

                <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                    <div class="panel-item p-3">
                        <div class="card-block">
                            <div class="testimonial-photo">
                                <img src="img/6.jpg" alt title>
                            </div>

                            <p class="mbr-text mbr-fonts-style display-7">
                                <strong> Великолепно нещо!<br></strong> CarLuxe Paint е чудесно решение! С покупката всичко беше наред: доставено навреме, опаковката е отлична, отговаря на описанието</p>
                        </div>
                        <div class="card-footer">
                            <div class="mbr-author-name mbr-bold mbr-fonts-style display-7"> Пеньо Русев</div>
                            <small class="mbr-author-desc mbr-italic mbr-light mbr-fonts-style display-7"> София, 15 юни 2020 </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: white;" class="mbr-section form4 cid-rJ1vGJIDwP" id="form4-1a">
        <div class="container">
            <div>
                <center>
                    <br>
                    <div class="hz_zachem_eto">
                        <h2 class="pb-3 align-left mbr-fonts-style display-2">
                            <center>
                                <strong style="color: white;"> СУПЕР ОФЕРТА<br></strong> <em style="color: yellow; font-size: 1.5rem;"> CarLuxe Paint в туба 100 мл х 79Lv</em>
                            </center>
                        </h2>
                        <div>
                            <div class="icon-block pb-3 align-left">
                                <h4 class="icon-block__title align-left mbr-fonts-style display-5">
                                    <center><span style="font-style: normal; color: white;"> Попълнете формуляра и той ще бъде ваш след 24/72 часа</span></center>
                                </h4>
                            </div>
                            <div class="icon-contacts pb-3">
                                <div style="background: #083d77; max-width: 600px;" class="shakehorizontal">
                                    <h3 class="align-left mbr-fonts-style display-2">
                                        <center>
                                            <strong style="color: yellow; text-align: center!important;">
                                                <br>
                                                <i class="fas fa-clock" style="color: yellow;"></i>
                                                 <span>ПРОМОЦИЯТА ЩЕ CВЪРШИ СКОРО</span>
                                                 <i class="fas fa-clock" style="color: yellow;"></i><br>
                                                <br>
                                            </strong>
                                        </center>
                                    </h3>
                                </div>
                                <center>
                                    <span style="color: white!important; font-family: sans-serif;"> Текуща оферта:<strong> CarLuxe Paint в туба 100 мл х 79Lv</strong></span>
                                </center>
                                <br>
                                <div style="background: #083d77; border-radius: 7px; max-width: 600px;">
                                    <h3 class="align-left mbr-fonts-style display-4">
                                        <center style="display: flex; justify-content: center;">
                                            <strong style="color: white; display: flex; justify-content: space-between; align-items: center;">
                                                    <i class="fas fa-money-bill-wave"></i>&nbsp;Плащане&nbsp;<strong> ПРИ ПОЛУЧАВАНЕ</strong><br>
                                                    <br>
                                                </strong>

                                        </center>
                                    </h3>
                                </div>
                            </div>

                            <br>
                        </div>

                        <div data-form-type="formoid">
                            <form method="post" action="">
                                <center>
                                    <h3 class="title"> ПОПЪЛНЕТЕ ФОРМАТА</h3>
                                </center>
                                <div class="form-group">
                                    <label> Например: Иван Петров</label>
                                    <input type="text" name="name" class="form-control" placeholder="Въведете вашето име" required="required">
                                </div>
                                <div class="form-group">
                                    <label> Например: +359 123 1234</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="Въведете Вашият телефонен номер" required="required" value>
                                </div>
                                <center>
                                    <button id="submit-button" class="btn btn-lg btn-warning new-sbm-btn" type="submit"> Поръчай </button>
                                </center>
                            </form>

                        </div>
                    </div>
                </center>
            </div>
        </div>
        <br>
    </section>

    <section class="toggle1 cid-s2Q9QPRNZU" id="toggle1-a">
        <div class="container">
            <div class="media-container-row">
                <div class="col-12 col-md-8">
                    <div class="section-head text-center space30">
                        <h2 class="mbr-section-title pb-5 mbr-fonts-style display-1"><strong> Често задавани въпроси</strong></h2>
                    </div>
                    <div class="clearfix"></div>
                    <div id="bootstrap-toggle" class="toggle-panel accordionStyles tab-content">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <div role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core href="#collapse1_13" aria-expanded="false" aria-controls="collapse1">
                                    <h4 class="mbr-fonts-style display-5"><span class="sign mbr-iconfont mbri-arrow-down inactive"></span> Къде можете да поръчате продукта?</h4>
                                </div>
                            </div>
                            <div id="collapse1_13" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body p-4">
                                    <p class="mbr-fonts-style panel-text display-7"> Продуктът е достъпен само онлайн. Попълнете формуляра и мениджърът ще се свърже с вас.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo">
                                <div role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core href="#collapse2_13" aria-expanded="false" aria-controls="collapse2">
                                    <h4 class="mbr-fonts-style display-5"><span class="sign mbr-iconfont mbri-arrow-down inactive"></span> Кога ще получа пакета си?</h4>
                                </div>
                            </div>
                            <div id="collapse2_13" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body p-4">
                                    <p class="mbr-fonts-style panel-text display-7"> Доставката обикновено отнема 1-3 работни дни. С изключение на почивните и празничните дни.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree">
                                <div role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core href="#collapse5_13" aria-expanded="false" aria-controls="collapse5">
                                    <h4 class="mbr-fonts-style display-5"><span class="sign mbr-iconfont mbri-arrow-down inactive"></span> Мога ли да платя при получаване?</h4>
                                </div>
                            </div>
                            <div id="collapse5_13" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body p-4">
                                    <p class="mbr-fonts-style panel-text display-7"> Да. Плащате само когато куриерът достави стоката.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="header4 cid-rY6KzqkjB0" id="header4-7">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="media-content col-md-10">
                    <div class="mbr-text align-center mbr-white pb-3"></div>
                </div>
                <!-- <div class="mbr-figure pt-5">
                    <img src="img/ks-icone-footer-white-1-508x98.png" alt="SERVICES" title style="width: 50%;">
                </div> -->
            </div>
        </div>
    </section>
    <section once="footers" class="cid-rY6KydDXnH" id="footer7-6">
        <div class="container">
            <div class="media-container-row align-center mbr-white">
                <div class="row row-copirayt">
                    <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7" style="color: white;"> Trestadar INC, 720 Oak Drive, Carlock, IL 61725, USA</p>
                </div>
                <div class="row row-links">
                    <ul class="foot-menu">
                        <li class="foot-menu-item mbr-fonts-style display-7">
                            <a href="policy_bg.html" target="_blank"> политика за поверителност</a>
                        </li>
                    </ul>
                </div>


            </div>
        </div>
    </section>
    <div class="feedback">
        <img src="img/i-phone.png" alt>
    </div>
    <div class="popup-window">
        <div class="close-popup"></div>
        <form method="POST" action="">
            <label for="name2"> Например: Иван Петров</label>
            <input id="name2" type="text" name="name" placeholder="Въведете вашето име" required>
            <label for="phone2"> Например: +359 123 1234</label>
            <input id="phone2" type="tel" name="phone" placeholder="Въведете Вашият телефонен номер" required>
            <button type="submit"> поръчай</button>
        </form>
    </div>
    <style>
        .feedback {
        width: 75px;
        height: 70px;
        position: fixed;
        right: -15px;
        top: 30%;
        display: flex;
        align-items: center;
        background-color: #dc2323;
        padding-left: 10px;
        border-top-left-radius: 35px;
        border-bottom-left-radius: 35px;
        cursor: pointer;
        z-index: 1000;
        box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.3);
        transition: all .5s;
    }

    .feedback:hover {
        right: 0;
    }

    .feedback img {
        width: 50px;
        height: 50px;
    }

    .popup-window {
        font-family: inherit;
        display: none;
        width: 300px;
        position: fixed;
        right: 0;
        top: 15%;
        padding: 35px 10px;
        background: #fff;
        border-radius: 5px;
        z-index: 2000;
    }

    .popup-window form {
        width: 100%;
        min-height: auto;
        padding: 0;
        background: inherit;
        box-shadow: none;
    }

    .popup-window label {
        display: block;
        margin-bottom: 5px;
        font-size: 14px;
        color: #333;
        text-transform: uppercase;
        font-family: Oswald, sans-serif;
    }

    .popup-window input {
        box-sizing: border-box;
        width: 100%;
        height: auto;
        margin-bottom: 10px;
        padding: 10px;
        border: none;
        font-family: inherit;
        font-size: 16px;
        margin-bottom: 15px;
        border: 1px solid #333;
        font-family: Oswald, sans-serif;
    }

    .popup-window button {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background: #dc2323;
        color: #fff;
        cursor: pointer;
        font-family: inherit;
        font-size: 16px;
        font-weight: bold;
        text-transform: uppercase;
        margin-top: 15px;
        border-radius: 20px;
        font-family: Oswald, sans-serif;
    }

    .close-popup {
        position: absolute;
        right: 10px;
        top: 5px;
        width: 27px;
        height: 27px;
        background-color: #fff;
        cursor: pointer;
    }

    .close-popup:before {
        content: "";
        background: #333;
        width: 20px;
        height: 1px;
        position: absolute;
        top: 13px;
        left: 4px;
        transform: rotate(-45deg);
    }

    .close-popup:after {
        content: "";
        background: #333;
        width: 20px;
        height: 1px;
        position: absolute;
        top: 13px;
        left: 4px;
        transform: rotate(45deg);
    }
    </style>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/nav-dropdown.js"></script>
    <script src="js/navbar-dropdown.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/jquery.touch-swipe.min.js"></script>
    <script src="js/mbr-popup-btns.js"></script>
    <script src="js/mbr-switch-arrow.js"></script>
    <script src="js/script.js"></script>
    <script src="js/previewYouTube.js"></script>
    <script>
        $(document).ready(function () {

            $('.feedback').click(function () {
                $('.popup-window').show();
            });
            $('.close-popup').click(function () {
                $('.popup-window').hide();
            });

        });
    </script>
<script type="text/javascript" src="https://cdn.ldrock.com/additionals.js?geo=BG"></script>
<script type="text/javascript" src="https://cdn.ldrock.com/validator.js"></script>
<script type="text/javascript">
    LeadrockValidator.init({
        geo: {
            iso_code: 'BG'
        }
    });
</script>
</body></html>