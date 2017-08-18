<header>
  <nav>
    <div class="navMenuTop">
      <img src="../assets/img/logo.svg" alt="">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php?page=agenda">Agenda</a></li>
        <li><a href="index.php?page=over-spekken">Over spekken</a></li>
        <li><a href="index.php?page=contact">Contact</a></li>
      </ul>
      <ul>
        <li><a href="index.php?page=agenda">Alles</a></li>
        <li><a href="index.php?page=agenda&amp;month=12">December</a></li>
        <li><a href="index.php?page=agenda&amp;month=01">Januari</a></li>
        <li><a href="index.php?page=agenda&amp;month=04">April</a></li>
      </ul>
    </div>
    <ul>
      <li><a href="index.php?page=agenda&amp;tag=kindertheater">kindertheater</a></li>
      <li><a href="index.php?page=agenda&amp;tag=jeugdtheater">jeugdtheater</a></li>
      <li><a href="index.php?page=agenda&amp;tag=figurentheater">figurentheater</a></li>
      <li><a href="index.php?page=agenda&amp;tag=muziektheater">muziektheater</a></li>
      <li><a href="index.php?page=agenda&amp;tag=kleutertheater">kleutertheater</a></li>
      <li><a href="index.php?page=agenda&amp;tag=circus">circus</a></li>
      <li><a href="index.php?page=agenda&amp;tag=danstheater">danstheater</a></li>
      <li><a href="index.php?page=agenda">wis tags</a></li>
    </ul>
    <form action="index.php">
      <input type="hidden" name="page" value="agenda" />
      <input type="text" name="search">
    </form>
  </nav>
</header>
<main>
  <h1>Programs</h1>
  <?php foreach($events as $event): ?>
    <article>
      <header><h2><?php echo $event['title']; ?></h2></header>
      <dl>
        <dt>start</dt><dd><?php echo $event['start'];?></dd>
        <dt>leeftijd</dt><dd><?php echo $event['start_age'];?> - <?php echo $event['end_age'];?> jaar</dd>
        <dt>performer</dt><dd><?php echo $event['performer'];?></dd>
        <dt>title</dt><dd><?php echo $event['title'];?></dd>
        <dt>location</dt><dd><?php echo $event['location'];?></dd>
        <dt>tags</dt><dd><ul><?php foreach($event['tags'] as $tag): ?><li><?php echo $tag['tag'];?></li><?php endforeach;?></ul></dd>
        <dt>description</dt><dd><pre><?php echo $event['description'];?></pre></dd>
      </dl>
    </article>
  <? endforeach;?>
</main>
