<?php


namespace Db\Adapter\Exception;

use Db\Exception;

class InvalidConnectionParametersException extends RuntimeException implements ExceptionInterface
{

	/**
	 * @var array
	 */
	protected $parameters;

	/**
	 * @param string $message
	 * @param array $parameters
	 */
	public function __construct($message, $parameters)
	{
		parent::__construct($message);
		$this->parameters = $parameters;
	}
}
