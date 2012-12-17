<?php
namespace Webit\Bundle\StatusBundle\Status;
use Webit\Bundle\StatusBundle\Subject\StatusableInterface;

interface StatusRequestInterface {
	/**
	 * Subject ID
	 * @return mixed
	 */
	public function getId();
	
	/**
	 * New status ID
	 * @return mixed
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
	
	/**
	 * @return StatusableInterface|null
	 */
	public function getSubject();	
	
	/**
	 * Used by SubjectProvider
	 * @param StatusableInterface $subject
	 */
	public function setSubject(StatusableInterface $subject)
}
?>
