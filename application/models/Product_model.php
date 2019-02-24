<?php define('BASEPATH') OR EXIT('No direct script access allowed');

class Produk_model extends CI_Model{
    private $_table = "products";

    public $product_id;
    public $name;
    public $price;
    public $image = "default.jpg";
    public $description;

    public function rules(){
        return[
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'price',
            'label' => 'Price',
            'rules' => 'numeric'],

            ['field' => 'description',
            'label' => 'Descriptiom',
            'rules' => 'required']
        ];
    }

    public function getAll(){
        return $this->get($this->_table)->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table, ["product_id" => $id])->row();
    }

    public function save(){
        $post=$this->input->post(); //ambil data dari form
        $this->product_id=uniqid(); //membuat id unik
        $this->name=$post["name"]; //isi field name
        $this->price=$price["price"]; //isi field price
        $this->description=$post["description"]; //is field description
        $this->db->update($this->_table, $this);
    }

    public function update(){
        $post=$this->input->post(); //ambil data dari form
        $this->product_id=$post["id"]; 
        $this->name=$post["name"];
        $this->price=$price["price"];
        $this->description=$post["description"];
        $this->db->update($this->_table, $this, array('product_id' => $post['id']));
    }

    public function delete($id){
        return $this->db->delete($this->_table, array("product_id" => $id));
    }
}

?>