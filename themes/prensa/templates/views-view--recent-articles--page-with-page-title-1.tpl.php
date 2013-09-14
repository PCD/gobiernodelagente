<div id="recent-articles" class="<?php print $classes; ?>">
  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <?php print $title; ?>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  
  <div id="recent-articles-tabs">
    <ul>
      <?php
        $all_tabs = $attachment_after;
        if ( $rows ) {
          $all_tabs = '<div class="term-tab" id="tab-1">' . $header . $all_tabs;
        }
        $count = preg_match_all('/<div class="term-tab" id="([^"]+)">\s*<h3>(.+?)<\/h3>/msi', $all_tabs, $matches);
        foreach($matches[1] as $key => $id):
      ?>
      <li><a href="#<?php print $id;?>"><?php print $matches[2][$key]?></a></li>
      <?php endforeach; ?>
    </ul>
    <div class="tabs-wrapper">
      <?php if ($rows): ?>
      <div class="term-tab" id="tab-1">
        <?php if ($header): ?>
          <?php print $header; ?>
        <?php endif; ?>
      
      <?php if ($rows): ?>
        <div class="view-content">
          <?php print $rows; ?>
          <div class="clearfix h1px">&nbsp;</div>
        </div>
      <?php elseif ($empty): ?>
        <div class="view-empty">
          <?php print $empty; ?>
        </div>
      <?php endif; ?>
      
      <?php if ($pager): ?>
        <?php print $pager; ?>
      <?php endif; ?>
      
      <?php if ($footer): ?>
        <div class="view-footer">
          <?php print $footer; ?>
        </div>
      <?php endif; ?>
      
      </div>
    <?php endif; ?>
      
      <?php if ($attachment_after): ?>
        <?php print $attachment_after; ?>
      <?php endif; ?>
    </div>
  </div>
    
</div><?php /* class view */ ?>
