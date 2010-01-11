<?php
if (!defined ('TYPO3_MODE')) die('Access denied.');

$TYPO3_CONF_VARS['EXTCONF']['comments']['form']['comments_jquery'] = 'EXT:comments_jquery/class.tx_commentsjquery.php:&tx_commentsjquery->formHook';

?>
