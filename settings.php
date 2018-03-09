<?php
/**
 *
 * block_tcgfeed is distributed as GPLv3 software, and is provided free of charge without warranty.
 * A full copy of this licence can be found @
 * http://www.gnu.org/licenses/gpl.html
 *
 *
 * @package block_tcgfeed
 * @author Thomas Worthington
 * @copyright © 2018 University of London. All rights reserved.
 * @version 20180129
 */

global $CFG;

$settings->add(new admin_setting_configcheckbox('block_tcgfeed/bounce',
                                                get_string('bounce','block_tcgfeed'),
                                                get_string('bounce_description','block_tcgfeed'),
                                                1));

$settings->add(new admin_setting_configtext('block_tcgfeed/feedurl',get_string('feedurl','block_tcgfeed'),get_string('feedurl_description','block_tcgfeed'),'',PARAM_URL));

$settings->add(new admin_setting_configpasswordunmask('block_tcgfeed/feedpassword',get_string('feedpassword','block_tcgfeed'),get_string('feedpassword_description','block_tcgfeed'),"",PARAM_RAW,64));

$settings->add(new admin_setting_configtextarea('block_tcgfeed/sectorlist',
                                                get_string('sectorlist','block_tcgfeed'),
                                                get_string('sectorlist_description','block_tcgfeed'),'',PARAM_TEXT));

$settings->add(new admin_setting_configtextarea('block_tcgfeed/locationlist',get_string('locationlist','block_tcgfeed'),get_string('locationlist_description','block_tcgfeed'),"",PARAM_TEXT));

$settings->add(new admin_setting_configduration('block_tcgfeed/feedcutoff',get_string('feedcutoff','block_tcgfeed'),get_string('feedcutoff_description','block_tcgfeed'),7*86400,86400));

$settings->add(new admin_setting_configtext_with_maxlength ('block_tcgfeed/listsize',get_string('listsize','block_tcgfeed'),get_string('listsize_description','block_tcgfeed'),"150",PARAM_INT,3,3));
