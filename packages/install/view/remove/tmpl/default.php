<?php
/**
 * @package    Joomla.Installation
 *
 * @copyright  Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/* @var InstallationViewRemoveHtml $this */
?>
<form action="index.php" method="post" id="adminForm" class="form-validate form-horizontal">
	<div class="alert alert-error inlineError" id="theDefaultError" style="display: none">
		<h4 class="alert-heading"><?php echo JText::_('JERROR'); ?></h4>
		<p id="theDefaultErrorMessage"></p>
	</div>
	<div class="alert alert-success">
	<h3><?php echo JText::_('INSTL_COMPLETE_TITLE'); ?></h3>
	</div>
	<div class="alert">
		<p><?php echo JText::_('INSTL_COMPLETE_REMOVE_INSTALLATION'); ?></p>
		<input type="button" class="btn btn-warning" name="instDefault" onclick="Install.removeFolder(this);" value="<?php echo JText::_('INSTL_COMPLETE_REMOVE_FOLDER'); ?>" />
	</div>
	<div class="btn-toolbar">
		<div class="btn-group">
			<a class="btn btn-primary" href="<?php echo JUri::root(); ?>wizard.php?task=extension" title="<?php echo JText::_('Extensions Setup'); ?>"><span class="icon-lock icon-white"></span> <?php echo JText::_('Extensions Setup'); ?></a>
		</div>		
	</div>
	<?php echo JHtml::_('form.token'); ?>
</form>
