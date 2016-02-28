<?php 

namespace ImEx\Models\Repositories;

use ImEx\Models\Entities\Products\Product;
use ImEx\Models\Entities\Countries\Country;
use ImEx\Models\Entities\Steps\Step;

class StepsRepository {
	public function getStepsForImport(Product $product, Country $country) {
		return [];
	}

	public function getStepsForExport(Product $product, Country $country) {
		return [];
	}
}