<?php
/**
 * @package    DD_SocialShare
 *
 * @author     HR IT-Solutions Florian Häusler <info@hr-it-solutions.com>
 * @copyright  Copyright (C) 2017 - 2017 Didldu e.K. | HR IT-Solutions
 * @license    http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
**/

defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');
jimport('joomla.access.access');

/**
 * Class PlgContentDD_SocialShare_AutoPush
 *
 * @since  Version  1.0.0.0
 */
class PlgContentDD_SocialShare_AutoPush extends JPlugin
{
	protected $app;

	public function onContentAfterSave($context, $article, $isNew)
	{
		// todo
	}
}
