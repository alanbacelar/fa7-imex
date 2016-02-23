<?php 

namespace ImEx\Models\Entities\Process;

class Process implements Contracts\ProcessContract {
	
	public function import() {
		return "imported";
	}

	public function export() {
		return "exported";
	}

}