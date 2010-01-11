<?php

class tx_commentsjquery {
	public function formHook(array &$params, tx_comments_pi1 &$pObj) {

		$params['markers']['###JS_USER_DATA###'] = '';
		return $params['markers'];
	}
}


if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/comments_jquery/class.tx_commentsjquery.php']) {
        include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/comments_jquery/class.tx_commentsjquery.php']);
}

?>
