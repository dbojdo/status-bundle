<?php
namespace Webit\Bundle\StatusBundle\Subject;

interface SubjectProviderInterface {
	/**
	 * 
	 * @param mixed $id
	 * @return StatusAwareInterface|null
	 */
	public function getSubject($id);
}
?>
