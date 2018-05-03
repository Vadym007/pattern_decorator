<?php
    abstract class FruitDecorator implements Fruit
    {
        protected $decoratedFruit;
        public function __construct(Fruit $decoratedFruit)
        {
          $this->decoratedFruit = $decoratedFruit;
        }

        public function getFruit()
        {
          $this->decoratedFruit->getFruit();
        }
    }
