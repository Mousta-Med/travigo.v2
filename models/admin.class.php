<?php
require_once "db.class.php";
class admin extends Db
{

    public function showtours()
    {
        $connect = new Db;
        $conn = $connect->connection();
        $sql = $conn->query("SELECT * FROM tours");
        return $sql;
    }

    public function showtoursid($id)
    {
        $connect = new Db;
        $conn = $connect->connection();
        $sql = $conn->query("SELECT * FROM tours WHERE id = $id");
        return $sql;
    }
    public function addstour($tourplace, $tourdesc, $tourimage)
    {
        $connect = new Db;
        $conn = $connect->connection();
        $sql = "INSERT INTO tours (tour_place, tour_description, tour_image) VALUES ('$tourplace', '$tourdesc', '$tourimage')";
        $result = mysqli_query($conn, $sql);
        if ($result == true) {
            return true;
        } else {
            return false;
        }
    }
    public function updatetour($tourplace, $tourdesc, $tourimage, $id)
    {

        $connect = new Db;
        $conn = $connect->connection();
        if (empty($tourimage)) {
            $sql = "UPDATE tours SET tour_place = '$tourplace', tour_description = '$tourdesc' WHERE id = '$id' ";
        } else {
            $sql = "UPDATE tours SET tour_place = '$tourplace', tour_description = '$tourdesc', tour_image = '$tourimage' WHERE id = '$id' ";
        }
        $result = mysqli_query($conn, $sql);
        if ($result == true) {
            return true;
        } else {
            return false;
        }
    }
    public function deletetour($id)
    {
        $connect = new Db;
        $conn = $connect->connection();
        $sql =  "DELETE FROM tours WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        if ($result == true) {
            return true;
        } else {
            return false;
        }
    }
}
