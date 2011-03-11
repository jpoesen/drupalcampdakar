<?php
// $Id: comment.tpl.php,v 1.6 2011/02/18 05:47:53 andregriffin Exp $
?>
<article class="comment<?php print ($comment->new) ? ' comment-new' : ''; print ' '. $status; print ' '. $zebra; ?> clearfix">

  <header>
    <?php print $picture ?>

    <span class="submitted"><?php print $submitted; ?></span>

    <?php if ($comment->new) : ?>
      <span class="new"><?php print $new ?></span>
    <?php endif; ?>

    <h3><?php print $title ?></h3>
  </header>

  <div class="content">
    <?php print $content ?>
    <?php if ($signature): ?>
      <div class="user-signature clearfix">
        <?php print $signature ?>
      </div>
    <?php endif; ?>
  </div>

  <?php if ($links): ?>
    <footer>
      <?php print $links ?>
    </footer>
  <?php endif; ?>

</article> <!-- /.comment -->
