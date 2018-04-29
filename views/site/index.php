<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="container-fluid" style="height: 100vh; background-image: url('https://www.wylab.net/wp-content/uploads/2017/04/informatica.jpg'); background-attachment: fixed; color: #ffffff;">
       <div style="margin-top: 15%;  background: rgba(0, 0, 0, 0.5);">
        <h1 class="main-title1">INITIUM</h1>
        <h2 class="main-title2"> НАЧАЛО ВАШЕГО ПУТИ В ВЕБ-ПРОСТРАНСТВЕ </h2>
       </div>
    </div>
    <div class="container-fluid" style="background: linear-gradient(to right, #412cad, #db31cf);color: #5ff9fc"> <h1 style="text-align: center; font-size: 40px;font-family: 'PT Sans Caption', sans-serif;">НАШИ УСЛУГИ</h1></div>
    <div class="container-fluid">
        <div class="text-center">
            <p style="color: white;">
                Мы предоставляем услуги по разработке сайтов различной степени сложности. Воспользовавшись нашими услугами, Вы обеспечите себе качественно выполненный сайт в поставленный срок.
            </p>
        </div>
        <div class="grid">
            <figure class="effect-julia">
                <img src="../images/landing.jpg" alt="img21"/>
                <figcaption>
                    <h2>Landing <span>page</span></h2>
                    <div>
                        <p>Стильный и современный дизайн</p>
                        <p>Одностраничный сайт, для превлечения<br> целевой аудитории</p> <br>
                        <p>Хостинг в подарок</p><br>
                    </div>
                </figcaption>
            </figure>
            <figure class="effect-julia">
                <img src="../images/visitka.jpg" alt="img22"/>
                <figcaption>
                    <h2>Сайт <span>визитка</span></h2>
                    <div>
                        <p>Стильный и современный дизайн</p><br>
                        <p>До 6 страниц</p><br>
                        <p>She loves the smell of the ocean</p>
                        <p>And dives into the morning light</p>
                    </div>
                </figcaption>
            </figure>
            <figure class="effect-julia">
                <img src="../images/e-shop.jpg" alt="img22"/>
                <figcaption>
                    <h2>Корпоративный <span>сайт</span></h2>
                    <div>
                        <p>Стильный и современный дизайн</p><br>
                        <p>Сайт позволит в полной мере <br>отобразить имидж компании</p>
                        <p>Продвижение товаров и услуг</p>
                        <p>Широкий функционал для работы<br> с клиентами</p>
                    </div>
                </figcaption>
            </figure>
            <figure class="effect-julia">
                <img src="../images/e-shop.jpg" alt="img22"/>
                <figcaption>
                    <h2>Интернет <span>магазин</span></h2>
                    <div>
                        <p>Умный поиск</p>
                        <p>Гибкая настройка цен</p>
                        <p>And dives into the morning light</p>
                    </div>
                </figcaption>
            </figure>
        </div>
    </div>
    <div class="text-center">
        <p style="color: white;">
            * Цены указанные выше являются начальными, окончательная цена будет названа после согласования требований.
        </p>
    </div>
    <section  class="section how-it-works" id="how-it-works">
        <div class="container">
            <div class="row text-center">
                <div class="how-it-works-heading">
                    <h2 class="section-title" style="color: white">Выполнение заказа состоит из следующих этапов</h2>
                </div>
            </div>
            <div class="row" style="color: white">
                <div class="col-md-12 board">
                    <div class="board-inner">
                        <ul class="nav nav-tabs" id="myTab">
                            <div class="liner"></div>
                            <li class="active">
                                <a href="#home" aria-controls="home" role="tab" data-toggle="tab" title="Согласование">
                      <span class="round-tabs one">
                              <i class="icon icon-profile-male"></i>
                      </span>
                                </a></li>

                            <li><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" title="Разработка">
                     <span class="round-tabs two">
                         <i class="icon icon-pencil"></i>
                     </span>
                                </a>
                            </li>
                            <li><a href="#prototyping" aria-controls="prototyping" role="tab" data-toggle="tab" title="Тестирование">
                     <span class="round-tabs three">
                          <i class="icon icon-layers"></i>
                     </span> </a>
                            </li>

                            <li><a href="#uidesign" aria-controls="uidesign" role="tab" data-toggle="tab" title="Передача сайта">
                         <span class="round-tabs four">
                              <i class="icon icon-aperture"></i>
                         </span>
                                </a></li>

                            <li><a href="#doner" aria-controls="doner" role="tab" data-toggle="tab" title="Development">
                         <span class="round-tabs five">
                              <i class="icon icon-tools-2"></i>
                         </span> </a>
                            </li>

                        </ul></div>

                    <div class="tab-content opacback">
                        <div class="tab-pane fade in active" id="home">
                            <h3 class="head text-center">Согласование</h3>
                            <p class="narrow text-center">
                                Вы предоставляете Нам требования того, каким бы вы хотели видеть сайт, после чего Нами согласно Вашим требованиям будет составлено техническое задание. Согласовав с Вами техническое задание мы готовы приступить к работе!
                            </p>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <h3 class="head text-center">Разработка</h3>
                            <p class="narrow text-center">
                                Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                            </p>

                        </div>
                        <div class="tab-pane fade" id="prototyping">
                            <h3 class="head text-center">Тестирование</h3>
                            <p class="narrow text-center">
                                Обязательным пунктом при выполнение работы является тестирование продукта на наличие ошибок и работоспособность. Мы заботимся о качестве проделанной работы, поэтому готовим продукт к передаче в лучшем виде, отшлифовывая его до полной готовноси к запуску в продакшн!
                            </p>
                        </div>
                        <div class="tab-pane fade" id="uidesign">
                            <h3 class="head text-center">Передача сайта</h3>
                            <p class="narrow text-center">
                                Завершающим этапом является передача продукта заказчику. Вами производится проверка на наличе всех необходимых деталей на сайте и производятся окончательные правки, после Вашего согласия и оплаты, сайт передаётся удобным для Вас способом.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="doner">
                            <div class="text-center">
                                <i class="img-intro icon-checkmark-circle"></i>
                            </div>
                            <h3 class="head text-center">Development</h3>
                            <p class="narrow text-center">
                               Завершающим этапом является передача продукта заказчику. Вами производится проверка на наличе всех необходимых деталей на сайте, после Вашего согласия и оплаты, сайт передаётся удобным для Вас способом.
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <div class="text-center">
        <h1 style="color: white">ДОПОЛНИТЕЛЬНЫЕ УСЛУГИ</h1>
        <div class="row">
        <div class="col-md-3">
        <a href="#" class="card education">
            <div class="overlay"></div>
            <div class="circle">

                <svg width="71px" height="76px" viewBox="29 14 71 76" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
                    <desc>Created with Sketch.</desc>
                    <defs></defs>
                    <g id="Group" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(30.000000, 14.000000)">
                        <g id="Group-8" fill="#D98A19">
                            <g id="Group-7">
                                <g id="Group-6">
                                    <path d="M0,0 L0,75.9204805 L69.1511499,75.9204805 L0,0 Z M14.0563973,32.2825679 L42.9457663,63.9991501 L14.2315268,63.9991501 L14.0563973,32.2825679 Z" id="Fill-1"></path>
                                </g>
                            </g>
                        </g>
                        <g id="Group-20" transform="translate(0.000000, 14.114286)" stroke="#FFFFFF" stroke-linecap="square">
                            <path d="M0.419998734,54.9642857 L4.70316223,54.9642857" id="Line"></path>
                            <path d="M0.419998734,50.4404762 L4.70316223,50.4404762" id="Line"></path>
                            <path d="M0.419998734,45.9166667 L4.70316223,45.9166667" id="Line"></path>
                            <path d="M0.419998734,41.3928571 L2.93999114,41.3928571" id="Line"></path>
                            <path d="M0.419998734,36.8690476 L4.70316223,36.8690476" id="Line"></path>
                            <path d="M0.419998734,32.3452381 L4.70316223,32.3452381" id="Line"></path>
                            <path d="M0.419998734,27.8214286 L4.70316223,27.8214286" id="Line"></path>
                            <path d="M0.419998734,23.297619 L2.93999114,23.297619" id="Line"></path>
                            <path d="M0.419998734,18.7738095 L4.70316223,18.7738095" id="Line"></path>
                            <path d="M0.419998734,14.25 L4.70316223,14.25" id="Line"></path>
                            <path d="M0.419998734,9.72619048 L4.70316223,9.72619048" id="Line"></path>
                            <path d="M0.419998734,5.20238095 L2.93999114,5.20238095" id="Line"></path>
                            <path d="M0.419998734,0.678571429 L4.70316223,0.678571429" id="Line"></path>
                        </g>
                    </g>
                </svg>
            </div>
            <p>Администрирование сайтов</p>
        </a>
        </div>




        <div class="col-md-3">
        <a href="#" class="card credentialing">
            <div class="overlay"></div>
            <div class="circle">

                <svg width="64px" height="72px" viewBox="27 21 64 72" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
                    <desc>Created with Sketch.</desc>
                    <defs>
                        <polygon id="path-1" points="60.9784821 18.4748913 60.9784821 0.0299638385 0.538377293 0.0299638385 0.538377293 18.4748913"></polygon>
                    </defs>
                    <g id="Group-12" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(27.000000, 21.000000)">
                        <g id="Group-5">
                            <g id="Group-3" transform="translate(2.262327, 21.615176)">
                                <mask id="mask-2" fill="white">
                                    <use xlink:href="#path-1"></use>
                                </mask>
                                <g id="Clip-2"></g>
                                <path d="M7.17774177,18.4748913 L54.3387782,18.4748913 C57.9910226,18.4748913 60.9789911,15.7266455 60.9789911,12.3681986 L60.9789911,6.13665655 C60.9789911,2.77820965 57.9910226,0.0299638385 54.3387782,0.0299638385 L7.17774177,0.0299638385 C3.52634582,0.0299638385 0.538377293,2.77820965 0.538377293,6.13665655 L0.538377293,12.3681986 C0.538377293,15.7266455 3.52634582,18.4748913 7.17774177,18.4748913" id="Fill-1" fill="#59A785" mask="url(#mask-2)"></path>
                            </g>
                            <polygon id="Fill-4" fill="#FFFFFF" transform="translate(31.785111, 30.877531) rotate(-2.000000) translate(-31.785111, -30.877531) " points="62.0618351 55.9613216 7.2111488 60.3692832 1.50838775 5.79374073 56.3582257 1.38577917"></polygon>
                            <ellipse id="Oval-3" fill="#25D48A" opacity="0.216243004" cx="30.0584472" cy="21.7657707" rx="9.95169733" ry="9.17325562"></ellipse>
                            <g id="Group-4" transform="translate(16.959615, 6.479082)" fill="#54C796">
                                <polygon id="Fill-6" points="10.7955395 21.7823628 0.11873799 11.3001058 4.25482787 7.73131106 11.0226557 14.3753897 27.414824 1.77635684e-15 31.3261391 3.77891399"></polygon>
                            </g>
                            <path d="M4.82347935,67.4368303 L61.2182039,67.4368303 C62.3304205,67.4368303 63.2407243,66.5995595 63.2407243,65.5765753 L63.2407243,31.3865871 C63.2407243,30.3636029 62.3304205,29.5263321 61.2182039,29.5263321 L4.82347935,29.5263321 C3.71126278,29.5263321 2.80095891,30.3636029 2.80095891,31.3865871 L2.80095891,65.5765753 C2.80095891,66.5995595 3.71126278,67.4368303 4.82347935,67.4368303" id="Fill-8" fill="#59B08B"></path>
                            <path d="M33.3338063,67.4368303 L61.2181191,67.4368303 C62.3303356,67.4368303 63.2406395,66.5995595 63.2406395,65.5765753 L63.2406395,31.3865871 C63.2406395,30.3636029 62.3303356,29.5263321 61.2181191,29.5263321 L33.3338063,29.5263321 C32.2215897,29.5263321 31.3112859,30.3636029 31.3112859,31.3865871 L31.3112859,65.5765753 C31.3112859,66.5995595 32.2215897,67.4368303 33.3338063,67.4368303" id="Fill-10" fill="#4FC391"></path>
                            <path d="M29.4284029,33.2640869 C29.4284029,34.2202068 30.2712569,34.9954393 31.3107768,34.9954393 C32.3502968,34.9954393 33.1931508,34.2202068 33.1931508,33.2640869 C33.1931508,32.3079669 32.3502968,31.5327345 31.3107768,31.5327345 C30.2712569,31.5327345 29.4284029,32.3079669 29.4284029,33.2640869" id="Fill-15" fill="#FEFEFE"></path>
                            <path d="M8.45417501,71.5549073 L57.5876779,71.5549073 C60.6969637,71.5549073 63.2412334,69.2147627 63.2412334,66.3549328 L63.2412334,66.3549328 C63.2412334,63.4951029 60.6969637,61.1549584 57.5876779,61.1549584 L8.45417501,61.1549584 C5.34488919,61.1549584 2.80061956,63.4951029 2.80061956,66.3549328 L2.80061956,66.3549328 C2.80061956,69.2147627 5.34488919,71.5549073 8.45417501,71.5549073" id="Fill-12" fill="#5BD6A2"></path>
                        </g>
                    </g>
                </svg>

            </div>
            <p>Корректировка сайтов</p>
        </a>


        </div>





            <div class="col-md-3">
        <a href="#" class="card wallet">
            <div class="overlay"></div>
            <div class="circle">


                <svg width="78px" height="60px" viewBox="23 29 78 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
                    <desc>Created with Sketch.</desc>
                    <defs></defs>
                    <g id="icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(23.000000, 29.500000)">
                        <rect id="Rectangle-3" fill="#AC8BE9" x="67.8357511" y="26.0333433" width="9.40495664" height="21.8788565" rx="4.70247832"></rect>
                        <rect id="Rectangle-3" fill="#6A5297" x="67.8357511" y="38.776399" width="9.40495664" height="10.962961" rx="4.70247832"></rect>
                        <polygon id="Rectangle-2" fill="#6A5297" points="57.3086772 0 67.1649301 26.3776902 14.4413177 45.0699507 4.58506484 18.6922605"></polygon>
                        <path d="M0,19.6104296 C0,16.2921718 2.68622235,13.6021923 5.99495032,13.6021923 L67.6438591,13.6021923 C70.9547788,13.6021923 73.6388095,16.2865506 73.6388095,19.6104296 L73.6388095,52.6639057 C73.6388095,55.9821635 70.9525871,58.672143 67.6438591,58.672143 L5.99495032,58.672143 C2.68403068,58.672143 0,55.9877847 0,52.6639057 L0,19.6104296 Z" id="Rectangle" fill="#8B6FC0"></path>
                        <path d="M47.5173769,27.0835169 C45.0052827,24.5377699 40.9347162,24.5377699 38.422622,27.0835169 L36.9065677,28.6198808 L35.3905134,27.0835169 C32.8799903,24.5377699 28.8078527,24.5377699 26.2957585,27.0835169 C23.7852354,29.6292639 23.7852354,33.7559532 26.2957585,36.3001081 L36.9065677,47.0530632 L47.5173769,36.3001081 C50.029471,33.7559532 50.029471,29.6292639 47.5173769,27.0835169" id="Fill-12" fill="#F6F1FF"></path>
                        <rect id="Rectangle-4" fill="#AC8BE9" x="58.0305835" y="26.1162588" width="15.6082259" height="12.863158"></rect>
                        <ellipse id="Oval" fill="#FFFFFF" cx="65.8346965" cy="33.0919007" rx="2.20116007" ry="2.23319575"></ellipse>
                    </g>
                </svg>

            </div>
            <p>Wallet</p>
        </a>



            </div>





                <div class="col-md-3">
        <a href="#" class="card human-resources">
            <div class="overlay"></div>
            <div class="circle">


                <svg width="66px" height="77px" viewBox="1855 26 66 77" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
                    <desc>Created with Sketch.</desc>
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(1855.000000, 26.000000)">
                        <path d="M4.28872448,42.7464904 C4.28872448,39.3309774 5.4159227,33.7621426 6.40576697,30.4912557 C10.5920767,32.1098991 14.3021264,35.1207513 18.69596,35.1207513 C30.993618,35.1207513 42.5761396,28.7162991 49.9992251,17.9014817 C56.8027248,23.8881252 60.8188351,33.0463165 60.8188351,42.7464904 C60.8188351,60.817447 47.6104607,76.6693426 32.5537798,76.6693426 C17.4970989,76.6693426 4.28872448,60.817447 4.28872448,42.7464904" id="Fill-8" fill="#AFCEFF"></path>
                        <path d="M64.3368879,31.1832696 L62.8424171,46.6027478 L60.6432609,46.7824348 L59.8340669,34.6791304 L47.6573402,25.3339478 C44.2906753,34.068487 34.3459503,40.2903304 24.4684093,40.2903304 C17.7559812,40.2903304 10.046244,37.4168 5.80469412,32.8004522 L5.80469412,34.6791304 L5.80469412,46.6027478 L4.28932167,46.6027478 L1.30187314,27.8802435 C1.30187314,20.9790957 3.52342407,15.5432 7.27229127,11.3578087 C13.132229,4.79558261 21.8124018,0.0492173913 30.5672235,0.342852174 C37.4603019,0.569286957 42.6678084,2.72991304 50.8299179,0.342852174 C51.4629405,1.44434783 51.8615656,3.00455652 51.5868577,5.22507826 C51.4629405,6.88316522 51.2106273,7.52302609 50.8299179,8.45067826 C58.685967,14.1977391 64.3368879,20.7073739 64.3368879,31.1832696" id="Fill-10" fill="#3B6CB7"></path>
                        <path d="M58.9405197,54.5582052 C62.0742801,54.8270052 65.3603242,52.60064 65.6350321,49.5386574 C65.772386,48.009127 65.2617876,46.5570226 64.3182257,45.4584487 C63.3761567,44.3613357 62.0205329,43.6162922 60.4529062,43.4818922 L58.9405197,54.5582052 Z" id="Fill-13" fill="#568ADC"></path>
                        <path d="M6.32350389,54.675367 C3.18227865,54.8492104 0.484467804,52.4957496 0.306803449,49.4264626 C0.217224782,47.8925496 0.775598471,46.4579757 1.75200594,45.3886191 C2.7284134,44.3192626 4.10792487,43.6165843 5.67853749,43.530393 L6.32350389,54.675367 Z" id="Fill-15" fill="#568ADC"></path>
                    </g>
                </svg>

            </div>
            <p>Human Resources</p>
        </a>
                </div>
    </div>
    </div>
    <div class="container-fluid" style="background: linear-gradient(to right, #412cad, #db31cf);color: #5ff9fc"> <h1 style="text-align: center; font-size: 40px;font-family: 'PT Sans Caption', sans-serif;">ПОРТФОЛИО</h1></div>
    <div class="container-fluid">
       <div class="porfolio-block">
           <div class="col-md-4">
               <div class="grid">
                   <figure class="effect-sadie">
                       <img src="../images/atl.jpg" alt="img02"/>
                       <figcaption>
                           <h2>Atlant</h2>
                           <p>Sadie never took her eyes off me. <br>She had a dark soul.</p>
                           <a href="https://avtoatlant.ru/">View more</a>
                       </figcaption>
                   </figure>
                </div>
           </div>
           <div class="col-md-4">
               <div class="grid">
                   <figure class="effect-sadie">
                       <img src="../images/psg.jpg" alt="img02"/>
                       <figcaption>
                           <h2>PSGroup</h2>
                           <p>Sadie never took her eyes off me. <br>She had a dark soul.</p>
                           <a href="https://psgroup.moscow/">View more</a>
                       </figcaption>
                   </figure>
               </div>
           </div>
           <div class="col-md-4">
               <div class="grid">
                   <figure class="effect-sadie">
                       <img src="../images/slt.jpg" alt="img02"/>
                       <figcaption>
                           <h2>Starlinetelecom</h2>
                           <p>Sadie never took her eyes off me. <br>She had a dark soul.</p>
                           <a href="http://starlinetele.com/">View more</a>
                       </figcaption>
                   </figure>
               </div>
           </div>
           <div class="col-md-4">
               <div class="grid">
                   <figure class="effect-sadie">
                       <img src="../images/cul.jpg" alt="img02"/>
                       <figcaption>
                           <h2>changeulife</h2>
                           <p>Sadie never took her eyes off me. <br>She had a dark soul.</p>
                           <a href="https://changeulife.ru/">View more</a>
                       </figcaption>
                   </figure>
               </div>
           </div>
       </div>
    </div>
    <div class="container-fluid" style="background: linear-gradient(to right, #412cad, #db31cf);color: #5ff9fc"> <h1 style="text-align: center; font-size: 40px;font-family: 'PT Sans Caption', sans-serif;">ПОЧЕМУ МЫ?</h1></div>
    <div class="container-fluid">
        <div class="row" style="color: azure; padding-top: 15px;">
            <div class="col-md-2"></div>
            <div class="col-md-4 text-center" style="border-right: 2px azure solid;">
                <i class="fas fa-hand-holding-heart fa-4x"></i>
                <h2>Делаем, как для себя</h2>
                <hr>
                <i class="fas fa-paint-brush fa-4x"></i>
                <h2>Креативный подход</h2>
            </div>
<!--            <div class="col-md-2"></div>-->
            <div class="col-md-4 text-center" >
                <i class="far fa-comments fa-4x"></i>
                <h2>Понимание клиента</h2>
                <hr>
                <i class="far fa-clock fa-4x"></i>
                <h2>Всегда в срок</h2>
            </div>
            <div class="col-md-2"></div>  
        </div>
<!--
        <div class="row" style="color: azure; padding-top: 15px;">
            <div class="col-md-2"></div>
            <div class="col-md-4 text-center" style="border-right: 2px azure solid;">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero earum deserunt, dolor tempora nemo consectetur, ex impedit. Doloremque, eos, ratione. Culpa labore magnam, amet soluta voluptas, dignissimos unde temporibus doloribus!</p>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-4 text-center">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto placeat, ducimus at libero fugiat assumenda vitae, minus. Praesentium deserunt sit in soluta ullam ducimus repudiandae, saepe illum id, sed quibusdam.</p>
            </div>
            <div class="col-md-2"></div>  
        </div>
-->
    </div>
    <div class="container-fluid" style="background: linear-gradient(to right, #412cad, #db31cf);color: #5ff9fc"> <h1 style="text-align: center; font-size: 40px;font-family: 'PT Sans Caption', sans-serif;">КОНТАКТЫ</h1></div>
    <div class="container-fluid">
            <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

                <div class="alert alert-success">
                    Спасибо, что связались с Нами. Ответ будет дан в ближайшее время.
                </div>

                <p>
                    Note that if you turn on the Yii debugger, you should be able
                    to view the mail message on the mail panel of the debugger.
                    <?php if (Yii::$app->mailer->useFileTransport): ?>
                        Because the application is in development mode, the email is not sent but saved as
                        a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                                                                                                            Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                        application component to be false to enable email sending.
                    <?php endif; ?>
                </p>

            <?php else: ?>

                <p style="color: white;">
                    Если у Вас имеются вопросы, Вы можете связаться с Нами заполнив форму ниже.
                </p>

                <div class="row">
                    <div class="col-lg-5" style="color: #5ff9fc">

                        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                        <?= $form->field($model, 'name')->textInput(['autofocus' => false]) ?>

                        <?= $form->field($model, 'email') ?>

                        <?= $form->field($model, 'subject') ?>

                        <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                        ]) ?>

                        <div class="form-group">
                            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>

                    </div>
                    <div class="col-lg-5">
                        <div class="text-center" style="color:white"><h1>Контактные данные</h1></div>
                        <div class="social-block">
                            <ul>
                                <li class="facebook"><i class="fab fa-facebook fa-2x" aria-hidden="true"></i></li>
                                <li class="twitter"><i class="fab fa-vk fa-2x" aria-hidden="true"></i></li>
                                <li class="instagram"><i class="fab fa-instagram fa-2x" aria-hidden="true"></i></li>
                                <li class="google"><i class="fab fa-google fa-2x" aria-hidden="true"></i></li>
                                <li class="whatsapp"><i class="fab fa-whatsapp fa-2x" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>

            <?php endif; ?>
    </div>
</div>
