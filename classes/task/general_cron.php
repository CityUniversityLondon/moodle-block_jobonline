<?php

namespace block_tcgfeed\task;

class general_cron extends \core\task\scheduled_task
{
    public function get_name()
    {
        // Shown in admin screens
        return get_string('general_cron', 'block_tcgfeed');
    }

    public function execute()
    {
        require_once(__DIR__.'/../../block_tcgfeed.php');
        \block_tcgfeed::readfeed();
    }
}