<?php

require_once DIR . 'Factorys/Exporter/ExporterProduct.php';

class ExporterProductCsv extends ExporterProduct {

	public function serializeObj(&$data) : string {
		$lines = array();
		foreach ($data as $i => $p) {
			$product = new Product($p['recordNumber'], $p['description'], $p['id']);
			$attrs = $product->getAttributes();
			unset($attrs['id']);

			$lines[0] = implode(';', array_keys($attrs)) . ';' . PHP_EOL;
			$lines[$i + 1] = '';

			foreach($attrs as $property => $value) {
				$lines[$i + 1] .= $value . ';';
			}

			$lines[$i + 1] .= PHP_EOL;
		}

		$csv = implode($lines);
		return $csv;
	}
}