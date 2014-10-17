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

<!-- Start index out -->
	<?php
	//$this->leading 	- Основные материалы
	//$this->primary 	- Первичные материалы
	//$this->secondary 	- Вторичные материалы
	//$this->links 		- Список ссылок

	?>
<div class="indexOut row-fluid">
	<?php
	if (isset($this->links) && count($this->links)) {
		foreach($this->links as $key=>$item){ 
			$this->item=$item;
			echo $this->loadTemplate('item');
			//print_r($item);
		}	
	}?>
</div>
<!-- End index out -->
