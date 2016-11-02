<?php
/**
* tags
*
* @package custom
*/
?>

<?php $this->need('header.php'); ?>


	
        <article class="content">
        <section class="post">
<div id='tag_cloud'>

			
			<?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=mid&desc=0')->to($tags); ?>
<?php if($tags->have()): ?>
<?php while ($tags->next()): ?>
	<a href="<?php $tags->permalink(); ?>" rel="tag" class="size-<?php $tags->split(5, 10, 20, 30); ?>" title="<?php $tags->count(); ?> 个话题"><?php $tags->name(); ?></a>
<?php endwhile; ?>
<?php else: ?>
	<li><?php _e('没有任何标签'); ?></li>
<?php endif; ?>

</div>
</section>

	<?php $this->need('footer.php'); ?>
