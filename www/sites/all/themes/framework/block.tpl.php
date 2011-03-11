<?php
// $Id: block.tpl.php,v 1.6 2011/02/18 05:47:53 andregriffin Exp $
?>
<section id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block block-<?php print $block->module ?> clearfix">
  <?php if (!empty($block->subject)): ?>
    <h2><?php print $block->subject ?></h2>
  <?php endif;?>

  <div class="content">
    <?php print $edit_links; ?>
    <?php print $block->content ?>
  </div>

</section> <!-- /.block -->
