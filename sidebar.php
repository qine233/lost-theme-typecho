  <div class="content-last">
  <div class="contact border-wid">
  <h1 class="contact-h1">#社交频道</h1>
  <!-- <a href="" ><img src="" alt=""></a>
  <a href="" ><img src="" alt=""></a>
  <a href="" ><img src="" alt=""></a>
  <a href="" ><img src="" alt=""></a> -->
  
</div>
<div class="archives border-wid">
<h1 class="contact-h1">#文章分类</h1>
<ul>
    <?php $this->widget('Widget_Metas_Category_List')
               ->parse('<li><a href="{permalink}">{name}</a> ({count})</li>'); ?>
</ul>
</div>
<div class="new-text border-wid">
<h1 class="contact-h1">#最新文章</h1>
<ul>
    <?php $this->widget('Widget_Contents_Post_Recent','pageSize=5')
               ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
</ul>
</div>
  </div>