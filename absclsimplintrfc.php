<?php
/*An abstract class can implements an interface. */

interface A{
	public function show();
}
abstract class AB implements A{
	abstract public function dis();
}

class myclass extends AB {
	public function show(){
		echo 'interface method'.'<br/>';
	}
	
	public function dis(){
		echo 'abstract class method'.'<br/>';
	}
}

/* An interface can not extends abstract class. */
/*
abstract class AB {
	abstract public function dis();
}
interface A extends AB{
	public function show();
}
class myclass implements A {
	public function show(){
		echo 'interface method'.'<br/>';
	}
	
	public function dis(){
		echo 'abstract class method'.'<br/>';
	}
}
*/




 
 
myclass::show();
myclass::dis();
?>