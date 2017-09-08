<?php

class Car {
	public $manufacturer;
	public $model;
	public $color;
	private $price;
	public $power;
	private $discount = 0;

	public function __construct($manufacturer, $model, $color, $price) {
		$this->manufacturer = $manufacturer;
		$this->model = $model;
		$this->color = $color;
		$this->price = $price;
	}

	public function changePrice ($newprice) {
		$this->price = $newprice;
	}
	public function setDiscount ($newdiscount) {
		$this->discount = $newdiscount;
	}
	public function getPrice () {
		return $this->price;
	}
	public function getPriceWithDiscount () {
		return $this->price - ($this->price/100*$this->discount);
	}
}

class Tv {
	public $manufacturer;
	public $model;
	private $price;
	public $diagonal;
	private $discount = 0;

	public function __construct($manufacturer, $model, $diagonal, $price) {
		$this->manufacturer = $manufacturer;
		$this->model = $model;
		$this->diagonal = $diagonal;
		$this->price = $price;
	}

	public function changePrice ($newprice) {
		$this->price = $newprice;
	}
	public function setDiscount ($newdiscount) {
		$this->discount = $newdiscount;
	}
	public function getPrice () {
		return $this->price;
	}
	public function getPriceWithDiscount () {
		return $this->price - ($this->price/100*$this->discount);
	}
}

class Pen {
	public $manufacturer;
	public $model;
	private $price;
	public $color;
	private $discount = 0;

	public function __construct($manufacturer, $model, $color, $price) {
		$this->manufacturer = $manufacturer;
		$this->model = $model;
		$this->color = $color;
		$this->price = $price;
	}

	public function changePrice ($newprice) {
		$this->price = $newprice;
	}
	public function setDiscount ($newdiscount) {
		$this->discount = $newdiscount;
	}
	public function getPrice () {
		return $this->price;
	}
	public function getPriceWithDiscount () {
		return $this->price - ($this->price/100*$this->discount);
	}
}

class Duck {
	public $kind = 'Anas';
	public $subspecies = 'Anas melleri';
	public $gender;
	public $color;
	public static $sound = 'Quack-quack!';

	public function sex_change () {
		if ($this->gender == 'male') {
			$this->gender = 'female';}
		elseif ($this->gender == 'female') {
			$this->gender == 'male';
		} else {$this->gender == 'female';}
	}	
}

class Product {
	public $category;
	public $manufacturer;
	public $model;
	public $size;
	private $price;
	private $discount = 0;

	public function __construct($manufacturer, $model, $category, $size, $price) {
		$this->manufacturer = $manufacturer;
		$this->model = $model;
		$this->category = $category;
		$this->size = $size;
		$this->price = $price;
	}

	public function changePrice ($newprice) {
		$this->price = $newprice;
	}
	public function setDiscount ($newdiscount) {
		$this->discount = $newdiscount;
	}
	public function getPrice () {
		return $this->price;
	}
	public function getPriceWithDiscount () {
		return $this->price - ($this->price/100*$this->discount);
	}
}

$audi = new Car('Audi', 'A7', 'Black', 10000);
$toyota = new Car('Toyota', 'Camry', 'Red', 7500);

$audi->power = '500hp';
$audi->setDiscount (15);

$toyota->power = '300hp';
$toyota->setDiscount (20);

$hisense = new Tv('Hisense', 'LTDN50K2204WT', '50"', 500);
$philips = new Tv('Philips', '43PFT4001', '43"', 400);

$hisense->setDiscount (20);

$philips->setDiscount (10);

$erichcrause = new Pen ('Erich Crause', 'es5020', 'black', 1);
$stabilo = new Pen ('Stabilo', 'sx1150', 'blue', .70);

$duck_one = new Duck ();
$duck_two = new Duck ();

$duck_one->color = 'white';
$duck_one->sex_change ();

$duck_two->color = 'brown';
$duck_two->gender = 'male';

$shoes = new Product ('Nike', 'xxx', 'shoes', '39', 50);
$t_short = new Product ('Cropp', 'Cropp', 'T-short', 'S', 10);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Netology Lesson 9</title>
</head>
<body>
	<div style="width: 80%; margin: 0 auto;">
		<h2>Нетология > PHP > урок 9</h2>
		<p><strong>1. </strong>Инкапсуляция - сокрытие свойств (переменных) или методов (встроенных функции) внутри экземпляра класса (объекта), в котором эти свойства/методы были описаны. Таким образом, мы имеем возможность создавать бесконечное множество объектов, описанных классом, не зависящих друг от друга.</p>
		<p><strong>2. </strong> Плюсы объектов - более читаемый код, быстрое создание объектов при помощи магической функции __construct, защита свойств объектов средствами инкапсуляции. Минусы - иногда сложное создание/описание класса, при дальнейшей работе с объектами класса - необходимсть помнить все его свойства и методы.</p>
		<pre>
			<?php
				print_r($audi);
				print_r($toyota);
				echo '<br>';
				print_r($hisense);
				print_r($philips);
				echo '<br>';
				print_r($erichcrause);
				print_r($stabilo);
				echo '<br>';
				print_r($duck_one);
				print_r($duck_two);
				echo '<br>';
				print_r($shoes);
				print_r($t_short);
			?>
		</pre>
		<?php echo $audi->getPrice (); ?>
		<br>
		<?php echo $audi->getPriceWithDiscount (); ?>
	</div>
</body>
</html>

