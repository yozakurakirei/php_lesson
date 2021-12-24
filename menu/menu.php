<?php
    class Menu {
        private $name;
        private $price;
        private $image;
        private $numberOfGirls = 0;

        // class property
        public static $count = 4;

        public function __construct($name, $price, $image)
        {
            $this->name = $name;
            $this->price = $price;
            $this->image = $image;
        }

        public function getName() {
            return $this->name;
        }

        public function getPrice() {
            return $this->price;
        }

        public function getImage() {
            return $this->image;
        }

        public function perDay() {
            return floor($this->price / 31);
        }

        // ゲッター
        public function getNumberOfGirls() {
            return $this->numberOfGirls;
        }

        // セッター
        public function setNumberOfGirls($numberOfGirls) {
            $this->numberOfGirls = $numberOfGirls;
        }

        public static function findByName($menus, $name) {
            foreach($menus as $menu) {
                if($menu->getName() === $name) {
                    return $menu;
                }
            }
        } 

    }
?>