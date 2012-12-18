<?php
namespace Webit\Bundle\StatusBundle\Status;
use Webit\Bundle\StatusBundle\Subject\StatusAwareInterface;

class StatusRequest implements StatusRequestInterface {
	/**
	 *
	 * @var StatusAwareInterface
	 */
	protected $subject;

	/**
	 * 
	 * @var StatusInterface
	 */
	protected $status;

	/**
	 * 
	 * @var mixed
	 */
	protected $type;

	/**
	 * 
	 * @var array
	 */
	protected $misc;

	public function __construct(StatusAwareInterface $subject, StatusInterface $status, $type=null, $misc = array()) {
		$this->setSubject($subject);
		$this->setStatus($status);
		$this->setType($type);
		$this->setMisc($misc);
	}

	public function getStatus() {
		return $this->status;
	}

	public function setStatus(StatusInterface $status) {
		$this->status = $status;
	}

	public function getType() {
		return $this->type;
	}

	public function setType($type) {
		$this->type = $type;
	}

	public function getMisc() {
		return $this->misc;
	}

	public function setMisc($misc) {
		$this->misc = $misc;
	}

	public function getSubject() {
		return $this->subject;
	}

	public function setSubject(StatusAwareInterface $subject) {
		$this->subject = $subject;
	}
}
?>
