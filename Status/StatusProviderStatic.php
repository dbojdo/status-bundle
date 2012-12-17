<?php
namespace Webit\Bundle\StatusBundle\Status;

class StatusProviderStatic implements StatusProviderInterface {
	protected $statusList = array(
		'_default' => array()
	);
	
	public function getStatus($statusCode, $statusType = null) {
		$statusType = $statusType ?: '_default';
		if(key_exists($statusType, static::$statusList)) {
			return key_exists($statusCode,static::$statusList[$statusType]) ? static::$statusList[$statusType][$statusCode] : null;
		}
	}
}
?>