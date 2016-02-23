<?php 

namespace ImEx\Models\Entities\Process;


class RiceBrProcess extends Process {

	public function import() {
		return "imported";
	}

	public function export() {
		return "exported";
	}

}