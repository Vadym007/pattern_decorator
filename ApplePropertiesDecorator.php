<?php
    class ApplePropertiesDecorator extends FruitDecorator
    {
        public function __construct(Fruit $decoratedFruit)
        {
            parent::__construct($decoratedFruit);
        }

        private function redApple()
        {
          return 'Apple is red';
        }

        public function getFruit()
        {
          $result = [];
          $result[] = $this->decoratedFruit->getFruit();
          $result[] = $this->redApple();
          return $result;
        }
    }
