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

<!-- Start static category out -->
<div class="StaticCategoryOut">
	<?php if($this->params->get('catTitle')): ?>
	<!-- Category title -->
	<h1><?php echo $this->category->name; ?><?php if($this->params->get('catTitleItemCounter')) echo ' ('.$this->pagination->total.')'; ?></h1>
	<?php endif; ?>

	<?php if(isset($this->leading) && count($this->leading)): ?>
		<?php foreach($this->leading as $key=>$item): ?>
		<div class="itemContainer">
			<?php
				// Load category_item.php by default
				$this->item=$item;
				echo $this->loadTemplate('item');
			?>
		</div>
		<?php endforeach; ?>
	<?php endif; ?>
</div>
<!-- End static category out -->
