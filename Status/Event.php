<?php
namespace Webit\Bundle\StatusBundle\Status;

use Symfony\Component\EventDispatcher\Event as BaseEvent;

class Event extends BaseEvent {	
	/**
   * @var StatusRequestInterface
	 */
	protected $statusRequest;
	
	/**
	 * 
	 * @var bool
	 */
	protected $cancel = false;

	/**
	 * 
	 * @return boolean
	 */
	public function getCancel() {
		return $this->cancel;
	}

	public function setCancel($cancel) {
		$this->cancel = $cancel;
	}
	
	/**
	 * 
	 * @return \Webit\Bundle\StatusBundle\Status\StatusRequestInterface
	 */
	public function getStatusRequest() {
		return $this->statusRequest;
	}
	
	/**
	 * 
	 * @param StatusRequestInterface $statusRequest
	 */
	public function __construct(StatusRequestInterface $statusRequest) {
		$this->statusRequest = $statusRequest;
	}
}
?>
