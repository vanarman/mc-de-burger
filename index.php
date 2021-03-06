<?php defined('_JEXEC') or die; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<jdoc:include type="head" />
	<?php
		JHtml::_('bootstrap.framework');
		JHtmlBootstrap::loadCss(false);
		$doc 		= JFactory::getDocument();
		$user 		= JFactory::getUser();
		$config 	= JFactory::getConfig();
		$app        = JFactory::getApplication();
		$template   = $app->getTemplate(true);
		$params     = $template->params;

		//$doc->addStyleSheet('/templates/'. $template->template .'/css/bootstrap-responsive.css');
		$doc->addStyleSheet('/templates/'. $template->template .'/css/bootstrap.css');
		$doc->addStyleSheet('/templates/'. $template->template .'/css/default.css');
	?>
</head>

<body>
	<header class="row-fluid">
		<div class="span12">
			<div class="row-fluid">
				<nav class="span4 offset4">
					<?php if ($this->countModules('mainmenu')) : ?>
						<jdoc:include type="modules" name="mainmenu" style="default"/>
					<?php endif; ?>
				</nav>
				<div class="span1">
					<?php if ($this->countModules('langswitch')) : ?>
						<jdoc:include type="modules" name="langswitch" style="default"/>
					<?php endif; ?>
				</div>
					<?php if ($this->countModules('search')) : ?>
								<jdoc:include type="modules" name="search" style="default"/>
					<?php endif; ?>
			</div>
		</div>
	</header>
	<div id="wrapper" class="container-fluid">
		<div class="row-fluid">
			<?php if ($this->countModules('bigcentralslider')) : ?>
				<div id="bigcentralslider" class="span12">
					<jdoc:include type="modules" name="bigcentralslider" style="default"/>
				</div>	
			<?php endif; ?>
		</div>
		<div class="row-fluid">
			<div class="span3 offset1" id="left">
				<!--#######################################################################-->
				<!--Start######################### Logo ###################################-->
				<!--#######################################################################-->
				<div id="logo">
					<img class="logo" <?php echo 'src="templates/' . $template->template . '/images/logo.png"'; ?> alt="" title=""/>
				</div>
				<!--#######################################################################-->
				<!--End########################### Logo ###################################-->
				<!--#######################################################################-->
				<?php if ($this->countModules('additionalmenu')) : ?>
					<jdoc:include type="modules" name="additionalmenu" style="default"/>
				<?php endif; ?>
			</div>

			<!-- Main block -->
			<div id="main" class="span7 offset4">
				<?php if ($this->countModules('breadcrumbs')) : ?>
					<div class="row" id="breadcrumbs">
							<jdoc:include type="modules" name="breadcrumbs" style="default"/>
					</div>
				<?php endif; ?>
				
				<div class="main-content">
					<?php
					if (!$user->guest) {
						$userAroGroup = $acl->getAroGroup($user->id);
						if ($acl->is_group_child_of($userAroGroup->name, 'Super Administrator') || $acl->is_group_child_of($userAroGroup->name, 'Administrator')) {?>
		 					<jdoc:include type="message" /> <?php
						}
					}?>
					<jdoc:include type="component" />
				</div>
			</div>
			<!-- Main block End -->
		</div>
	</div>
	<footer class="container-fluid">
		<?php if ($this->countModules('footer')) : ?>
			<jdoc:include type="modules" name="footer" style="default"/>
		<?php endif; ?>	
		<div class="row-fluid">
			<div class="span10 offset2" id="small-logo">
				<img class="smallLogo float-l" <?php echo 'src="templates/' . $template->template . '/images/small-logo.png"'; ?> alt="" title=""/>
				<div class="span9 footerLine">
					<hr class="separator" />
					<p class="copy float-l">Все права защищены MC DE BURG</p>
					<?php if ($this->countModules('small-map')) : ?>
						<jdoc:include type="modules" name="small-map" style="default"/>
					<?php endif; ?>	
				</div>
			</div>
		</div>
		<div class="social row-fluid">
			<div class="span3 offset5">
				<img class="social" <?php echo 'src="templates/' . $template->template . '/images/social/img-f.png"'; ?> alt="" title="" />
				<img class="social" <?php echo 'src="templates/' . $template->template . '/images/social/img-g.png"'; ?> alt="" title="" />
				<img class="social" <?php echo 'src="templates/' . $template->template . '/images/social/img-o.png"'; ?> alt="" title="" />
				<img class="social" <?php echo 'src="templates/' . $template->template . '/images/social/img-t.png"'; ?> alt="" title="" />
				<img class="social" <?php echo 'src="templates/' . $template->template . '/images/social/img-v.png"'; ?> alt="" title="" />
			</div>
		</div>
		<p class="autor">Programed by Dmytro Sytnik (VanArman) version 1.0</p>
	</footer>
</body>
</html>