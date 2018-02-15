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

$settings->add(new admin_setting_configtext('block_tcgfeed/feedurl',get_string('feedurl','block_tcgfeed'),get_string('feedurl_description','block_tcgfeed'),'',PARAM_URL));

$settings->add(new admin_setting_configpasswordunmask('block_tcgfeed/feedpassword',get_string('feedpassword','block_tcgfeed'),get_string('feedpassword_description','block_tcgfeed'),"",PARAM_RAW,64));

$settings->add(new admin_setting_configtextarea('block_tcgfeed/sectorlist',
                                                get_string('sectorlist','block_tcgfeed'),
                                                get_string('sectorlist_description','block_tcgfeed'),
                                                'academic research and higher education|accountancy and financial services|arts administration, libraries, museums and heritage|banking and investment|charities, ngos and international development|construction, the built environment and property|consultancy|energy, natural resources and the environment|engineering and materials science|health and social care|hospitality, leisure and tourism|human resources and recruitment|it, technology and telecommunications|law|logistics and distribution|manufacturing|pr, advertising, marketing and communications|performance and creative arts|policy and government|publishing and journalism|retail and wholesale activities|scientific r&d and analysis|security and intelligence|social and market research|sport and fitness |teaching and other educational activities|translation|veterinary activities'
                                                ,PARAM_TEXT));

$settings->add(new admin_setting_configtextarea('block_tcgfeed/typelist',get_string('typelist','block_tcgfeed'),get_string('typelist_description','block_tcgfeed'),"graduate scheme|permanent|fixed term|graduate internship|summer internship|placement|year in industry|casual work|insights programme|part-time|training/professional training",PARAM_TEXT));

$settings->add(new admin_setting_configduration('block_tcgfeed/feedcutoff',get_string('feedcutoff','block_tcgfeed'),get_string('feedcutoff_description','block_tcgfeed'),7*86400,86400));

$settings->add(new admin_setting_configtext_with_maxlength ('block_tcgfeed/listsize',get_string('listsize','block_tcgfeed'),get_string('listsize_description','block_tcgfeed'),"150",PARAM_INT,3,3));