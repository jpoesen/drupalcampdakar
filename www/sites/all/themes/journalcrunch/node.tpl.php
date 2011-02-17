<?php if ($is_front || arg(0)=='taxonomy') { // Default frontpage and every taxonomy page 

if (!variable_get('isFirstNoStickyNode', $default)){

	if (!$node->sticky) {
	
		print '<div class="clear-block" style="clear:both;"></div>';
		variable_set('isFirstNoStickyNode', true);
		
	}
} ?>

<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> node-front <?php if (arg(0)=='taxonomy') { print ' node-taxonomy'; } ?>">
	<!-- just a comment to test SVN, can be removed -->
    <div class="nodeInner">

        <?php print $picture ?>
        
        <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
        
        <div class="content clear-block">
        	<?php print $content ?>
        </div>
       
        <div class="clear-block" style="color: #888888; font-size: 11px; margin: 0; text-transform: uppercase;">
            <?php if ($links): ?>
            
			<?php if ($submitted): ?>
            <span class="submitted"><?php print t('!date', array('!date' => format_date($node->created, 'custom', "M j, Y"))); ?></span>
            <?php endif; ?>
                
            <div class="links" style="display:inline;"><?php print $links; ?></div>
            
            <?php endif; ?>
        </div>
            
    </div>  

</div>

<?php } else { ?>

<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">

    <?php print $picture ?>
    
    <h1><?php print $title ?></h1>
    
    <div class="meta clear-block">
    
    <?php if ($submitted): ?>
    <div class="submitted"><?php print $submitted; ?></div>
    <?php endif; ?>
    
    <?php if ($taxonomy): ?>
    <div class="terms"><?php print $terms ?></div>
    <?php endif;?>
    
    </div>
    
    <div class="content clear-block">
    <?php print $content ?>
    </div>

    <?php if ($links): ?>
    <div class="links"><?php print $links; ?></div>
    <?php endif; ?>

</div>

<?php } ?>
