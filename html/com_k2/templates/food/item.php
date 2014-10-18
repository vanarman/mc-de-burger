<?php
/**
 * @version		2.6.x
 * @package		K2
 * @author		JoomlaWorks http://www.joomlaworks.net
 * @copyright	Copyright (c) 2006 - 2014 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die; ?>
<div class="foodOut row-fluid">
	<div class="span6">
	<?php if($this->item->params->get('itemTitle')): ?>
		<!-- Item title -->
		<h1 class="itemTitle">
			<?php echo $this->item->title; ?>
		</h1>
	<?php endif; ?>

	<?php if(!empty($this->item->fulltext)): ?>
		<?php if($this->item->params->get('itemIntroText')): ?>
			<!-- Item introtext -->
			<div class="itemIntroText">
				<?php echo $this->item->introtext; ?>
			</div>
		<?php endif; ?>
		<?php if($this->item->params->get('itemFullText')): ?>
			<!-- Item fulltext -->
			<div class="itemFullText">
				<?php echo $this->item->fulltext; ?>
			</div>
		<?php endif; ?>
	<?php else: ?>
		<!-- Item text -->
		<div class="itemFullText">
			<?php echo $this->item->introtext; ?>
		</div>
	<?php endif; ?>
	</div>
	<div class="span6">
		<?php if($this->item->params->get('itemImage') && !empty($this->item->image)): ?>
			<!-- Item Image -->
			<div class="itemImageBlock">
			  		<img src="<?php echo $this->item->image; ?>" alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>" style="width:<?php echo $this->item->imageWidth; ?>px; height:auto;" />
			</div>
		<?php endif; ?>

		<?php if(isset($this->item->extra_fields_search)) : ?>
			<span class="price"> <? echo $this->item->extra_fields_search; ?> грн</span>
		<?php endif; ?>
	</div>
</div>