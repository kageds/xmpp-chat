<?php

$tpl = erLhcoreClassTemplate::getInstance( 'lhxmppservice/index.tpl.php');
$Result['content'] = $tpl->fetch();
$Result['path'] = array(array('title' => erTranslationClassLhTranslation::getInstance()->getTranslation('xmppservice/module','XMPP Service')))

?>