<?php
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

///define('AJAX_SCRIPT', true);

require_once('../../config.php');
require_once(__DIR__."/block_tcgfeed.php");

//require_login(0,false);

$fn=optional_param('fn',null,PARAM_RAW);

if($fn)
{
   $fn();
}
else
{
   print "";
}

function update_sector()
{
   $sector=optional_param('sector','',PARAM_TEXT);
   $session=optional_param('session','',PARAM_RAW_TRIMMED);
   $user=optional_param('user',0,PARAM_INT);

   global $USER,$DB,$SESSION;

   if($user)
   {
       $USER=core_user::get_user($user);
   };

   if($USER
      and strpos(get_config('block_tcgfeed','sectorlist'),"$sector")!==FALSE)
   {
       set_user_preference('tcgfeed_preferred_sector',$sector,$user);
       print block_tcgfeed::buildcontents();
   }
   else
   {
       print "failed";
   }
}
