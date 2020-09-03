<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'M.studio';
?>

  <div class="nav-wrapper">
    <div class="logo">
      <?= Html::a('M.studio',
        ['site/index'],
        ['class' => 'profile-link'])
      ?>
    </div>

    <nav>
      <?= Html::a('
        <div class="letter">C</div>
        <div class="letter">o</div>
        <div class="letter">l</div>
        <div class="letter">l</div>
        <div class="letter">e</div>
        <div class="letter">c</div>
        <div class="letter">t</div>
        <div class="letter">i</div>
        <div class="letter">o</div>
        <div class="letter">n</div>
        <div class="letter">s</div>',
        ['site/collections'],
        ['class' => 'profile-link'])
      ?>

      <?= Html::a('
        <div class="letter">N</div>
        <div class="letter">e</div>
        <div class="letter">w</div>',
        ['site/login'],
        ['class' => 'profile-link'])
      ?>

      <?= Html::a('
        <div class="letter">T</div>
        <div class="letter">r</div>
        <div class="letter">e</div>
        <div class="letter">n</div>
        <div class="letter">d</div>
        <div class="letter">i</div>
        <div class="letter">n</div>
        <div class="letter">g</div>',
        ['site/logout'],
        ['class' => 'profile-link'])
      ?>

      <?= Html::a('
        <div class="letter">P</div>
        <div class="letter">o</div>
        <div class="letter">p</div>
        <div class="letter">u</div>
        <div class="letter">l</div>
        <div class="letter">a</div>
        <div class="letter">r</div>',
        ['site/popular'],
        ['class' => 'profile-link'])
      ?>
    </nav>
  </div>

<div class="column-wrapper">
    <section class="text-section new-content">
        <h1>Maximillian Residence</h1>
        <p>
          Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Власти лучше которой большой все, даль рекламных грустный. Переписывается на берегу щеке ведущими, даль образ его города продолжил рукописи собрал заглавных.
        </p>

        <div class="details-btn">
          DETAILS
          <i class="material-icons">add</i>
        </div>
    </section>

    <section class="image-section">
        <img src="/images/back.jpg" alt="background image">
        <div class="gallery-counter">
            <div id="gallery-headline">
              GALLERY
            </div>
            <div id="gallery-loader">
              <h2>02</h2>
              <div class="loader">
                <div class="loader-line"></div>
              </div>
            </div>
        </div>
    </section>

    <section class="sidebar-section">
        <div class="hamburger">
            <div class="ham-line"></div>
            <div class="ham-line" id="short"></div>
            <div class="ham-line"></div>
        </div>

        <div class="social">
            <a href="#">
                <div class="letter">i</div>
                <div class="letter">n</div>
                <div class="letter">s</div>
                <div class="letter">t</div>
                <div class="letter">a</div>
                <div class="letter">g</div>
                <div class="letter">r</div>
                <div class="letter">a</div>
                <div class="letter">m</div>
            </a>
            <a href="#">
                <div class="letter">t</div>
                <div class="letter">w</div>
                <div class="letter">i</div>
                <div class="letter">t</div>
                <div class="letter">t</div>
                <div class="letter">e</div>
                <div class="letter">r</div>
            </a>
        </div>
    </section>
</div>

<div class="gallery-nav">
    <div id="yellow-bg">
        <i class="material-icons">keyboard_arrow_left</i>
    </div>
    <div id="white-bg">
        <i class="material-icons">keyboard_arrow_right</i>
    </div>
</div>
