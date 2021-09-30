<?php
/**
 * “ 青益的第一款主题 ”
 * @package QINE
 * @author QINE
 * @link https://www.idkzr.com/
 */
?>
<?php $this->need('public/header.php'); ?>
<div class="content-all">
        <div class="content">
             <div class="content-list">
			 <?php while($this->next()): ?>
    <div class="post">
	<h2 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
	
	<div class="entry_text" >
	
	    <?php $this->content('......'); ?>
	</div>
	<div class="entry_data">
	<ul>
<li><?php $this->author(); ?></li>
<li> <?php $this->category(','); ?></li>
<li><?php $this->commentsNum('%d 评论'); ?></li>
</ul>
	</div>
			
    </div>
<?php endwhile; ?>

             </div>   <div class="nav-page"  >
<?php $this->pageNav(); ?>
</div>

        </div>
        <?php $this->need('sidebar.php'); ?>
        </div>
	
		<?php $this->need('public/footer.php'); ?>
		</div>  
			 </div>
</body>