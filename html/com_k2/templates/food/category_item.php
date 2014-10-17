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

// Define default image size (do not change)
K2HelperUtilities::setDefaultImage($this->item, 'itemlist', $this->params);

?>

<?php if($this->item->params->get('catItemImage') && !empty($this->item->image)): ?>
	<!-- Item Image -->
	<div class="catItemImageBlock">
		<span class="catItemImage">
			<a href="<?php echo $this->item->link; ?>" title="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>">
				<img src="<?php echo $this->item->image; ?>" alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>" style="width:<?php echo $this->item->imageWidth; ?>px; height:auto;" />
			</a>
		</span>
	</div>
<?php endif; ?>
<?php if(isset($this->item->extra_fields_search)) : ?>
  	<span class="price"> <? echo $this->item->extra_fields_search; ?> грн</span>
<?php endif; ?>
<?php if($this->item->params->get('catItemTitle')): ?>
	<!-- Item title -->
	<h3 class="catItemTitle">
		<?php if(isset($this->item->editLink)): ?>
		<!-- Item edit link -->
		<span class="catItemEditLink">
			<a class="modal" rel="{handler:'iframe',size:{x:990,y:550}}" href="<?php echo $this->item->editLink; ?>">
				<?php echo JText::_('K2_EDIT_ITEM'); ?>
			</a>
		</span>
		<?php endif; ?>

		<?php if ($this->item->params->get('catItemTitleLinked')): ?>
			<a href="<?php echo $this->item->link; ?>">
				<?php echo $this->item->title; ?>
			</a>
		<?php else: ?>
			<?php echo $this->item->title; ?>
		<?php endif; ?>
	</h3>
<?php endif; ?>