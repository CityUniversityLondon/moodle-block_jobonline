<?php
/**
 *
 * block_jobonlinesecondary is distributed as GPLv3 software, and is provided free of charge without warranty.
 * A full copy of this licence can be found @
 * http://www.gnu.org/licenses/gpl.html
 *
 *
 * @package block_jobonlinesecondary
 * @author Thomas Worthington
 * @copyright © 2018 University of London. All rights reserved.
 * @version 20180129
 */

global $CFG;

$settings->add(new admin_setting_configcheckbox('block_jobonlinesecondary/bounce',
                                                get_string('bounce','block_jobonlinesecondary'),
                                                get_string('bounce_description','block_jobonlinesecondary'),
                                                1));

$settings->add(new admin_setting_configtext('block_jobonlinesecondary/feedurl',get_string('feedurl','block_jobonlinesecondary'),get_string('feedurl_description','block_jobonlinesecondary'),'',PARAM_URL));

$settings->add(new admin_setting_configpasswordunmask('block_jobonlinesecondary/feedusername',get_string('feedusername','block_jobonlinesecondary'),get_string('feedusername_description','block_jobonlinesecondary'),"",PARAM_RAW,64));

$settings->add(new admin_setting_configpasswordunmask('block_jobonlinesecondary/feedpassword',get_string('feedpassword','block_jobonlinesecondary'),get_string('feedpassword_description','block_jobonlinesecondary'),"",PARAM_RAW,64));

$settings->add(new admin_setting_configtextarea('block_jobonlinesecondary/sectorlist',
                                                get_string('sectorlist','block_jobonlinesecondary'),
                                                get_string('sectorlist_description','block_jobonlinesecondary'),'',PARAM_TEXT));

$settings->add(new admin_setting_configtextarea('block_jobonlinesecondary/locationlist',get_string('locationlist','block_jobonlinesecondary'),get_string('locationlist_description','block_jobonlinesecondary'),"",PARAM_TEXT));

$settings->add(new admin_setting_configduration('block_jobonlinesecondary/feedcutoff',get_string('feedcutoff','block_jobonlinesecondary'),get_string('feedcutoff_description','block_jobonlinesecondary'),7*86400,86400));

$settings->add(new admin_setting_configtext_with_maxlength ('block_jobonlinesecondary/listsize',get_string('listsize','block_jobonlinesecondary'),get_string('listsize_description','block_jobonlinesecondary'),"150",PARAM_INT,3,3));
