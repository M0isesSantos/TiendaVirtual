<?php
    class Home extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }

        public function home()
        {
            $data['page_id'] = 1;
            $data['page_tag'] = "Home";
            $data['page_title'] = "Pagina principal";
            $data['page_name'] = "home";
            $data['page_content'] = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit voluptatem non asperiores repudiandae quam perspiciatis ullam magnam obcaecati explicabo dolore officiis esse dolorem nobis, laboriosam harum? Delectus necessitatibus atque molestias.";
            $this->views->getView($this,"home", $data); 
        }

}
?>