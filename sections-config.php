<?php

    class Section{
        public $name;
        public $file;

        public function __construct($name, $file){
            $this->name = $name;
            $this->file = $file;
        }
    }

    class Navigation{
        private $sections = array();

        private $default;

        public function SetDefault($i){
            $this->default = $this->sections[$i];
        }

        public function GetDefault(){
            if(!isset($this->default)){
                return $this->sections[0];
            }
            else{
                return $this->default;
            }
        }

        public function Add($name, $file){
            array_push($this->sections, new Section($name, $file));
        }

        public function Num(){
            return count($this->sections);
        }

        private function GetSection($i){
            if($i<0){
                return $this->GetDefault();
            }
            else{
                return $this->sections[$i];
            }
        }

        public function GetName($i){
            return $this->GetSection($i)->name;
        }

        public function GetFilename($i){
            return $this->GetSection($i)->file;
        }

        public function GetVarname($i){
            $x = $this->GetSection($i)->file;
            $path_parts = pathinfo($x);
            return $path_parts['filename'];
        }
    }

    $navigation = new Navigation();

    $navigation->Add('Content', 'content.php');
    $navigation->Add('Post', 'post.php');
    $navigation->Add('Login', 'login.php');
    $navigation->Add('Register', 'register.php');

?>