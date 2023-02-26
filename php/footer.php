<div class="container">
<div class="row text-center">
<div class="col-md-12 p-0 mt-3 mb-3">
<img class="img-fluid" alt="<?php echo $site->description(); ?>"" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjT5xXdrCnQZTtfYZ89yilM51JN7XW8oB3a23QakUl2pJc4vBnjwBzav2nOzBrC9QvZwN6E6pnN8lHdA6A6b1DBSuhbX_d_py-_1A-8ad6LyWAPILuZD4Xf5ER2bsi04lUs4t6YrTMNIpxACGnK_Vc93wqBHYCjyBK_FWCNr5_eEai0_T3gq1RTr9lMqw/s1920/bannerrestowebsite.webp"/>
</div>
<?php Theme::plugins('siteSidebar') ?>
<nav class="navbar p-3">
<?php foreach (Theme::socialNetworks() as $key=>$label): ?>
<a class="nav-link" href="<?php echo $site->{$key}(); ?>" target="_blank"><?php echo $label; ?></a><?php endforeach; ?>
	<?php if (Theme::rssUrl()): ?>
					<a class="nav-link" href="<?php echo Theme::rssUrl() ?>" target="_blank">
					RSS
					</a>
				</li>
				<?php endif; ?>
</nav>
</div>
</div>
<footer class="footer mt-5">
	<div class="container-fluid">
		<p class="m-0 text-center p-1">
		<?php echo $site->footer(); ?><br/><small><a href="<?php echo Theme::siteUrl(); ?>"><img class="img-fluid" width="20" height="20" alt="<?php echo $site->title(); ?>" src="<?php echo $site->logo(); ?>"/> <?php echo $site->title(); ?></a> develope by <a target="_blank" href="https://www.fiverr.com/creativitas/design-your-website-with-phyton-django">Creativitas</a>
		</small></p>
	</div>
</footer>
