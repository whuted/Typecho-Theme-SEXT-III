<?php
/**
 * 本主题由Linghua Zhang制作，经同意后由Gryu转入Typecho并进行修改及共享。<br><br><a href="http://tedl.in/Theme.html">TedL.in</a>在Sext-II的基础上，对界面的CSS设计进行重新修正，并增加了一些新的功能。<br>主要的提升集中在：字体、行距、界面排版、访问量统计、回复评论等部分。<br><br>获取主题的最新更新请访问：<a href="http://tedl.in/">TedL.in博客</a>。
 * 
 * @package Sext-III
 * @author TedL.in
 * @version III (Modified Version) (20160619)
 * @link http://tedl.in/Theme.html
 */

$this->need('header.php'); ?>

<article class="content">
<section class="post">
<ul class="listing">

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


</ul>

	<?php $this->need('footer.php'); ?>
