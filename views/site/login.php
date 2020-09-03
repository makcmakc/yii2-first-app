<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
// $this->params['breadcrumbs'][] = $this->title;
?>
  <div class="site-login">
    <div class="col-lg-12">
      <div class="col-lg-6">
        <div class="container">
          <span class="back-to-home">
            <i class="material-icons">keyboard_arrow_left</i>
            <?= Html::a('Back to Home',
              ['site/index'],
              ['class' => 'profile-link'])
            ?>
            </span>
          <div class="main-content">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>Please fill out the following fields to login:</p>

        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'layout' => 'horizontal',
            'fieldConfig' => [
                'template' => "<div class=\"col-lg-6\">{label}\n{input}</div>\n<div class=\"col-lg-4\">{error}</div>",
                'labelOptions' => ['class' => 'col-lg-1 control-label'],
            ],
        ]); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => false]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-4\">{error}</div>",
            ]) ?>

            <div class="form-group">
                <div class="col-lg-11">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-black btn-lg', 'name' => 'login-button']) ?>
                </div>
            </div>

            <p>I have no account yet</p>
          </div>

        <?php ActiveForm::end(); ?>
      </div>
     </div>
      <div class="col-lg-6">
        <img src="/images/back.jpg" alt="background image">
        <div class="oauth">
          <span>facebook</span>
          <span>pinterest</span>
        </div>
      </div>
    </div>
  </div>

