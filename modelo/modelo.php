<?php
    class LOGIN
    {
        private $d1;
        private $d2;
        
        public function __construct($v1,$v2)
        {
            $this->d1=$v1;
            $this->d2=$v2;
        }

        public function COM2()
        {
            if ($this->d1 == "Jorge" and $this->d2="bar123")
            {
                return 1;
            }
            else
            {
                 return 0;
            }
        }


    }
?>