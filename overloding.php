<?php
class Student{
	public $rno;
	public $name;
	public $marks;
	public $height;
	public $weight;
	
	public function setdata($rno,$name,$marks){
		$this->rno = $rno;
		$this->name = $name;
		$this->marks = $marks;
	}
	
	public function setdata($height,$weight,$d=null){
		$this->height = $height;
		$this->weight = $weight;
	}
	
	public function getdata(){
		echo '<pre>';
		echo 'Strudent Data :-<br/>';
		echo 'Student RNO. - '.$this->rno.'<br/>';
		echo 'Student Name. - '.$this->name.'<br/>';
		echo 'Student Marks. - '.$this->marks.'<br/>';
		echo 'Student Height. - '.$this->height.'<br/>';
		echo 'Student Weight. - '.$this->weight.'<br/>';
	}
}

$ob = new Student;
$ob->setdata(101,'Arjun',600);
$ob->setdata(5.9,83);
$ob->getdata();

?>
