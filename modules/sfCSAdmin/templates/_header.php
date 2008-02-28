<div id="cs_wrapper">
  <div id="cs_header">
    <h1><?php echo link_to('CentreSource', '@homepage'); ?></h1>
    <h2><?php echo sfConfig::get('app_cs_sf_admin_title'); ?></h2>
  </div>
  
  <div id="cs_menu">
    <?php if (has_slot('menu')): ?>
      <?php echo get_slot('menu'); ?>
    <?php endif; ?>
  </div>