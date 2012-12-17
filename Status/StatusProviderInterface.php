<?php
namespace Webit\Bundle\StatusBundle\Status;

interface StatusProviderInterface {
	public function getStatus($statusCode, $statusType = null);
}
?>
