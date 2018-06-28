<?php 
	use PHPUnit\Framework\TestCase;


	class GumballMachineTest extends TestCase
	{



		public function testIfWheeWorks():void{
			include_once 'src/GumballMachine.php';
			$gumballMachineInstance = new GumballMachine();

			$gumballMachineInstance->setGumballs(100);
			$gumballMachineInstance->turnWheel();
			$this->assertEquals(99,$gumballMachineInstance->getGumballs());
		}
	}

 ?>