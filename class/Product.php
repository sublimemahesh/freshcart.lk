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
    public $sub_product;
    public $brand;
    public $name;
    public $discount;
    public $unite;
    public $price;
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
            $this->sub_product = $result['sub_product'];
            $this->brand = $result['brand'];
            $this->name = $result['name'];
            $this->discount = $result['discount'];
            $this->unite = $result['unite'];
            $this->price = $result['price'];
            $this->image_name = $result['image_name'];
            $this->short_description = $result['short_description'];
            $this->description = $result['description'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `product` (`category`,`sub_product`,`brand`,`name`,`discount`,`unite`,`price`,`image_name`,`short_description`,`description`,`queue`) VALUES  ('"
                . $this->category . "','"
                . $this->sub_product . "','"
                . $this->brand . "','"
                . $this->name . "', '"
                . $this->discount . "', '"
                . $this->unite . "', '"
                . $this->price . "', '"
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
                . "`brand` ='" . $this->brand . "', "
                . "`name` ='" . $this->name . "', "
                . "`discount` ='" . $this->discount . "', "
                . "`unite` ='" . $this->unite . "', "
                . "`price` ='" . $this->price . "', "
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

    public function getProductsBySubProduct($sub_product) {

        $query = 'SELECT * FROM `product` WHERE sub_product="' . $sub_product . '"   ORDER BY queue ASC';

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function getProductsByCategory($category) {

        $query = 'SELECT * FROM `product` WHERE category="' . $category . '"   ORDER BY queue ASC';

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
