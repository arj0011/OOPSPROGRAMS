<?php
class Student{
	protected $rno;
	protected $name;
	protected $marks;
	
	public function setdata($rno,$name,$marks){
		$this->rno = $rno;
		$this->name = $name;
		$this->marks = $marks;
	}
	
	public function getallproperty(){
		echo '<pre>';
		echo 'Strudent Data :-<br/>';
		echo 'Student RNO. - '.$this->rno.'<br/>';
		echo 'Student Name. - '.$this->name.'<br/>';
		echo 'Student Marks. - '.$this->marks.'<br/>';
	}
}

class StudentProperty extends Student{
	private $color;
	private $height;
	private $weight;
	
	public function setproperty($color,$height,$weight){
		$this->color = $color;
		$this->height = $height;
		$this->weight = $weight;
	}
	
	public function getallproperty(){
		echo '<pre>';
		echo 'Strudent Data :-<br/>';
		echo 'Student RNO. - '.$this->rno.'<br/>';
		echo 'Student Name. - '.$this->name.'<br/>';
		echo 'Student Marks. - '.$this->marks.'<br/>';
		echo 'Student Color. - '.$this->color.'<br/>';
		echo 'Student Height. - '.$this->height.'<br/>';
		echo 'Student Weight. - '.$this->weight.'<br/>';
	}
}

$ob = new StudentProperty;
$ob->setdata(101,'Arjun',600);
$ob->setproperty('faire',5.9,83);
$ob->getallproperty();

?>
