<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Spekken</title>
    <?php echo $css;?>
    <script>
     WebFontConfig = {
       custom: {
          families: ['roboto', 'raleway'],
          urls: ['assets/fonts/fonts.css']
        }
     };
     (function(d) {
        var wf = d.createElement('script'), s = d.scripts[0];
        wf.async = true;
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js';
        s.parentNode.insertBefore(wf, s);
     })(document);
    </script>
  </head>
  <body>

    <div class="container">
      <?php if(!empty($_SESSION['info'])): ?><div class="alert alert-success"><?php echo $_SESSION['info'];?></div><?php endif; ?>
      <?php if(!empty($_SESSION['error'])): ?><div class="alert alert-danger"><?php echo $_SESSION['error'];?></div><?php endif; ?>

      <?php echo $content; ?>
    </div>

    <?php echo $js;?>
  </body>
</html>
