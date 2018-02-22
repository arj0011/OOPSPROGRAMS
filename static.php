<?php
/**
* ## Static Variabl: Static variables value is persist during object creation. 
*    They can access by both class with scop resolution operator and object of class too. 
*	 You cannot access them by using $this you have to use :: operator.
*/
class Student{
	public static $rno=103;
	public static $name='vkas';
	public static $marks=555;
	
	public  $rno1=104;
	public  $name1='andy';
	public  $marks1=596;
	
	public function setdata($rno,$name,$marks){
		Student::$rno = $rno;
		Student::$name = $name;
		Student::$marks = $marks;
		
		$this->rno1 = $rno;
		$this->name1 = $name;
		$this->marks1 = $marks;
	}
	
	public function getdata(){
		echo '<pre>';
		echo 'Strudent Data :-<br/>';
		echo 'Student RNO. - '.Student::$rno.'<br/>';
		echo 'Student Name. - '.Student::$name.'<br/>';
		echo 'Student Marks. - '.Student::$marks.'<br/>';
		
		echo 'Student1 RNO. - '.$this->rno1.'<br/>';
		echo 'Student1 Name. - '.$this->name1.'<br/>';
		echo 'Student1 Marks. - '.$this->marks1.'<br/>';
	}
}

//Student::getdata();
$ob = new Student;
$ob->getdata();

$ob1 = new Student;
$ob1->setdata(101,'Arjun',600);
$ob1->getdata();

$ob2 = new Student;
$ob2->getdata();
?>
