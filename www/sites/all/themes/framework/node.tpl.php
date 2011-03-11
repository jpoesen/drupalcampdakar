<?php
// $Id: node.tpl.php,v 1.6 2011/02/18 05:47:53 andregriffin Exp $
?>
<?php if (!$page): ?>
  <article id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> clearfix">
<?php endif; ?>

  <?php if ($picture || $submitted || !$page): ?>
    <?php if (!$page): ?>
      <header>
	<?php endif; ?>

      <?php print $picture ?>

	  <?php if (!$page): ?>
        <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
      <?php endif; ?>

	  <?php if ($submitted): ?>
        <p class="submitted"><?php print $submitted; ?></p>
      <?php endif; ?>

    <?php if (!$page): ?>
      </header>
	<?php endif; ?>
  <?php endif;?>

  <div class="content">
    <?php print $content ?>
  </div>

  <?php if (!empty($links) || !empty($terms)): ?>
    <footer>
      <?php if ($terms): ?>
        <div class="terms">
          <span><?php print t('Tags: ') ?></span><?php print $terms ?>
        </div>
      <?php endif;?>
      <?php if ($links): ?>
        <div class="links">
          <?php print $links; ?>
        </div>
      <?php endif; ?>
    </footer>
  <?php endif;?>

<?php if (!$page): ?>
  </article>
<?php endif;?> <!-- /.node -->
