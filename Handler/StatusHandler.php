<?php
namespace Webit\Bundle\StatusBundle\Component\Handler;
use Webit\Bundle\StatusBundle\Status\Event;

use Webit\Bundle\StatusBundle\Status\Events;
use Webit\Bundle\StatusBundle\Status\StatusRequestInterface;

class StatusHandler extends ContainerAware implements StatusHandlerInterface {
	public function changeStatus(StatusRequestInterface $statusRequest) {
		$ed = $this->container->get('kernel.event_dispatcher');
		
		$preEvent = new Event($statusRequest);
		$ed->dispatch(Events::EVENT_PRE_STATUS_CHANGE,$preEvent);
		if($preEvent->getCancel() == true) {
			return true;
		}
		
		$changeEvent = new Event($statusRequest);
		$ed->dispatch(Events::EVENT_STATUS_CHANGE,$changeEvent);
		
		$postEvent = new Event($statusRequest);
		$ed->dispatch(Events::EVENT_POST_STATUS_CHANGE,$postEvent);
	}
}
?>
