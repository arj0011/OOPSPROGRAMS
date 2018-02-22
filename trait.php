<?php
/**
* ## Trait : It provides reuse code features in language like php who support only single inheritnce. 
* ## Namespace : It is used to remove name collision between our code and php internal classes and interface
*                and functions.
* ## Use : It is used to import and aliasing. 
*/
namespace A{
	trait mytrait{
		function sayhello(){
			echo 'Hello from mytrait <br/>';
		}
	}
	trait yourtrait{
		function sayworld(){
			echo 'World from yourtrait <br/>';
		}
	}
}
namespace {
	class base{
		function sayhello(){
			echo 'Hello from base <br/>';
		}
	}
	class myclass extends base{
		use A\mytrait;
		use A\yourtrait;
		function myfun(){
			parent::sayhello();
		}
	}

	$obj = new myclass;
	$obj->sayhello();
	$obj->sayworld();
	$obj->myfun();
}





?>