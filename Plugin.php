<?php

namespace Kanboard\Plugin\Done_column_highlight;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
	$this->template->hook->attach('template:project:integrations', 'done_column_highlight:project/integration');
	$this->template->hook->attach('template:config:integrations', 'done_column_highlight:config/integration');
        $this->template->hook->attach('template:layout:head', 'done_column_highlight:layout/head');
    }

    public function getPluginName()
    {
        return 'Done_column_highlight';
    }

    public function getPluginDescription()
    {
        return t('Done column highlighting as per #1540');
    }

    public function getPluginAuthor()
    {
        return 'CoMPa Technology';
    }

    public function getPluginVersion()
    {
        return '0.0.1';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/CoMPaTech/kanboard_plugin-done_column_highlight.git';
    }
}
