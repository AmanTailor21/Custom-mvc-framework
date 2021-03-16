
<?php
    class core{
        protected $currentController ='pages';
        protected $currentMethod='index';
        protected $params=[];

        public function __construct()
        {
           $url=$this->getUrl();

           require_once '../app/controllers/'.$this->currentController.'.php';
           $this->currentController=new $this->currentController;


           //check second path URL
           if (isset($url[0])){
               if (method_exists($this->currentController,$url[0])){
                   $this->currentMethod=$url[0];
                   unset($url[0]);
               }
           }
           $this->params=$url ? array_values($url):[];

           call_user_func_array([$this->currentController,$this->currentMethod],$this->params);
           //var_dump($this->currentController);

        }

        public function getUrl(){
            if(isset($_GET['url'])){
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);
                return $url;
            }
//                $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//                $url = trim($url, '/');
//                $url = filter_var($url, FILTER_SANITIZE_URL);
//                $url = explode('/', $url);
//                return $url;
            }

//

    }

