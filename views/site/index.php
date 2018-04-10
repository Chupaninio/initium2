<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="container-fluid" style="height: 100vh; background-image: url('https://www.wylab.net/wp-content/uploads/2017/04/informatica.jpg'); color: #ffffff">
       <div style="padding-top: 15%">
        <h1 style="text-align: center; font-family: 'Cormorant Garamond', serif; font-size: 100px">INITIUM</h1>
        <h2 style="text-align: center; font-family: 'Cormorant Garamond', serif; font-size: 65px"> НАЧАЛО ВАШЕГО ПУТИ В ВЕБ-ПРОСТРАНСТВЕ </h2>
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
                        <p>Хостинг в подарок</p> <br>
                        <p>Одна страница</p><br>
                        <p>And dives into the morning light</p>
                    </div>
                    <a href="#">View more</a>
                </figcaption>
            </figure>
            <figure class="effect-julia">
                <img src="../images/visitka.jpg" alt="img22"/>
                <figcaption>
                    <h2>Сайт <span>визитка</span></h2>
                    <div>
                        <p>До 6 страниц</p>
                        <p>She loves the smell of the ocean</p>
                        <p>And dives into the morning light</p>
                    </div>
                    <a href="#">View more</a>
                </figcaption>
            </figure>
            <figure class="effect-julia">
                <img src="../images/e-shop.jpg" alt="img22"/>
                <figcaption>
                    <h2>Интернет <span>магазин</span></h2>
                    <div>
                        <p>Julia dances in the deep dark</p>
                        <p>She loves the smell of the ocean</p>
                        <p>And dives into the morning light</p>
                    </div>
                    <a href="#">View more</a>
                </figcaption>
            </figure>
            <figure class="effect-julia">
                <img src="img/22.jpg" alt="img22"/>
                <figcaption>
                    <h2>Passionate <span>Julia</span></h2>
                    <div>
                        <p>Julia dances in the deep dark</p>
                        <p>She loves the smell of the ocean</p>
                        <p>And dives into the morning light</p>
                    </div>
                    <a href="#">View more</a>
                </figcaption>
            </figure>
        </div>
    </div>
    <div class="text-center">
        <p style="color: white;">
            * Цены указанные выше являются начальными, окончательная цена будет названа после согласования требований.
        </p>
    </div>
    <div class="text-center">
        <h1 style="color: white">ДОПОЛНИТЕЛЬНЫЕ УСЛУГИ</h1>
    </div>
    <div class="container-fluid" style="background: linear-gradient(to right, #412cad, #db31cf);color: #5ff9fc"> <h1 style="text-align: center; font-size: 40px;font-family: 'PT Sans Caption', sans-serif;">ПОРТФОЛИО</h1></div>
    <div class="container-fluid">
       <div class="row" style="margin-left: 30px">
           <div class="col-md-4">
               <div class="grid">
                   <figure class="effect-sadie">
                       <img src="../images/atl.jpg" alt="img02"/>
                       <figcaption>
                           <h2>Atlant</h2>
                           <p>Sadie never took her eyes off me. <br>She had a dark soul.</p>
                           <a href="#">View more</a>
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
                           <a href="#">View more</a>
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
                           <a href="#">View more</a>
                       </figcaption>
                   </figure>
               </div>
           </div>
       </div>
    </div>
    <div class="container-fluid" style="background: linear-gradient(to right, #412cad, #db31cf);color: #5ff9fc"> <h1 style="text-align: center; font-size: 40px;font-family: 'PT Sans Caption', sans-serif;">О НАС</h1></div>
    <div class="container-fluid" style="height: 90vh;">

    </div>
    <div class="container-fluid" style="background: linear-gradient(to right, #412cad, #db31cf);color: #5ff9fc"> <h1 style="text-align: center; font-size: 40px;font-family: 'PT Sans Caption', sans-serif;">ПОЧЕМУ МЫ?</h1></div>
    <div class="container-fluid" style="height: 90vh;">

    </div>
    <div class="container-fluid" style="background: linear-gradient(to right, #412cad, #db31cf);color: #5ff9fc"> <h1 style="text-align: center; font-size: 40px;font-family: 'PT Sans Caption', sans-serif;">КОНТАКТЫ</h1></div>
    <div class="container-fluid" style="color: #5ff9fc">
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

                <p>
                    Если у Вас имеются вопросы, Вы можете связаться с Нами заполнив форму ниже.
                </p>

                <div class="row">
                    <div class="col-lg-5">

                        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

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
                </div>

            <?php endif; ?>
    </div>
</div>
