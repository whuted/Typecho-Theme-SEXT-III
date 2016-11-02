<div id="comments">
	<?php $this->comments()->to($comments); ?>
	<?php if ($comments->have()): ?>
		<h3><?php $this->commentsNum(_t('No Comment'), _t('1 Comment'), _t('%d Comments')); ?></h3><br />
	
		<?php $comments->listComments(array(
		                'before'        =>  '<ol class="comment-list">',
		                'after'         =>  '</ol>',
		                'beforeAuthor'  =>  '',
		                'afterAuthor'   =>  '',
		                'beforeDate'    =>  '',
		                'afterDate'     =>  '',
		                'dateFormat'    =>  '',
		                'replyWord'     =>  _t('Reply'),
		                'avatarSize'    =>  48,
		                'defaultAvatar' =>  NULL
		            ));?>



	<?php endif; ?>
	
	<?php if($this->allow('comment')): ?>
	<div class="respond" id="<?php $this->respondId(); ?>">
	    
		<h4><?php _e('撰写评论'); ?> </h4>
			<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form">
			<p><textarea required="true" rows="7" name="text"><?php $this->remember('text'); ?></textarea></p>
			<?php if($this->user->hasLogin()): ?>
				<p><?php _e('当前登陆用户为'); ?> <a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('登出'); ?> &raquo;</a></p>
			<?php else: ?>
				<div class="clearfix">
					<p class="comment-cloumn"><label for="author"><?php _e('Name'); ?></label><input type="text" name="author" id="author" required="true" class="text" value="<?php $this->remember('author'); ?>" /></p>
					<p class="comment-cloumn"><label for="mail"><?php _e('Email'); ?></label><input type="email" name="mail" id="mail" required="true" class="text" value="<?php $this->remember('mail'); ?>" /></p>
					<p class="comment-cloumn"><label for="url"><?php _e('Website'); ?></label><input type="url" name="url" id="url" class="text" value="<?php $this->remember('url'); ?>" /></p>
				</div>
			<?php endif; ?>
			<p><input class="submit-up pink" type="submit" value="<?php _e('Submit Comment'); ?>" /> <?php $comments->cancelReply('Cancel'); ?></p>
		</form>
	</div>
	<?php else: ?>
	<p><?php _e(''); ?></p>
	<?php endif; ?>
</div><!-- end #comments -->
