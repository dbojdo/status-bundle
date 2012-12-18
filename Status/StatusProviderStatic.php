<?php
namespace Webit\Bundle\StatusBundle\Status;

class StatusProviderStatic implements StatusProviderInterface {
	protected $statusList = array(
		'_default' => array()
	);
	
	public function getStatus($statusCode, $statusType = null) {
		$statusType = $statusType ?: '_default';
		if(key_exists($statusType, $this->statusList)) {
			if(key_exists($statusCode, $this->statusList[$statusType])) {
				if(!($this->statusList[$statusType][$statusCode] instanceof StatusInterface)) {
					$this->statusList[$statusType][$statusCode] = new Status($statusCode,$this->statusList[$statusType][$statusCode]);
				}
				
				return $this->statusList[$statusType][$statusCode]; 
			} 
		}
		
		return null;
	}
}
?>
