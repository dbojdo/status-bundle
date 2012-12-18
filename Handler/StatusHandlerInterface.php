<?php
namespace Webit\Bundle\StatusBundle\Handler;
use Webit\Bundle\StatusBundle\Status\StatusRequestInterface;

interface StatusHandlerInterface {
	public function changeStatus(StatusRequestInterface $statusRequest);
}
?>
