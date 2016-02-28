<?php 

namespace ImEx\Models\Entities\Rules;

use Exception;

class UncheckedRuleException extends Exception {

	public function __construct($message) {
        parent::__construct($message);
    }

}