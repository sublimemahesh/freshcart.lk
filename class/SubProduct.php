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
class SubProduct {

    public $id;
    public $category;
    public $name;
    public $image_name;
    public $sort;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `sub_product` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->category = $result['category'];
            $this->name = $result['name'];
            $this->image_name = $result['image_name'];
            $this->sort = $result['sort'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `sub_product` (`category`,`name`,`image_name`,`sort`) VALUES  ('"
                . $this->category . "','"
                . $this->name . "', '"
                . $this->image_name . "', '"
                . $this->sort . "')";


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

        $query = "SELECT * FROM `sub_product` ORDER BY sort ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `sub_product` SET "
                . "`name` ='" . $this->name . "', "
                . "`image_name` ='" . $this->image_name . "', "
                . "`sort` ='" . $this->sort . "' "
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
        $this->deletePhotos();

        unlink(Helper::getSitePath() . "upload/product-categories/sub-product/" . $this->image_name);

        $query = 'DELETE FROM `sub_product` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function deletePhotos() {

        $PRODUCT = new Product(NULL);

        $allPhotos = $PRODUCT->getProductsBySubProduct($this->id);

        foreach ($allPhotos as $photo) {

            $IMG = $PRODUCT->image_name = $photo["image_name"];

            unlink(Helper::getSitePath() . "upload/product-categories/sub-product/product/photos/" . $IMG);


            $PRODUCT_PHOTO = new ProductPhoto(NULL);
            foreach ($PRODUCT_PHOTO->getProductPhotosById($photo["id"]) as $product_photo) {
                $IMG_2 = $photo["image_name"] = $product_photo["image_name"];

                unlink(Helper::getSitePath() . "upload/product-categories/sub-product/product/photos/gallery/" . $IMG_2);
                unlink(Helper::getSitePath() . "upload/product-categories/sub-product/product/photos/gallery/thumb/" . $IMG_2);
            }

            $PRODUCT->id = $photo["id"];

            $PRODUCT->delete();
        }
    }

    public function getProductsByCategory($category) {

        $query = 'SELECT * FROM `sub_product` WHERE category="' . $category . '"   ORDER BY sort ASC';

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function getProductsByBrand($brand) {

        $query = 'SELECT * FROM `sub_product` WHERE brand="' . $brand . '"   ORDER BY sort ASC';

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function arrange($key, $img) {

        $query = "UPDATE `sub_product` SET `sort` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

}
