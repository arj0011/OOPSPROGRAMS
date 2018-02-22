<?php
abstract class camera{
	abstract public function mpixel($param);
}
abstract class facerecognition{
	abstract public function facereading($param);
}
abstract class phone extends camera{
	const mobile = 'Mobile';
	public function call($param){
		echo 'Call from .'.$param.' '.phone::mobile.' <br />';
	}
	
	public function msg($param){
		echo 'Msg from .'.$param.' <br />';
	}
	
	abstract public function size($param);
}

class iphone6 extends phone,facerecognition {
	public function size($param){
		echo $param.' size is 256X256'.'<br/>';
	}
	public function mpixel($param){
		echo $param.' mega pixel'.'<br/>';
	}
} 

class iphone7 extends phone {
	public function size($param){
		echo $param.' size is 256X256'.'<br/>';
	}
	public function mpixel($param){
		echo $param.' mega pixel'.'<br/>';
	}
} 
//call iphone6 methods
iphone6::call('iphone6');
iphone6::msg('iphone6');
iphone6::size('iphone6');
iphone6::mpixel('13');
//call iphone7 methods
iphone7::call('iphone7');
iphone7::msg('iphone7');
iphone7::size('iphone7');
iphone7::mpixel('18');
?>