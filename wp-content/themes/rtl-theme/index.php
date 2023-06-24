<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>مستر کلاس راست چین</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css"
          integrity="sha384-PJsj/BTMqILvmcej7ulplguok8ag4xFTPryRq8xevL7eBYSmpXKcbNVuy+P0RMgq" crossorigin="anonymous">
</head>
<body dir="rtl">
<div class="container">
    <h3>لیست پست ها</h3>
    <div class="row">
		<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ): the_post(); ?>
                <div class="card" style="width: 18rem;margin: 1rem">
                    <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('full', ['class'=>'card-img-top', 'alt'=>get_the_title()]); ?>
                    <?php else: ?>
                        <img src="https://dkstatics-public.digikala.com/digikala-products/114356296.jpg?x-oss-process=image/resize,m_lfit,h_300,w_300/quality,q_80"
                         class="card-img-top" alt="...">
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php echo rtl_excerpt(get_the_excerpt()) . " ..."; ?></p>
                        <a href="<?php the_permalink();?>" class="btn btn-primary">مطالعه</a>
                    </div>
                </div>
			<?php endwhile; ?>
		<?php endif; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>
</div>
<div class="container">
    <h3>لیست سفارشی پست ها</h3>
    <div class="row">
	    <?php
	    $args  = [
		    'author' => 1,
		    'cat'    => 1
	    ];
	    $query = new WP_Query( $args );
	    ?>
		<?php if ( $query->have_posts() ): ?>
			<?php while ( $query->have_posts() ): $query->the_post(); ?>
                <div class="card" style="width: 18rem;margin: 1rem">
					<?php if (has_post_thumbnail()): ?>
						<?php the_post_thumbnail('full', ['class'=>'card-img-top', 'alt'=>get_the_title()]); ?>
					<?php else: ?>
                        <img src="https://dkstatics-public.digikala.com/digikala-products/114356296.jpg?x-oss-process=image/resize,m_lfit,h_300,w_300/quality,q_80"
                             class="card-img-top" alt="...">
					<?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php echo rtl_excerpt(get_the_excerpt()) . " ..."; ?></p>
                        <a href="<?php the_permalink();?>" class="btn btn-danger">مطالعه</a>
                    </div>
                </div>
			<?php endwhile; ?>
		<?php endif; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>
</div>
</body>
</html>