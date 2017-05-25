<?php

namespace Dojo;

class Bin {
	public $books = array();
	public $prize = 8;

	public function addBook($book){
		array_push($this->books, $book);
	}

	public function getAmount() {
		return count($this->books);
	}

	public function getTypeAmount($book) {
		$countedBooks = 0;
		for($i = 0; $i < count($this->books); $i++) {
			if($this->books[$i] == $book) {
				$countedBooks++;
			}
		}
		return $countedBooks;
	}
	public function checkSingleValue(){
		return $this->prize;

	}
	public function checkValue($amount){
		if($amount < 4) $discount = ($amount - 1) * 5;
		else $discount = $amount * 5;
		return $discount;

	}
}

?>