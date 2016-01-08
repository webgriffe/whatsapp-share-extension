<?php

class Webgriffe_WhatsAppShare_Helper_Data extends Mage_Core_Helper_Abstract
{
	const CONFIG_ENABLED 			= 'webgriffe_whatsappshare/general/enabled';
	const CONFIG_MESSAGE 			= 'webgriffe_whatsappshare/general/message';

	protected $_cmsPageUrl = false;

	public function isEnabled()
	{
		return (Mage::getStoreConfig(self::CONFIG_ENABLED) == '1' && $this->getMessage() != false);
	}

	public function getMessage()
	{
		$msg = trim(Mage::getStoreConfig(self::CONFIG_MESSAGE));
		if ($msg == '')
		{
			return false;
		}
		return $msg;
	}
}