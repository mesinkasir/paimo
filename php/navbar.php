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
  <a class="btn btn-dark text-white" href="https://github.com/mesinkasir/paimo"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/></svg> Download</a>		
</nav>
