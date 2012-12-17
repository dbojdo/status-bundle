<?php
namespace Webit\Bundle\StatusBundle\Subject;

interface SubjectProviderInterface {
	/**
	 * 
	 * @param mixed $id
	 * @return StatusableInterface|null
	 */
	public function getSubject($id);
}
?>
