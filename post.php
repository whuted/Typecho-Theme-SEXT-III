<?php $this->need('header.php'); ?>

<hr>
<center><h5><a href="<?php $this->author->permalink(); ?>" title="文章作者地址"><?php $this->author(); ?></a> · <?php $this->date('F j, Y'); ?> · <?php $this->category(','); ?> · <?php _e('阅读'); ?>(<?php $this->viewsNum(); ?>)</h5></center>
<hr>

        <article class="content">
        <section class="post">
			
			<?php $this->content(); ?>
</section>

<hr>

<section class="meta">

<?php $this->category(','); ?>

<?php _e('阅读'); ?>(<?php $this->viewsNum(); ?>)

<span class="tags">
   Tagged by 
  
  <?php $this->tags('&nbsp;', true, 'none'); ?>
  
</span>

<span class="time">
 &nbsp;<time datetime="<?php $this->date('Y-m-d'); ?>"><?php $this->date('Y-m-d'); ?></time>
</span>

</section>
<hr/>
		
    <?php $this->need('comments.php'); ?>
	<?php $this->need('footer.php'); ?>
