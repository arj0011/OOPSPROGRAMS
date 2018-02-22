<?php
class Student{
	private $rno;
	private $name;
	private $marks;
	
	public function setdata($rno,$name,$marks){
		$this->rno = $rno;
		$this->name = $name;
		$this->marks = $marks;
	}
	
	public function getdata(){
		echo '<pre>';
		echo 'Strudent Data :-<br/>';
		echo 'Student RNO. - '.$this->rno.'<br/>';
		echo 'Student Name. - '.$this->name.'<br/>';
		echo 'Student Marks. - '.$this->marks.'<br/>';
	}
	 
}

$obj = new Student; 
$obj->setdata(101,'Arjun',600);
$obj->getdata();
$obj1 = new Student; 
$obj1->setdata(102,'Vikas',400);
$obj1->getdata();
$obj2 = new Student; 
$obj2->setdata(103,'Anand',700);
$obj2->getdata();
$obj3 = new Student; 
$obj3->setdata(104,'Ashish',500);
$obj3->getdata();

?>
