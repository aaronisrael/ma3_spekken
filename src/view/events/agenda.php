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
      <div class="navMenuBottom">
        <div class="navMenuBottomContent centerContainer">
          <ul class="subNavMenuItems">
            <li><a href="index.php?page=agenda" class="subNav1 subNavMenuItems__item">Alles</a></li>
            <li><a href="index.php?page=agenda&amp;periode=1" class="subNav2 subNavMenuItems__item">Kerstvakantie</a></li>
            <li><a href="index.php?page=agenda&amp;periode=2" class="subNav3 subNavMenuItems__item">editie pasen</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="navTags">
      <ul class="navTagsItems centerContainer">
        <li><a href="index.php?page=agenda&amp;tag=kindertheater " class="navTagsItems__item">kindertheater</a></li>
        <li><a href="index.php?page=agenda&amp;tag=jeugdtheater " class="navTagsItems__item">jeugdtheater</a></li>
        <li><a href="index.php?page=agenda&amp;tag=figurentheater " class="navTagsItems__item">figurentheater</a></li>
        <li><a href="index.php?page=agenda&amp;tag=muziektheater " class="navTagsItems__item">muziektheater</a></li>
        <li><a href="index.php?page=agenda&amp;tag=kleutertheater " class="navTagsItems__item">kleutertheater</a></li>
        <li><a href="index.php?page=agenda&amp;tag=circus " class="navTagsItems__item">circus</a></li>
        <li><a href="index.php?page=agenda&amp;tag=danstheater " class="navTagsItems__item">danstheater</a></li>
      </ul>
      <select class="navTags--mobile" name="forma" onchange="location = this.value;">
       <option value="index.php?page=agenda">Geen tags</option>
       <option value="index.php?page=agenda&amp;tag=kindertheater">kindertheater</option>
       <option value="index.php?page=agenda&amp;tag=figurentheater">figurentheater</option>
       <option value="index.php?page=agenda&amp;tag=figurentheater">figurentheater</option>
       <option value="index.php?page=agenda&amp;tag=muziektheater">muziektheater</option>
       <option value="index.php?page=agenda&amp;tag=kleutertheater">kleutertheater</option>
       <option value="index.php?page=agenda&amp;tag=circus">circus</option>
       <option value="index.php?page=agenda&amp;tag=danstheater">danstheater</option>
      </select>
      <div class="navTagsClear centerContainer">
        <a href="index.php?page=agenda " class="navTagsClear__item">wis tags</a>
      </div>
    </div>
  </nav>
</header>
<div class="mainContainer">
  <main class="centerContainer">
    <div class="eventsContainer">
      <?php foreach($events as $event): ?>
        <div class="eventContainer">
          <figure class="event">
            <svg class="duotone" preserveAspectRatio="xMidYMid slice">
              <defs>
                <filter id="duotone-filter">
                  <feColorMatrix
                    type="matrix"
                    values="1  0  0  0  0
                            1  0  0  0  0
                            1  0  0  0  0
                            0  0  0  1  0"/>
                </filter>
              </defs>
              <image filter="url(#duotone-filter)" xlink:href="assets/img/event/<?php echo $event['id'];?>.jpg"/>
            </svg>
            <figcaption>
              <h3 class="event__title"><?php echo $event['title'];?></h3>
              <p class="event__date"><?php echo date('D j M Y G:i', strtotime($event['start']));?></p>
              <p class="event__description"><?php echo $event['description'];?></p>
            </figcaption>
            <div class="event__overlay"></div>
            <a href="index.php?page=detail&amp;id=<?php echo $event['id']; ?>"></a>
          </figure>
        </div>
      <?php endforeach;?>
    </div>
  </main>
</div>
