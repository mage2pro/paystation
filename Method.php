<?php
namespace Dfe\Paystation;
// 2017-04-10
final class Method extends \Df\PaypalClone\Method {
	/**
	 * 2017-04-10
	 * @override
	 * @see \Df\Payment\Method::amountLimits()
	 * @used-by \Df\Payment\Method::isAvailable()
	 * @return null
	 */
	protected function amountLimits() {return null;}
}