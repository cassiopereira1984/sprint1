<?php

class PokerDice 
{
    private $poker = ["As", "K", "Q", "J", "7", "8"];
    private $lastThrow;
    private $totalThrows = 0;

    public function throw(): void {
        $throw = rand(0, count($this->poker) - 1);
        $this->lastThrow = $this->poker[$throw];
        $this->totalThrows++;
        echo $this->lastThrow;
    }

    public function shapeName(): void {
        echo $this->lastThrow;
    }

    public function fiveThrows(): void {
        echo $this->throw();
        echo $this->throw();
        echo $this->throw();
        echo $this->throw();
        echo $this->throw();
    }

    public function getTotalThrows() {
        echo $this->totalThrows;
    }
}
?>