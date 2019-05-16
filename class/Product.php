<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product
 *
 * @author Nipuni
 */
class Product {

    public $id;
    public $category;
    public $brand;
    public $name;
    public $image_name;
    public $short_description;
    public $description;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `product` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->category = $result['category'];
            $this->brand = $result['brand'];
            $this->name = $result['name'];
            $this->image_name = $result['image_name'];
            $this->short_description = $result['short_description'];
            $this->description = $result['description']; 
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `product` (`category`,`brand`,`name`,`image_name`,`short_description`,`description`,`queue`) VALUES  ('"
                . $this->category . "','"
                . $this->brand . "','"
                . $this->name . "', '"
                . $this->image_name . "', '"
                . $this->short_description . "', '"
                . $this->description . "', '" 
                . $this->queue . "')";


        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            $last_id = mysql_insert_id();

            return $this->__construct($last_id);
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `product` ORDER BY queue ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `product` SET "
                . "`category` ='" . $this->category . "', "
                . "`brand` ='" . $this->brand . "', "
                . "`name` ='" . $this->name . "', "
                . "`image_name` ='" . $this->image_name . "', "
                . "`short_description` ='" . $this->short_description . "', "
                . "`description` ='" . $this->description . "', " 
                . "`queue` ='" . $this->queue . "' "
                . "WHERE `id` = '" . $this->id . "'";
       
        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete() {


        $query = 'DELETE FROM `product` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function getProductsById($product) {

        $query = 'SELECT * FROM `product` WHERE category="' . $product . '"   ORDER BY queue ASC';

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }
    
    public function getProductsByBrand($brand) {

        $query = 'SELECT * FROM `product` WHERE brand="' . $brand . '"   ORDER BY queue ASC';

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function arrange($key, $img) {

        $query = "UPDATE `product` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

}
