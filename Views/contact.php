<?php

use App\Core\Form\Form;
use App\Core\Form\TextAreaField;

/** @var $this \App\Core\View */
/** @var $modal \App\Models\ContactForm */

$this->title = 'Contact';
?>

<div class="container">

    <!--Section: Contact v.2-->
    <section class="mb-4">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
            a matter of hours to help you.</p>

        <div class="row">

            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
                <?php $form = Form::begin('', 'post'); ?>
                <?php //echo $form->csrfField(); 
                ?>

                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <?php echo $form->field($model, 'name')->placeholder('Enter Your Name...')->addOption('success'); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <?php echo $form->field($model, 'email')->placeholder('Enter Your Email Address...'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">

                        <div class="md-form">
                            <?php echo $form->textAreaField($model, 'body'); ?>
                        </div>
                    </div>
                    <div class="p-2">
                    </div>
                    <?php echo $form->submitButton($model, 'Submit Form')->addOptions(['info-btn', 'someclass', 'someotherclass']);
; ?>
                    <?php //echo $form->submitButton('Contact Us')->addOption('info-btn')->addOption('someclass')->addOption('someotherclass'); ?>

                </div>
                <?php echo Form::end(); ?>

                <!-- <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div> -->
                <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>Hamilton, OH 45013, USA</p>
                    </li>

                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>+ 01 234 567 89</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>aaron@aaronsthomas.com</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

        </div>

    </section>
    <!--Section: Contact v.2-->

</div>