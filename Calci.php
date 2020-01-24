<?php
class Calci 
	{
	    private $firstNumber , $secondNumber;

	    public function __construct($firstNumber, $secondNumber)
	    {
	        $this->firstNumber = $firstNumber;
	        $this->secondNumber = $secondNumber;
	    }

	    public function add()
	    {
	    	return $this->firstNumber." + ".$this->secondNumber." = ".($this->firstNumber + $this->secondNumber);
	    }

	    public function subtract()
	    {
	   		return $this->firstNumber." - ".$this->secondNumber." = ".($this->firstNumber - $this->secondNumber);
	    }

	    public function multiply()
	    {
	    	return $this->firstNumber." * ".$this->secondNumber." = ".($this->firstNumber * $this->secondNumber);
	    }

	    public function divide() 
	    {
	    	return $this->firstNumber." / ".$this->secondNumber." = ".$this->firstNumber / $this->secondNumber;
	    }
	    public function squareRoot()
	    {
	    	return "&radic;".$this->firstNumber." = ".sqrt($this->firstNumber);
	    }
	}
?>