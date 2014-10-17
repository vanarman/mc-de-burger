<?php
/**
 * @version		2.6.x
 * @package		K2
 * @author		JoomlaWorks http://www.joomlaworks.net
 * @copyright	Copyright (c) 2006 - 2014 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die;

?>
<div class="StaticPageOut">
	<?php if($this->item->params->get('itemTitle')): ?>
		<h1 class="itemTitle"><?php echo $this->item->title; ?></h1>
	<?php endif; ?>
  	<div class="StaticPageOutBody">
	  	<?php if(!empty($this->item->fulltext)): ?>
			<?php if($this->item->params->get('itemIntroText')): ?>
				<!-- Item introtext -->
				<div class="introText">
					<?php echo $this->item->introtext; ?>
				</div>
			<?php endif; ?>
			<?php if($this->item->params->get('itemFullText')): ?>
				<!-- Item fulltext -->
				<div class="fullText">
					<?php echo $this->item->fulltext; ?>
				</div>
			<?php endif; ?>
	  	<?php else: ?>
			<!-- Item text -->
			<div class="fullText">
				<?php echo $this->item->introtext; ?>
			</div>
  		<?php endif; ?>

		<?php if($this->item->params->get('itemHits') || ($this->item->params->get('itemDateModified') && intval($this->item->modified)!=0)): ?>
			<div class="contentFooter">
				<?php if($this->item->params->get('itemHits')): ?>
					<span class="hits"><?php echo JText::_('K2_READ'); ?> <b><?php echo $this->item->hits; ?></b> <?php echo JText::_('K2_TIMES'); ?></span>
				<?php endif; ?>
			</div>
		<?php endif; ?>
  	</div>
</div>
