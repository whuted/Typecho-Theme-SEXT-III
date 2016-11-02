<?php $this->need('header.php'); ?>

<hr>
<center><h5><a href="<?php $this->author->permalink(); ?>" title="文章作者地址"><?php $this->author(); ?></a> · <?php $this->date('F j, Y'); ?> · <?php _e('阅读'); ?>(<?php $this->viewsNum(); ?>)</h5></center>
<hr>
	
        <article class="content">
        <section class="post">


			
			<?php $this->content(); ?>
<section class="meta">
<?php _e('阅读'); ?>(<?php $this->viewsNum(); ?>)

<span class="time">
 &nbsp;<time datetime="<?php $this->date('Y-m-d'); ?>"><?php $this->date('Y-m-d'); ?></time>
</span>

</section>

</section>
    <?php $this->need('comments.php'); ?>
	<?php $this->need('footer.php'); ?>
