<?php
namespace Webit\Bundle\StatusBundle\Status;
use JMS\Serializer\Annotation as JMS;

class Status implements StatusInterface {
	/**
	 * 
	 * @var mixed
	 * @JMS\Type("string")
	 * @JMS\Groups("status")
	 */
	protected $id;

	/**
	 * 
	 * @var string
	 * @JMS\Type("string")
	 * @JMS\Groups("status")
	 */
	protected $name;

	public function __construct($id, $name) {
		$this->id = $id;
		$this->name = $name;
	}

	public function getId() {
		return $this->id;
	}

	public function getName() {
		return $this->name;
	}
}
?>
