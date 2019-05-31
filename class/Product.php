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
    public $sub_category;
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
            $this->sub_category = $result['sub_category'];
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

        $query = "INSERT INTO `product` (`category`,`sub_category`,`brand`,`name`,`discount`,`unite`,`price`,`image_name`,`short_description`,`description`,`queue`) VALUES  ('"
                . $this->category . "','"
                . $this->sub_category . "','"
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

    public function getProductsBySubProduct($sub_category) {


        $query = 'SELECT * FROM `product` WHERE sub_category="' . $sub_category . '"   ORDER BY queue ASC';

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

    public function getProductsBySubCategories($categorys) { 

        $in = implode(",", explode(",", $categorys)); 

        $query = 'SELECT * FROM `product` WHERE `sub_category` in(' . $in . ')  ORDER BY queue ASC';
         
        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function getProductsByCategoryByAll($category, $pageLimit, $setLimit) {

        $query = "SELECT * FROM `product` where `category` = " . $category . "   ORDER BY queue DESC LIMIT " . $pageLimit . " , " . $setLimit . "  ";

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

    public function showPagination($per_page, $page, $id) {

        $page_url = "?";
        $query = 'SELECT COUNT(*) as totalCount FROM `product` WHERE category="' . $id . '" ';

        $rec = mysql_fetch_array(mysql_query($query));
        $total = $rec['totalCount'];
        $adjacents = "2";

        $page = ($page == 0 ? 1 : $page);
        $start = ($page - 1) * $per_page;

        $prev = $page - 1;
        $next = $page + 1;

        $setLastpage = ceil($total / $per_page);

        $lpm1 = $setLastpage - 1;
        $setPaginate = "";
        if ($setLastpage > 1) {

            $setPaginate .= "<div class='product-pagi-nav'>";
            $setPaginate .= "<a>Page $page of $setLastpage</a> ";

            if ($setLastpage < 7 + ($adjacents * 2)) {
                for ($counter = 1; $counter <= $setLastpage; $counter++) {
                    if ($counter == $page) {
                        $setPaginate .= " <a class='current_page'>$counter</a> ";
                    } else {
                        $setPaginate .= " <a href='{$page_url}page=$counter&id=$id'>$counter</a> ";
                    }
                }
            } elseif ($setLastpage > 5 + ($adjacents * 2)) {

                if ($page <= 1 + ((int) $adjacents * 2)) {

                    for ($counter = 1; $counter < 4 + ((int) $adjacents * 2); $counter++) {
                        if ($counter == $page)
                            $setPaginate .= " <a class='current_page'>$counter</a> ";
                        else
                            $setPaginate .= " <a href='{$page_url}page=$counter&id=$id'>$counter</a> ";
                    }

                    $setPaginate .= "<a href='{$page_url}page=$lpm1'>$lpm1</a>";
                    $setPaginate .= "<a href='{$page_url}page=$setLastpage&id=$id'>$setLastpage</a>";
                }
                elseif ($setLastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2)) {

                    $setPaginate .= "<a href='{$page_url}page=1'>1</a>";
                    $setPaginate .= "<a href='{$page_url}page=2'>2</a>";
                    $setPaginate .= "<a class='dot'>...</li>";
                    for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++) {
                        if ($counter == $page)
                            $setPaginate .= "<a class='current_page'>$counter</a>";
                        else
                            $setPaginate .= "<a href='{$page_url}page=$counter&id=$id'>$counter</a>";
                    }
                    $setPaginate .= "< class='dot'>..";
                    $setPaginate .= "<a href='{$page_url}page=$lpm1'>$lpm1</a>";
                    $setPaginate .= "<a href='{$page_url}page=$setLastpage&id=$id'>$setLastpage</a>";
                }
                else {
                    $setPaginate .= "<a href='{$page_url}page=1'>1</a>";
                    $setPaginate .= "<a href='{$page_url}page=2'>2</a>";
                    $setPaginate .= "<li class='dot'>..</li>";
                    for ($counter = $setLastpage - (2 + ($adjacents * 2)); $counter <= $setLastpage; $counter++) {
                        if ($counter == $page)
                            $setPaginate .= "<a class='current_page'>$counter</a>";
                        else
                            $setPaginate .= "<a href='{$page_url}page=$counter&id=$id'>$counter</a>";
                    }
                }
            }

            if ($page < $counter - 1) {
                $setPaginate .= "<a href='{$page_url}page=$next&id=$id'>Next</a>";
                $setPaginate .= "<a href='{$page_url}page=$setLastpage&id=$id'>Last</a>";
            } else {
                $setPaginate .= "<a class='current_page'>Next</a>";
                $setPaginate .= "<a class='current_page'>Last</a>";
            }

            $setPaginate .= "</div>\n";
        }


        echo $setPaginate;
    }

}
