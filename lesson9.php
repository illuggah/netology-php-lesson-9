<?php

class Car {
	public $manufacturer = null;
	public $model = null;
	public $color = null;
	private $price = 100;
	public $power = null;
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
	public function changeDiscount ($newdiscount) {
		$this->discount = $newdiscount;
	}
	public function getPrice () {
		echo $this->price;
	}
	public function getPriceWithDiscount () {
		echo $this->price - ($this->price/100*$this->discount);
	}
}

class Tv {
	public $manufacturer = null;
	public $model = null;
	private $price = null;
	public $diagonal = null;
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
	public function changeDiscount ($newdiscount) {
		$this->discount = $newdiscount;
	}
	public function getPrice () {
		echo $this->price;
	}
	public function getPriceWithDiscount () {
		echo $this->price - ($this->price/100*$this->discount);
	}
}

class Pen {
	public $manufacturer = null;
	public $model = null;
	private $price = null;
	public $color = null;
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
	public function changeDiscount ($newdiscount) {
		$this->discount = $newdiscount;
	}
	public function getPrice () {
		echo $this->price;
	}
	public function getPriceWithDiscount () {
		echo $this->price - ($this->price/100*$this->discount);
	}
}

class Duck {
	public $kind = 'Anas';
	public $subspecies = 'Anas melleri';
	public $gender = null;
	public $color = null;
	public $what_say = 'Quack-quack!';

	public function sex_change () {
		if ($this->gender == 'male') {
			$this->gender = 'female';}
		elseif ($this->gender == 'female') {
			$this->gender == 'male';
		} else {$this->gender == 'female';}
	}	
}

class Product {
	public $category = null;
	public $manufacturer = null;
	public $model = null;
	public $size = null;
	private $price = null;
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
	public function changeDiscount ($newdiscount) {
		$this->discount = $newdiscount;
	}
	public function getPrice () {
		echo $this->price;
	}
	public function getPriceWithDiscount () {
		echo $this->price - ($this->price/100*$this->discount);
	}
}

$audi = new Car('Audi', 'A7', 'Black', 10000);
$toyota = new Car('Toyota', 'Camry', 'Red', 7500);

$audi->power = '500hp';
$audi->changeDiscount (15);

$toyota->power = '300hp';
$toyota->changeDiscount (20);

$hisense = new Tv('Hisence', 'LTDN50K2204WT', '50"', 500);
$philips = new Tv('Philips', '43PFT4001', '43"', 400);

$hisense->changeDiscount (20);

$philips->changeDiscount (10);

$erichcrause = new Pen ('Erich Crause', 'es5020', 'black', 1);
$stabilo = new Pen ('Stabilo', 'sx1150', 'blue', .70);

$duck_one = new Duck ();
$duck_two = new Duck ();

$duck_one->color = 'white';
$duck_one->sex_change;

$duck_two->color = 'brown';
$duck_two->gender = 'male';

$shoes = new Product ('Nike', 'xxx', 'shoes', '39', 50);
$t_short = new Product ('Cropp', 'Cropp', 'T-short', 'S', 10);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Netology Lesson 8</title>
</head>
<body>
	<div style="width: 80%; margin: 0 auto;">
		<h2>Нетология > PHP > урок 8</h2>
		<p><strong>1. </strong>Инкапсуляция - сокрытие свойств (переменных) или методов (встроенных функции) внутри экземпляра класса (объекта), в котором эти свйства/методы были описаны. Таким образом, мы имеем возможность создавать бесконечное множество объектов, описанных классом, не зависящих друг от друга.</p>
		<p><strong>2. </strong> Плюсы объектов - более читаемый код, быстрое создание объектов при помощи магической функции __construct. Минусы - иногда сложное создание/описание класса, при дальнейшей работе с объектами класса - необходимсть помнить все его свойства и методы.</p>
		<pre>
			<?php print_r($audi);
				print_r($toyota);
			?>
		</pre>
		<?php $audi->getPrice (); ?>
		<br>
		<?php $audi->getPriceWithDiscount (); ?>
	</div>
</body>
</html>

