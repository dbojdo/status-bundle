<?php
namespace Webit\Bundle\StatusBundle\Subject;
use Webit\Bundle\StatusBundle\Status\StatusInterface;

interface StatusAwareInterface {
	/**
   * @return StatusInterface|int
	 */
	public function getStatus($type=null);
	
	/**
	 * 
	 * @param StatusInterface $status
	 * @param string $type
	 */
	public function setStatus(StatusInterface $status, $type=null);
}
?>
