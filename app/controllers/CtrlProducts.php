
<?php

use models\Products;
use core\utils\ControllerHandler;

class CtrlProducts extends ControllerHandler {

    private $estadosCivis = null;

    public function __construct(){
        $this->products = new Products();
        parent::__construct();
    }

    public function get() {
        $resultset = $this->products->listAll();
        echo stripcslashes(json_encode( $resultset, JSON_UNESCAPED_UNICODE));
       /*
            $strOut = "";            
            $products =$this->products->listAll();
            foreach ($products as $product) {
                $strOut .= 
                    "\n".'<div class="movie-product">'.
                    "\n".'    <strong class="product-title">'.$product['name'].'</strong>'.
                    "\n".'    <img src="app/controller/uploaded_img/'.$product['image'].'" alt="'.$product['name'].'" class="product-image">'.
                    "\n".'    <div class="product-price-container container-price-product">'.
                    "\n".'        <span class="product-price">R$'.$product['price'].'</span>'.
                    "\n".'        <br><button type="button" class="button-hover-background" onclick="addProductToCart( '.$product['id'].'">Adicionar ao carrinho</button>'.
                    "\n".'    </div>'.
                    "\n".'</div>';
            }
            echo $strOut;*/
        }

    public function post() {}

    public function put() {}

    public function delete() {}

    public function file(){

    }
}

new CtrlProducts();
?>