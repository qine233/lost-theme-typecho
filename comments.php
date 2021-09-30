
<div class="comments">
    <div id="comments-padding">
<!-- 判断设置是否允许对当前文章进行评论 -->
<?php if($this->allow('comment')): ?>
 
 <h4 id="response"><?php $this->commentsNum('评论 (%d)'); ?></h4>

 <!-- 输入表单开始 -->
 <form method="post" action="<?php $this->commentUrl() ?>" id="comment_form">

     <!-- 如果当前用户已经登录 -->
     <?php if($this->user->hasLogin()): ?>
         <!-- 显示当前登录用户的用户名以及登出连接 -->
         <p>Logged in as <a href="<?php $this->options->adminUrl(); ?>"><?php $this->user->screenName(); ?></a>. 
         <a href="<?php $this->options->index('Logout.do'); ?>" title="Logout">Logout &raquo;</a></p>

     <!-- 若当前用户未登录 -->
     <?php else: ?>
      <div class="comments-3-text"> 
     <p><label>昵称*&nbsp;:&nbsp;</label><input type="text" name="author" class="text" size="35" value="<?php $this->remember('author'); ?>" /></p>
     <p><label>邮箱*&nbsp;:&nbsp;</label><input type="text" name="mail" class="text" size="35" value="<?php $this->remember('mail'); ?>" /></p>
     <p><label>网站链接(可不填)&nbsp;:&nbsp;</label><input type="text" name="url" class="text" size="35" value="<?php $this->remember('url'); ?>" /></p>
    </div>
     <?php endif; ?>

     <!-- 输入要回复的内容 -->
     <div class="talk-content">
     <p><textarea class="text" rows="10" cols="50" name="text"><?php $this->remember('text'); ?></textarea></p>
  <!-- <p><textarea  type="text" name="text" size="35" value="<?php $this->remember('text'); ?>" /></p> -->

  <p><input type="submit" value="发送" class="submit" /></p>
 </div>
 </form>
<?php endif; ?>
    </div>
 <div class="talk-list">
 <h4 style="text-align: center;
            margin-top:30px;
            "><?php $this->commentsNum('', '评论给"' . $this->title . '"', '共 %d 个回复 "' . $this->title . '"'); ?></h4>
<ol style="  display: flex; 
   flex-wrap: wrap;" id="comment_list">
    <?php $this->comments()->to($comments); ?>
        <?php while($comments->next()): ?>
	<li style="background-color: white ;
margin-top: 20px;
height:8rem;
width: 530px;
margin-right:35px;
list-style:none;
border-radius:0.8rem;
box-shadow: 18px 18px 30px #d1d9e6;
" id="list-talk-list <?php $comments->theId(); ?>">
	    <div class="comment_data">
                <?php echo $comments->sequence(); ?>. 
                <strong><?php $comments->author(); ?></strong>
                on <?php $comments->date('F jS, Y'); ?> at <?php $comments->date('h:i a'); ?>
            </div>
	    <div class="comment_body"><?php $comments->content(); ?></div>
	</li>  
    <?php $comments->pageNav('« 前一页', '后一页 »'); ?>   

	<?php endwhile; ?>
</ol>  
 </div>
</div>