<?php
namespace Dfe\Paystation;
/**
 * 2017-04-10
 * @see \Dfe\Paystation\Signer\Request
 * @see \Dfe\Paystation\Signer\Response
 * @method Settings s()
 */
abstract class Signer extends \Df\PaypalClone\Signer {
	/**
	 * 2017-04-10
	 * @used-by sign()
	 * @see \Dfe\Paystation\Signer\Request::values()
	 * @see \Dfe\Paystation\Signer\Response::values()
	 * @return string[]
	 */
	abstract protected function values();

	/**
	 * 2017-04-10
	 * @override
	 * @see \Df\PaypalClone\Signer::sign()
	 * @used-by \Df\PaypalClone\Signer::_sign()
	 * @return string
	 */
	final protected function sign() {return implode($this->values());}
}