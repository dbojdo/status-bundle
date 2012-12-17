<?php
namespace Webit\Bundle\StatusBundle\Subject;

interface StatusableInterface {
	/**
   * @return StatusInterface
	 */
	public function getStatus($type=null);
}
?>
