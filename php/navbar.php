<div class="col-md-12 p-3 text-center mt-1">
<a href="<?php echo Theme::siteUrl(); ?>"><img alt="<?php echo $site->title(); ?>" class="img-fluid" width="40" height="40" src="<?php echo $site->logo(); ?>"/> <br/>
			<h1><strong><?php echo $site->title(); ?></strong></h1>
			<h2><?php echo $site->description(); ?></h2>
		</a>
</div>
<div class="col-md-12 p-0 mt-3 mb-3">
<img class="img-fluid" alt="<?php echo $site->description(); ?>" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjvoo-WaApqjZxRFx--yzZ_niYY9F3DIYqsppSwlFN-GXvbAqvrvW7m1ML7PfYZIfOgg0hFfVwlYHdVT9q60OHGMlWKa67a91CMERUfFw2iSHiwBNWtPWayhzpkehMVxqcwbUAShzCJ7M7SFF4V93fa5jlLaX9UbO9_ouMv5xVISfp3fxk5B86jyJ5pbw/s1920/coverrestowebsite.webp"/>
</div>
<nav class="navbar border-top border-bottom">
<a class="nav-link" href="<?php echo Theme::siteUrl(); ?>">Home</a>
<?php foreach ($staticContent as $staticPage): ?>
  <a class="nav-link" href="<?php echo $staticPage->permalink(); ?>"><?php echo $staticPage->title(); ?></a>
  <?php endforeach ?>
</nav>
