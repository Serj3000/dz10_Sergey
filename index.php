<?php

$arr = [
    [ //Page #1 
        'picter' => 'img/simp-Bart.png',
        'name_candidate' => 'John',
        'suname_candidate' => 'Doe',
        'annotation' => 'An experienced and professional bar manager with a strong interest to increase customer satisfaction and at the same time make sure all the operations are being done property and the staff is happy.',
        'last_prof' => 'Bar Manager',
        'last_job' => 'El Presidente',
        'email' => 'john@gmaile.comed',
        'tel' => '(045) 67 83 678',
        'siti' => 'Sydney',
        'contry' => 'Australia',
        'wild' => 'joh`ndo`e',
        //---Start WORK EXPERINCE-----          
        'work' => [
            [
                //Task #1                           
                'prof' => 'Bar Manager',
                'job' => 'El Presidente',
                'start_year' => '01.06.2013',
                'end_year' => '01.12.2014',
                'city_expert' => 'Paris',
                'country_expert' => 'France',
                'longitude_expert' => '21',
                'latitude_expert' => '37',
                'expert_text' => [
                    '1.1) It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less readable English.',
                    '1.2) Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy.',
                    '1.3) Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                ],
                'contact' => [
                    'contact_name' => 'Vince Scariett',
                    'contact_tel' => '(021) 213 235',
                    'contact_email' => null,
                ],
            ],
            [
                //Task #2                                                               
                'prof' => 'Bartender',
                'job' => 'The hloMad Meeting Point',
                'start_year' => '01.06.2008',
                'end_year' => '01.12.2013',
                'city_expert' => 'Sydney',
                'country_expert' => 'Australia',
                'longitude_expert' => '34',
                'latitude_expert' => '57',
                'expert_text' => [
                    '2.1) There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.',
                    '2.2) All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.',
                    '2.3) he generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc',
                ],
                'contact' => [
                    'contact_name' => 'Jackson Parish',
                    'contact_tel' => '(021) 415 274',
                    'contact_email' => 'jack@nomad.ma',
                ],
            ],
            [
                //Task #3                                                           
                'prof' => 'Der',
                'job' => 'Mad Point',
                'start_year' => '01.06.2009',
                'end_year' => '01.12.2014',
                'city_expert' => 'Rome',
                'country_expert' => 'Italy',
                'longitude_expert' => '28',
                'latitude_expert' => '427',
                'expert_text' => [
                    '3.1) Since July 1944 the institution was moved to Odessa and renamed Odessa Hydrometeorological Institute (OHMI).',
                    '3.2) Dapibus ac facilisis in Dapibus ac facilisis in Dapibus ac facilisis in Dapibus ac facilisis in Dapibus ac facilisis in Dapibus',
                    '3.3) Morbi leo risus Morbi leo risus Morbi leo risus Morbi leo risus Morbi leo risus Morbi leo risus Morbi leo risus',
                ],
                'contact' => [
                    'contact_name' => 'Vince Scariett',
                    'contact_tel' => '(021) 213 235',
                    'contact_email' => null,
                ],
            ],
        ], //---------end--------------
        //--------------------------------------Start SKILLS & COMPETENCES-------------------------------------------   
        'skills' => [
            ['compet' => 'Project vanagement', 'skill' => 25,],
            ['compet' => 'Critical', 'skill' => 45,],
            ['compet' => 'Working under pressure', 'skill' => 35,],
            ['compet' => 'Teamwork', 'skill' => 94,],
            ['compet' => 'Time management', 'skill' => 94,],
        ],
        //-----------------------------------------Start CERTIFICATES------------------------------------------------   
        'certificates' => [
            //'certificat1'
            [
                'name_cert' => 'Foundation Leadership Program Certificate',
                'corp_cert' => 'By CSE EMTW Education Institute',
                'date_cert' => '01.05.2015',
                //'lastdate_cert' => null,
            ],
            //'certificat2'
            [
                'name_cert' => 'European Bartender Schoo',
                'corp_cert' => 'Corporation in London, UK',
                'date_cert' => '02.11.2009',
                //'lastdate_cert' => '01.05.2008',
            ],
            //'certificat3' 
            [
                'name_cert' => 'SEO Traning',
                'corp_cert' => 'A & B',
                'lastdate_cert' => '10.11.2012',
                //'lastdate_cert' => null,
            ],
        ],
        //-------------------------------------------Start EDUCATION-------------------------------------------------
        'education' => [
            "spec_edu" => "Service Management",
            "name_edu" => "Brisbene University",
            "start_date_edu" => "01.08.2006",
            "end_date_edu" => "01.06.2008",
        ],
        //-------------------------------------------Start LANGUAGES-------------------------------------------------    
        'lang_expert' => [
            ['lang' => 'English', 'level' => 'Expert'],
            ['lang' => 'French', 'level' => 'Middle'],
            ['lang' => 'Spanish', 'level' => 'Junior'],
            ['lang' => 'Portuguse', 'level' => 'Senjor'],
        ],
        //--------------------------------------------Start INTERESTS----------------------------------------------------
        'botton' => [
            "Economics",
            "Psychology",
            "Chess",
            "Marketing",
            null,
        ],
    ],
    //-------------
    [ //Page #2 
        'picter' => 'img/simp.png',
        'name_candidate' => 'Maria',
        'suname_candidate' => 'Krusenstern',
        'annotation' => 'Satisfaction and at the same time make sure all the operations are being done property and the staff is happy.', // "abstract"
        'last_prof' => 'Bar Manager',
        'last_job' => 'El Presidente',
        'email' => 'maria@gmaile.comed',
        'tel' => '(045) 56 27 371',
        'siti' => 'Paris',
        'contry' => 'France',
        'wild' => 'ndo`e',
        //-------------------------------------------Start WORK EXPERINCE-------------------------------------------------           
        'work' => [
            [
                //Task #1                           
                'prof' => 'Manager',
                'job' => 'El Presidente',
                'start_year' => '01.04.2012',
                'end_year' => '01.11.2014',
                'city_expert' => 'Paris',
                'country_expert' => 'France',
                'longitude_expert' => '23',
                'latitude_expert' => '39',
                'expert_text' => [
                    '1.1) Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', // "text1-1" => "Since July 1944 the institution was moved to Odessa and renamed Odessa Hydrometeorological Institute (OHMI).",
                    '1.2) Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words', // "text1-2" => "Dapibus ac facilisis in Dapibus ac facilisis in Dapibus ac facilisis in Dapibus ac facilisis in Dapibus ac facilisis in Dapibus",
                    '1.3) Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', // "text1-3" => "Morbi leo risus Morbi leo risus Morbi leo risus Morbi leo risus Morbi leo risus Morbi leo risus Morbi leo risus",
                ],
                'contact' => [
                    'contact_name' => 'Vince Scariett',
                    'contact_tel' => '(021) 213 235',
                    'contact_email' => null,
                ],
            ],
            [
                //Task #2                                                               
                'prof' => 'Bartender',
                'job' => 'The hloMad Meeting Point',
                'start_year' => '01.06.2011',
                'end_year' => '01.12.2012',
                'city_expert' => 'Paris',
                'country_expert' => 'France',
                'longitude_expert' => '18',
                'latitude_expert' => '47',
                'expert_text' => [
                    '2.1) Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', // "text1-1" => "Since July 1944 the institution was moved to Odessa and renamed Odessa Hydrometeorological Institute (OHMI).",
                    '2.2) Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', // "text1-2" => "Dapibus ac facilisis in Dapibus ac facilisis in Dapibus ac facilisis in Dapibus ac facilisis in Dapibus ac facilisis in Dapibus",
                    '2.3) Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.', // "text1-3" => "Morbi leo risus Morbi leo risus Morbi leo risus Morbi leo risus Morbi leo risus Morbi leo risus Morbi leo risus",
                ],
                'contact' => [
                    'contact_name' => 'Dince Hariett',
                    'contact_tel' => '(021) 517 281',
                    'contact_email' => null,
                ],
            ],
            [
                //Task #3                                                           
                'prof' => 'Bar',
                'job' => 'El',
                'start_year' => '01.06.2009',
                'end_year' => '01.12.2011',
                'city_expert' => 'Sydney',
                'country_expert' => 'Australia',
                'longitude_expert' => '26',
                'latitude_expert' => '24',
                'expert_text' => [
                    '3.1) But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness', // "text1-1" => "Since July 1944 the institution was moved to Odessa and renamed Odessa Hydrometeorological Institute (OHMI).",
                    '3.2) No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.', // "text1-2" => "Dapibus ac facilisis in Dapibus ac facilisis in Dapibus ac facilisis in Dapibus ac facilisis in Dapibus ac facilisis in Dapibus",
                    '3.3) Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.', // "text1-3" => "Morbi leo risus Morbi leo risus Morbi leo risus Morbi leo risus Morbi leo risus Morbi leo risus Morbi leo risus",
                ],
                'contact' => [
                    'contact_name' => 'Vince Scariett',
                    'contact_tel' => '(021) 913 275',
                    'contact_email' => null,
                ],
            ],
            //---------end--------------
        ],
        //--------------------------------------Start SKILLS & COMPETENCES-------------------------------------------   
        'skills' => [
            ['compet' => 'Project vanagement', 'skill' => 25,],
            ['compet' => 'Critical', 'skill' => 75,],
            ['compet' => 'Working under pressure', 'skill' => 35,],
            ['compet' => 'Teamwork', 'skill' => 94,],
            ['compet' => 'Time management', 'skill' => 14,],
        ],
        //-----------------------------------------Start CERTIFICATES------------------------------------------------   
        'certificates' => [
            //'certificat1'
            [
                'name_cert' => 'Leadership Program Certificate',
                'corp_cert' => 'By Education Institute',
                'date_cert' => '01.02.2006',
                //'lastdate_cert' => '01.05.2008',
            ],
            //'certificat2'
            [
                'name_cert' => 'European Bartender Schoo',
                'corp_cert' => 'Corporation in London, UK',
                'date_cert' => '01.11.2008',
                //'lastdate_cert' => '01.05.2008',
            ],
            //'certificat3' 
            [
                'name_cert' => 'SEO Traning',
                'corp_cert' => 'Gard & Bull',
                'date_cert' => '01.11.2015',
                //'lastdate_cert' => '01.05.2015',
            ],
        ],
        //-------------------------------------------Start EDUCATION-------------------------------------------------
        'education' => [
            "spec_edu" => "Management",
            "name_edu" => "University",
            "start_date_edu" => "01.08.2004",
            "end_date_edu" => "01.06.2007",
        ],
        //-------------------------------------------Start LANGUAGES-------------------------------------------------    
        'lang_expert' => [
            ['lang' => 'English', 'level' => 'Expert'],
            ['lang' => 'French', 'level' => 'Middle'],
            ['lang' => null, 'level' => null],
            ['lang' => 'Portuguse', 'level' => 'Senjor'],
        ],
        //--------------------------------------------Start INTERESTS----------------------------------------------------
        'botton' => [
            null,
            "Psychology",
            "Chess",
            null,
            "Numismatist",
        ],

    ],
    //-----------------------------
];
//---------------------------------------------------------------------------------------------------------------

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title><?= 'CV' ?></title>

    <style>
        hr {
            border: none;
            /* Убираем границу */
            background-color: green;
            /* Цвет линии */
            height: 3px;
            /* Толщина линии */
        }

        .hr1 {
            border: none;
            /* Убираем границу */
            background-color: grey;
            /* Цвет линии */
            height: 1px;
            /* Толщина линии */
        }

        .blok_lip {
            padding: 0px;
            margin-left: 10px;
            line-height: 1;
        }

        .blok_scal {
            padding: 0px;
            margin-top: 10px;
            line-height: 1;
        }

        .row-table {
            display: table;
            width: 100%;
            table-layout: fixed;
        }

        button {
            margin: 2px;
        }
    </style>

</head>

<body>

    <!-- ------------------------------Start СV--------------------------------------- -->

    <?php foreach ($arr as $cvs) : ?>
        <!-------------------------------------------Container------------------------------------------------->

        <div class="container" style="margin-top: 20px;">

            <h2 style="margin-bottom: 50px; background-color: green; color: yellow;">Page #<?php $c++; echo $c; ?></h2>

            <div class="row">

                <div class="col-8">
                    <!-- 1.2 container -->

                    <div class="row">
                        <div class="col-4">
                            <!-- 1.1.2 container -->
                            <p style="text-align: left;"><strong style="vertical-align: middle; margin: 50px;"><img src="<?= $cvs['picter'] ?>" alt="" width="80" height="80" /></strong></p>
                        </div>
                        <div class="col-8">
                            <!-- 1.1.2 container -->
                            <h2><strong style="vertical-align: middle; text-align: left;"><?= $cvs['name_candidate'] ?> <?= $cvs['suname_candidate'] ?></strong></h2>
                            <span class="align-middle">

                                <h5 style="color: green;"><?= $cvs['last_job'] ?></h5>

                                <!--Bar Manager-->
                            </span>

                        </div>
                    </div>
                    <p><?= $cvs['annotation'] ?>

                </div>
                <div class="col-4" style=" text-align: right;">
                    <!-- 1.2 container -->
                    <?php if ($cvs["email"] || $cvs["tel"] || $cvs["siti"] || $cvs["wild"]) : ?>
                        <br><a href="mailto:<?= $cvs["email"] ?>"><?= $cvs["email"] ?> <img src="img/sharp_mail_outline_black_18dp.png" alt=""></a>
                        <br><a href="tel:<?= $cvs["tel"] ?>"><?= $cvs["tel"] ?> <img src="img/sharp_phone_black_18dp.png" alt=""></a>
                        <br><a href="#"><?= $cvs["siti"] ?> , <?= $cvs["contry"] ?> <img src="img/outline_star_border_black_18dp.png" alt=""></a>
                        <br><a href="tg:<?= $cvs["wild"] ?>"><?= $cvs["wild"] ?> <img src="img/sharp_alternate_email_black_18dp.png" alt=""></a> <br>
                    <?php endif; ?>
                </div>
                <div class="w-100"></div>
                <!---------------------------------------------------------------------------------------------------------------->

                <!-------------------------------------------Start WORK EXPERINCE------------------------------------------------->
                <div class="col-7">
                    <!-- 2.1 WORK EXPERINCE -->
                    <div class="card border-light mb-3">
                        <h4><b>WORK EXPERIENCE</b></h4>
                        <hr>
                        <div class="card-body">

                            <?php if ($cvs['work']) : ?>
                                <?php foreach ($cvs['work'] as $valeu_work) : ?>
                                    <h5><b><?= $valeu_work['prof']; ?></b></h5><!-- "Bar Manager" -->
                                    <p><b><?= $valeu_work['job']; ?></b></p><!-- "El Presidente" -->

                                    <span style="color: green;"><?= $valeu_work["start_year"]; ?> - <?= $valeu_work["end_year"]; ?></span></p><!-- "06.2013 - 12.2018" -->
                                    <!----Место работы------------------------------------------>
                                    <p style="text-align: right;"><a href="#" style="color: green;"><?= $valeu_work['city_expert']; ?> , <?= $valeu_work['country_expert']; ?></a></p>
                                    <p style="text-align: right;"><a href="#" style="color: green;"><b><i>longitude: </b></i><?= $valeu_work['longitude_expert']; ?> , <b><i>latitude: </b></i><?= $valeu_work['latitude_expert']; ?></a></p>
                                    <!-- Выбор Текстового блока #1, #2, #3--------------------->
                                    <?php if ($valeu_work['expert_text']) : ?>
                                        <?php foreach ($valeu_work['expert_text'] as $key_rt) : ?>
                                            <ul class="list-group">
                                                <li>
                                                    <p><?= $key_rt; ?></p><!-- "expert_text1", "expert_text2", "expert_text3" -->
                                                </li>
                                            </ul>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    <!---------------------------------------------------------->
                                    <br>
                                    <!----Контактные данные------------------------------------->
                                    <p><span style="color: green;">Contact </span><?= $valeu_work['contact']['contact_name'] ?> <a href="tel:<?= $valeu_work['contact']['contact_tel'] ?>"><?= $valeu_work['contact']['contact_tel'] ?></a> <a href="mailto:<?= $valeu_work['contact_email'] ?>"><?= $valeu_work['contact_email'] ?></a></p><!-- "Vince Scariett - 0021 213 235" -->
                                    <?php
                                    //$exp_itr++;
                                    //$exp_counter++;
                                    ?>
                                    <hr class="hr1">
                                <?php endforeach; ?>
                            <?php endif; ?>

                        </div>

                    </div>

                </div>
                <!------------------------------------------End WORK EXPERINCE----------------------------------------------->

                <!--------------------------------------Start SKILLS & COMPETENCES------------------------------------------->
                <div class="col-5">
                    <!-- 2.2 SKILLS & COMPETENCES -->
                    <div class="card border-light mb-3">
                        <!--2) card -->
                        <h4><b>SKILLS & COMPETENCES</b></h4>
                        <hr>
                        <div class="card-body blok_lip">
                            <!--2) card-body -->

                            <div class="row align-items-center">
                                <!--2.1) row -->

                                <div class="col-6  align-items-left blok_scal" style="text-align: right;">

                                    <?php //if(is_array($cv['skills'])){
                                    //print_r($cv['skills']);
                                    foreach ($cvs['skills'] as $valeu_skill) : ?>
                                        <p> <?= $valeu_skill['compet']; ?> <br> </p>
                                        <!--Project Management Critical Working Under Pressure Teamwork Time Management-->
                                    <?php endforeach; ?>
                                </div>

                                <div class="col-6  align-items-left blok_scal">
                                    <?php if ($cvs['skills']) : ?>
                                        <?php foreach ($cvs['skills'] as $valeu_skill) : ?>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: <?= $valeu_skill['skill']; ?>%;" aria-valuenow="<?= $valeu_skill['skill']; ?>" aria-valuemin="0" aria-valuemax="100"><?= $valeu_skill['skill'] ?>%</div>
                                            </div>
                                            <br>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>

                            </div>
                            <!--2.1) row end -->
                        </div>
                        <!--2) card-body end -->
                    </div>
                    <!--2) card end -->
                    <!---------------------------------------End SKILLS & COMPETENCES-------------------------------------------->

                    <!-----------------------------------------Start CERTIFICATES------------------------------------------------>
                    <div class="card border-light mb-3">
                        <!--3r) card -->
                        <h4><b>CERTIFICATES</b></h4>
                        <hr>
                        <!--3r) card-body -->

                        <!--3.1r)<div class="row align-items-center">row    corp cert3-->
                        <div class="card-body blok_lip">
                            <?php if ($cvs['certificates']) : ?>
                                <?php foreach ($cvs['certificates'] as $value_cert) : ?>
                                    <ul class="list-group">
                                        <li>
                                            <p><b><?= $value_cert['name_cert']; ?></b></p>
                                            <!--name_cert -->
                                        </li>
                                    </ul>
                                    <p><i><?= $value_cert['corp_cert']; ?></i></p>
                                    <!--corp_cert-->
                                    <p><span style="color: grey;"><?= $value_cert['date_cert']; ?></span></p>
                                    <!--date_cert-->
                                <?php endforeach; ?>
                            <?php endif; ?>
                            <!--3.1r)</div> row end -->
                        </div>
                        <!--3.1r) card-body end -->
                    </div><!-- 3r) card end -->
                    <!------------------------------------------End CERTIFICATES------------------------------------------------->

                    <!-------------------------------------------Start EDUCATION------------------------------------------------->
                    <div class="card border-light mb-3">
                        <!--4r) card -->
                        <h4><b>EDUCATION</b></h4>
                        <hr>
                        <div class="card-body blok_lip">
                            <!--4r) card-body -->

                            <!--4.1<div class="row align-items-center">r) row -->

                            <ul class="list-group">
                                <li>
                                    <h5><b><?= $cvs['education']["spec_edu"]; ?></b></h5>
                                    <!--Service Management -->
                                </li>
                                <p><i><?= $cvs['education']["name_edu"]; ?></i></p>
                                <!--Brisbene University -->
                                <p><span style="color: grey;"><?= $cvs['education']["end_date_edu"]; ?></span></p>
                                <!--08.2006 - 06.2008-->
                                <ul>
                                    <br>

                                    <!--4.1</div>r) row end -->
                        </div>
                        <!--4.1r) card-body end -->
                    </div><!-- 4r) card end -->
                    <!--------------------------------------------End EDUCATION-------------------------------------------------->

                    <!-------------------------------------------Start LANGUAGES------------------------------------------------->
                    <div class="card border-light mb-3">
                        <!--5r) card -->
                        <h4><b>LANGUAGES</b></h4>
                        <hr>
                        <div class="card-body blok_lip">
                            <!--5r) card-body -->
                            <?php if ($cvs['lang_expert']) : ?>
                                <?php
                                foreach ($cvs['lang_expert'] as $value_lang) : ?>

                                    <div class="row align-items-center">

                                        <div class="col-12 align-items-left blok_scal" style="text-align: left;">
                                            <h5><b><?= $value_lang['lang']; ?></b></h5>
                                            <!--English -->
                                            <p><span style="color: green;"><?= $value_lang['level']; ?></span></p>
                                            <!--Expert -->
                                        </div>

                                    </div>

                                <?php endforeach; ?>
                            <?php endif; ?>
                            <!--card border-light mb-3 end -->
                        </div>
                        <!--5.1r) card-body end -->
                    </div><!-- 5r) card end -->
                    <!--------------------------------------------End LANGUAGES-------------------------------------------------->

                    <!-------------------------------------------Start INTERESTS------------------------------------------------->
                    <div class="align-items-center">
                        <!--6r) card -->
                        <h4><b>INTERESTS</b></h4>
                        <hr>
                        <!--6.1r) row -->
                        <div class="blok_lip">
                            <?php if ($cvs['botton']) : ?>
                                <?php foreach ($cvs['botton'] as $value_intr) : ?>
                                    <?php if ($value_intr != null) {
                                        echo '<span class="border border-secondary">' . $value_intr . '</span>';
                                        //echo '<button type="button" class="btn btn-outline-dark">' . $value_intr . '</button>';
                                    }; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <!--6.1r) row end -->
                    </div><!-- 6r) card end -->
                </div>
                <!--2) col-5 end -->
                <div class="w-100"></div>
                <!--------------------------------------------End INTERESTS-------------------------------------------------->

            </div>

        </div>

    <?php endforeach; ?>
    <!-- ------------------------------End СV--------------------------------------- -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>