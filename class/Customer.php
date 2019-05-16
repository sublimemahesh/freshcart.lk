<?php

/**
 * Description of Product
 *
 * @author sublime holdings
 * @web www.sublime.lk
 */
class Customer {

    //put your code here
    public $id;
    public $name;
    public $email;
    public $password;
    public $phone_number;
    public $district;
    public $city;
    public $address;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `customer` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->name = $result['name'];
            $this->email = $result['email'];
            $this->password = $result['password'];
            $this->phone_number = $result['phone_number'];
            $this->district = $result['district'];
            $this->city = $result['city'];
            $this->address = $result['address'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `customer` (`name`, `email`, `password`,`phone_number`,`district`,`city`,`address`) VALUES  ('"
                . $this->name . "','"
                . $this->email . "', '"
                . $this->password . "', '"
                . $this->phone_number . "', '"
                . $this->district . "', '"
                . $this->city . "', '"
                . $this->address . "')";

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

        $query = "SELECT * FROM `customer` ";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function login($username, $password) {

        $enPass = md5($password);
        $query = "SELECT  `id`,`name`,`email`,`phone_number` FROM `customer` WHERE `email`= '" . $username . "' AND `password`= '" . $enPass . "'";
        $db = new Database();

        $result = mysql_fetch_array($db->readQuery($query));

        if (!$result) {

            return FALSE;
        } else {

            $this->id = $result['id'];
            $customer = $this->__construct($this->id);

            return $customer;
        }
    }

    public function update() {

        $query = "UPDATE  `customer` SET "
                . "`name` ='" . $this->name . "', "
                . "`email` ='" . $this->email . "', "
                . "`password` ='" . $this->password . "', "
                . "`phone_number` ='" . $this->phone_number . "', "
                . "`district` ='" . $this->district . "', "
                . "`city` ='" . $this->city . "', "
                . "`address` ='" . $this->address . "' "
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

        $query = 'DELETE FROM `customer` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function GetCitiesByDistrict($district) {

        $query = "SELECT * FROM `customer` WHERE `district` = '" . $district . "'";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getDistrictByCityId($customer) {

        $query = "SELECT * FROM `customer` WHERE `id` = '" . $customer . "'";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function deleteCitiesByDistrict($district) {

        $query = "DELETE FROM `customer` WHERE `district`= '" . $district . "'";

        $db = new Database();
        $result = $db->readQuery($query);

        return $result;
    }

    public function arrange($key, $img) {
        $query = "UPDATE `customer` SET `sort` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

}
