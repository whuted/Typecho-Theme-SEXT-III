<?php
/**
* archive
*
* @package custom
*/
?>

<?php $this->need('header.php'); ?>


<article class="content">
<section class="post">

<ul class="listing">
<li class="listing-seperator"><?php $this->archiveTitle(' &raquo; ', ''); ?></li>
    <?php if ($this->have()): ?>
	<?php while($this->next()): ?>
  <li class="listing-item">
    <time datetime="<?php $this->date('Y-m-d'); ?>"><?php $this->date('Y-m-d'); ?></time>
    <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
  </li>


    


<?php endwhile; ?>
    <?php else: ?>
			<h2 class="page-title"><span>Search results for:</span> <?php $this->archiveTitle(' &raquo; ', ''); ?></h2>
							<div class="post">
					<div class="entry">
						<h3>We couldn't find anything!</h3>
						<h5>Suggestions:</h5>
						<ul>
							<li>Make sure all words are spelled correctly.</li>
							<li>Try different keywords.</li>
							<li>Try more general keywords.</li>
							<li>Try fewer keywords.</li>
						</ul>
					</div>
				</div>
    <?php endif; ?>




	


        <div id="pageNav">
			<?php $this->pageNav('&laquo;','&raquo;',5,'...'); ?>
        </div>

	<?php $this->need('footer.php'); ?>