<?php
  $path = drupal_get_path('theme', 'prensa') . '/img/banner_lat.png';
?>
<div<?php print $attributes; ?>>
  <div<?php print $content_attributes; ?>>
    <?php if ($linked_logo_img || $site_name || $site_slogan): ?>
    <div class="branding-data clearfix">
      <div class="logo-nayarit">
        <a href="<?php print url('<front>');?>"><img src="<?php print base_path() . $path;?>"/></a>
      </div>
      <?php if ($linked_logo_img): ?>
      <div class="logo-img">
        <?php print $linked_logo_img; ?>
<?php if ( arg(0) != 'search' ): ?>
        <div id="prensa-search">
          <div id="cse-search-form" style="width: 100%;">Loading</div>
            <script src="http://www.google.com/jsapi" type="text/javascript"></script>
            <script type="text/javascript"> 
              google.load('search', '1', {language : 'es', style : google.loader.themes.V2_DEFAULT});
              google.setOnLoadCallback(function() {
              var customSearchOptions = {};  var customSearchControl = new google.search.CustomSearchControl(
                '011046897265700545572:s42jrtnzbbi', customSearchOptions);
              customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
              var options = new google.search.DrawOptions();
              options.enableSearchboxOnly("http://www.gobiernodelagente.com/search", "query");
              customSearchControl.draw('cse-search-form', options);
              }, true);
            </script>

            <style type="text/css">
              input.gsc-input, .gsc-input-box, .gsc-input-box-hover, .gsc-input-box-focus {
                border-color: #D9D9D9;
              }
              input.gsc-search-button, input.gsc-search-button:hover, input.gsc-search-button:focus {
                border-color: #333;
                background-color: #666;
                background-image: none;
                filter: none;
              }
            </style>
        </div>
<?php endif;?>
      </div>
      <?php endif; ?>
      <?php if ($site_name || $site_slogan): ?>
      <?php $class = $site_name_hidden && $site_slogan_hidden ? ' element-invisible' : ''; ?>
      <?php endif; ?>
    </div>
    <?php endif; ?>
    <?php print $content; ?>
  </div>
</div>
