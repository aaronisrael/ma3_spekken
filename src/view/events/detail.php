<header>
  <nav>
    <div class="navMenu">
      <div class="navMenuTop">
        <div class="centerContainer navMenuTopContent">
          <img class="navMenuTopContent__logo" src="assets/img/logo.svg" alt="">
          <ul class="navMenuItems">
            <li><a href="index.php" class="navMenuItems__item">Home</a></li>
            <li><a href="index.php?page=agenda" class="navMenuItems__item--highlighted">Agenda</a></li>
            <li><a href="index.php?page=over-spekken" class="navMenuItems__item">Over spekken</a></li>
            <li><a href="index.php?page=contact" class="navMenuItems__item">Contact</a></li>
          </ul>
          <form class="navMenuTopContent__search" action="index.php">
            <input type="hidden" name="page" value="agenda" />
            <input type="text" name="search" placeholder="Zoek...">
            <img src="assets/img/search_icon.svg" alt="">
          </form>
        </div>
      </div>
    </div>

  </nav>
</header>
<main class="detailContainer">
  <div class="centerContainer detail">
    <div class="detailImg">
      <a href="index.php?page=agenda">Ga terug</a>
      <img class="detailImg__img"src="assets/img/event/<?php echo $event['id'];?>.jpg" alt="">
      <img class="detailImg__border" src="assets/img/border.png" alt="">
    </div>
    <div class="detailText">
      <h1><?php echo $event['title'];?></h1>
      <p class="detailText__date"><?php echo date('D j M Y G:i', strtotime($event['start']));?></p>
      <p class="detailText__description"><?php echo $event['description'];?></p>
      <p class="detailText__age">Leeftijd: <span><?php echo $event['start_age'];?>-<?php echo $event['end_age'];?></span></p>
    </div>
  </div>
</main>
