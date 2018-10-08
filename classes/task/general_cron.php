<?php

namespace block_jobonlinesecondary\task;

class general_cron extends \core\task\scheduled_task
{
    public function get_name()
    {
        // Shown in admin screens
        return get_string('general_cron', 'block_jobonlinesecondary');
    }

    public function execute()
    {
        require_once(__DIR__.'/../../block_jobonlinesecondary.php');
        \block_jobonlinesecondary::readfeed();
    }
}
