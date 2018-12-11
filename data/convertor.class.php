<?php
	/**
	 * 
	 */
	class Convertor {
		
		private $from, $to, $value;

		function __construct($from, $to) {
			$this->from = $from;
			$this->to = $to;
			$this->convert();
		}

		public function getTo()	{
			return $this->to;
		}

		public function getFrom()	{
			return $this->from;
		}

		public function getJSON()	{
			$url = 'https://api.exchangeratesapi.io/latest?symbols=' . $this->to . '&base=' . $this->from;
			return file_get_contents($url);
		}

		private function convert() {
			$values = json_decode($this->getJSON());
			$to = $this->getTo();
			$this->value = $values->rates->$to;
		}

		public function getValue()	{
			return $this->value;
		}

		public function calc($value) {
			return ($this->value * $value);
		}
	}
?>