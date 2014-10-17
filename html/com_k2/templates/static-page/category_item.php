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

<!-- Start List of static page out-->
<?php if($this->item->params->get('catItemTitle')): ?>
	<!-- Item title -->
	<h2 class="catItemTitle">
	<?php if ($this->item->params->get('catItemTitleLinked')): ?>
		<a href="<?php echo $this->item->link; ?>"><?php echo $this->item->title; ?></a>
		<?php else: ?>
			<?php echo $this->item->title; ?>
		<?php endif; ?>
	</h2>
<?php endif; ?>

<?php if($this->item->params->get('catItemRating')): ?>
<!-- Item Rating -->
<div class="catItemRatingBlock">
	<span><?php echo JText::_('K2_RATE_THIS_ITEM'); ?></span>
	<div class="itemRatingForm">
		<ul class="itemRatingList">
			<li class="itemCurrentRating" id="itemCurrentRating<?php echo $this->item->id; ?>" style="width:<?php echo $this->item->votingPercentage; ?>%;"></li>
			<li><a href="#" data-id="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_1_STAR_OUT_OF_5'); ?>" class="one-star">1</a></li>
			<li><a href="#" data-id="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_2_STARS_OUT_OF_5'); ?>" class="two-stars">2</a></li>
			<li><a href="#" data-id="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_3_STARS_OUT_OF_5'); ?>" class="three-stars">3</a></li>
			<li><a href="#" data-id="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_4_STARS_OUT_OF_5'); ?>" class="four-stars">4</a></li>
			<li><a href="#" data-id="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_5_STARS_OUT_OF_5'); ?>" class="five-stars">5</a></li>
		</ul>
		<div id="itemRatingLog<?php echo $this->item->id; ?>" class="itemRatingLog"><?php echo $this->item->numOfvotes; ?></div>
		<div class="clr"></div>
	</div>
	<div class="clr"></div>
</div>
<?php endif; ?>

<div class="catItemBody">
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

	<?php if($this->item->params->get('catItemIntroText')): ?>
	<!-- Item introtext -->
	<div class="catItemIntroText">
		<?php echo $this->item->introtext; ?>
	</div>
	<?php endif; ?>
</div>

<?php if($this->item->params->get('catItemHits')): ?>
	<div class="catItemHits">
		<!-- Item Hits -->
		<div class="catItemHitsBlock">
			<span class="catItemHits">
				<?php echo JText::_('K2_READ'); ?> <b><?php echo $this->item->hits; ?></b> <?php echo JText::_('K2_TIMES'); ?>
			</span>
		</div>
	</div>
<?php endif; ?>

<?php if ($this->item->params->get('catItemReadMore')): ?>
<!-- Item "read more..." link -->
<a class="readMore btn" href="<?php echo $this->item->link; ?>">
	<?php echo JText::_('K2_READ_MORE'); ?>
</a>
<?php endif; ?>
<!-- End List of static page out -->
