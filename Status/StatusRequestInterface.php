<?php
namespace Webit\Bundle\StatusBundle\Status;
use Webit\Bundle\StatusBundle\Subject\StatusAwareInterface;

interface StatusRequestInterface {
	/**
	 * @return StatusAwareInterface|null
	 */
	public function getSubject();
	
	/**
	 * Required status
	 * @return StatusInterface
	 */
	public function getStatus();
	
	/**
	 * Status type
	 * @return mixed
	 */
	public function getType();
	
	/**
	 * Misc request data
	 * @return array
	 */
	public function getMisc();
}
?>
