<?php
namespace Webit\Bundle\StatusBundle\Component\Handler;
use Webit\Bundle\StatusBundle\Status\StatusRequestInterface;

interface StatusHandlerInterface {
	public function changeStatus(StatusRequestInterface $statusRequest);
}
?>
