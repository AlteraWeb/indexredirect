<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=index.first
Order=1
[END_COT_EXT]
==================== */

$redirect_setting = array();
$sett = explode("|", $cfg["plugin"]["indexredirect"]["dirs"]);
foreach ($sett as $s){
    $_sett = explode(" ", $s);
  $redirect_setting[$_sett[0]] = $_sett[1];
}

if($cfg["plugin"]["indexredirect"]["state"] == 1){
    
    if(!empty($redirect_setting[$usr["maingrp"]])){
        cot_redirect(cot_url($redirect_setting[$usr["maingrp"]]));
    }
}