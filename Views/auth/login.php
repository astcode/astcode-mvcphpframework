<?php
/** @var $model \App\Models\User */
use App\Core\Form\Form;
use App\Core\Form\Field;

/** @var $this \App\Core\View */
$this->title = 'Login';

?>
<h1>Login</h1>


<div class="row">
  <div class="col-lg-10 col-xl-9 mx-auto">
    <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
      <div class="card-img-left d-none d-md-flex">
        <!-- Background image for card set in CSS! -->
      </div>
      <div class="card-body p-4 p-sm-5">
        <h5 class="card-title text-center mb-5 fw-light fs-5">Login</h5>
        <?php $form = Form::begin('', 'post'); ?>
        <div class="row">
          <div class="col">
            <?php echo $form->field($model, 'email')->fieldType('email')->placeholder('Enter Your Email Address...'); ?>
          </div>
        <div class="row">
          <div class="col">
            <?php echo $form->field($model, 'password')->passwordField()->placeholder('Enter Your Password...'); ?>
          </div>
          
        </div>
      </div>
      <div class="div py-3">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
      <?php echo Form::end(); ?>
  </div>
</div>