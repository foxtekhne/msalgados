
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
        echo json_encode($this->products->listAll());
    }

    public function post() {
        $id = $this->getParameter('id');
        $name = $this->getParameter('name');
        $price = $this->getParameter('price');
    
        // Verifica se um arquivo foi enviado
        if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
            $image = $_FILES['image'];
    
            // Diretório onde as imagens serão salvas
            $uploadDirectory = 'public/assets/uploaded_image/';
    
            // Garante que o diretório exista
            if (!is_dir($uploadDirectory)) {
                mkdir($uploadDirectory, 0755, true);
            }

            //chatmsg: o arquivo está indo para o banco com o diretório na frente. o diretório é só onde a imagem deve ser salva na pasta, o nome da imagem é só o nome do produto . a extensão do arquivo
    
            // Obtém a extensão original da imagem
            $imageExtension = pathinfo($image['name'], PATHINFO_EXTENSION);
    
            // Gera um nome único para o arquivo usando o nome do produto e a extensão original
            $imageName = $uploadDirectory . $name . '.' . $imageExtension;
    
            // Move o arquivo para o diretório desejado
            move_uploaded_file($image['tmp_name'], $imageName);
        } else {
            // Se nenhum arquivo foi enviado, você pode definir um valor padrão ou tratar de acordo com a lógica do seu aplicativo
            $imageName = 'logo-original.png';
        }
    
        // Restante do código para salvar no banco de dados
        $this->products->populate($id, $name, $price, $imageName);
        $result = $this->products->save();
        echo $result;
    }

    public function put() {        
        $id = $this->getParameter('id');
        $name = $this->getParameter('name');
        $price = $this->getParameter('price');
        $image = $this->getParameter('image');
        $this->products->populate( $id, $name, $price, $image);
        $result = $this->products->save();
        echo $result;
    }

    public function delete() {        
        $id = $this->getParameter('id');
        $name = $this->getParameter('name');
        $price = $this->getParameter('price');
        $image = $this->getParameter('image');
        $this->products->populate( $id, $name, $price, $image);
        $result = $this->products->delete();
        echo $result;
    }

    public function file(){

    }
}

new CtrlProducts();
?>