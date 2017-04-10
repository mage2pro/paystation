<?php
namespace Dfe\Paystation\Signer;
// 2017-04-10
final class Response extends \Dfe\Paystation\Signer {
	/**
	 * 2017-04-10
	 * @override
	 * @see \Dfe\Paystation\Signer::values()
	 * @used-by \Dfe\Paystation\Signer::sign()
	 * @return string[]
	 */
	protected function values() {return dfa_select_ordered($this->v(), []);}
}