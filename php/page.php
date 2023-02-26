<div class="container">
<div class="row">
<?php Theme::plugins('pageBegin'); ?>
<div class="col-md-5 p-3 p-md-5 mt-5">
<?php if ($page->coverImage()): ?>
<img class="img-fluid rounded mt-3 mb-3" alt="<?php echo $page->title(); ?>" src="<?php echo $page->coverImage(); ?>"/>
<?php endif ?>
</div>
<div class="col-md-7 p-3 p-md-5">
<h1><strong><a class="p-1" href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a></strong></h1>
<?php if ($page->description()): ?>
<h2 class="lead"><?php echo $page->description(); ?></h2>
<?php endif ?>
<?php echo $page->content(); ?>

</div>
<?php Theme::plugins('pageEnd'); ?>
</div>
</div>
</div>
