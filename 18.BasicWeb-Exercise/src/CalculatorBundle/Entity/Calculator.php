<?php


namespace CalculatorBundle\Entity;

class Calculator
{
    /**
     * @var float
     */
    private $leftOperand;

    /**
     * @var float
     */
    private $rightOperand;

    /**
     * @var string
     */
    private $operator;

    /**
     * Calculator constructor.
     * @param float $leftOperand
     * @param float $rightOperand
     * @param string $operator
     */
    public function __construct()
    {

    }

    /**
     * @return float
     */


    public function getLeftOperand()
    {
        return $this->leftOperand;
    }

    /**
     * @param float $leftOperand
     */
    public function setLeftOperand($leftOperand)
    {
        $this->leftOperand = $leftOperand;
    }

    /**
     * @return float
     */
    public function getRightOperand()
    {
        return $this->rightOperand;
    }

    /**
     * @param float $rightOperand
     */
    public function setRightOperand($rightOperand)
    {
        $this->rightOperand = $rightOperand;
    }

    /**
     * @return string
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * @param string $operator
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
    }


    public function calculateResult()
    {
        $result = 0;
        $left = $this->getLeftOperand();
        $right = $this->getRightOperand();
        $operator = $this->getOperator();
        switch ($operator) {

            case "+":
                $result = $left + $right;
                break;
            case "-":
                $result = $left - $right;
                break;
            case "*":
                $result = $left * $right;
                break;
            case "/":
                if ($right == 0) {
                    $result = "Zero Division!";
                } else {

                    $result = $left / $right;
                }
                break;
            case "^":
                $result = pow($left, $right);
                break;


        }

        return $result;
    }
}
