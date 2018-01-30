<?php
/**
 * Version details
 *
 * @package    tcgfeed
 * @copyright  2018 onwards University of London
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname']='TCG Opportunities Block';
$string['pluginnameplural'] = 'TCG Opportunities Blocks';

$string['feedurl']='Jobs Feed Url';
$string['feedurl_description']='The full url of the jobs feed, including the "HTTP" or "HTTPS" part.';

$string['feedpassword']='Password for job feed.';
$string['feedpassword_description']='This should be the raw text, not the base64 version.';

$string['sectorlist']='List of Sectors';
$string['sectorlist_description']="List of business areas which can be selected in the block's filter. Options should be separated by a | character. There should be no | at the start or end of the list.";

$string['typelist']='List of opportunity types';
$string['typelist_description']="List of opportunity types which can be selected in the block's filter. Options should be separated by a | character. There should be no | at the start or end of the list.";

$string['listsize']='Maximum number of jobs';
$string['listsize_description']='The maximum number of jobs to show in the block. 0 means to show all matching jobs (not recommended).';
