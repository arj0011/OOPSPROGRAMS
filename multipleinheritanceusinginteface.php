<?php
interface clg{
	const clg_name = 'SVIM'; 
}

interface students{
	const student = 'Arjun'; 
}

interface dept extends clg,students{
	const deptn = 'MCA'; 
	const std = students::student;
	public function show();
	public function dis();
}


class myclass implements dept {
	public function show(){
		echo 'Clg = '.myclass::clg_name.'<br />';
		echo 'student = '.myclass::student.'<br/>';
		echo 'dept = '.myclass::deptn.'<br/>';
	}
	public function dis(){
		//echo 'method name is display'.'<br/>';
		echo myclass::std;
	}
} 
$obj = new myclass;
$obj->show();
myclass::dis();
?>