<?php
interface A{
	public function methodA($a,$b); 
}

interface B{
	public function methodB($a,$b);
}

class myclass implements A,B {
	public function methodA($a,$b){
		echo 'Addition of a and b is = '.($a + $b).'<br />';
	}
	
	public function methodB($a,$b){
		echo 'Multiplication of a and b is = '.($a * $b);
	}
} 
$obj = new myclass;
$obj->methodA(10,20);
$obj->methodB(10,20);
?>