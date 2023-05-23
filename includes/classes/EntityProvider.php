<?php
class EntityProvider {

    public static function getEntities($con, $coffeeshop_item_category_id, $limit) {

        $sql = "SELECT * FROM coffeeshop_item_category ";

        if($coffeeshop_item_category_id != null) {
            $sql .= "WHERE coffeeshop_item_category_id=:coffeeshop_item_category_id ";
        }

        $sql .= "ORDER BY RAND() LIMIT :limit";

        $query = $con->prepare($sql);

        if($coffeeshop_item_category_id != null) {
            $query->bindValue(":coffeeshop_item_category_id", $coffeeshop_item_category_id);
        }

        $query->bindValue(":limit", $limit, PDO::PARAM_INT);
        $query->execute();

        $result = array();
        while($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $result[] = new coffeeshop_products($con, $row);
        }

        return $result;
    }

    public static function getTVShowEntities($con, $categoryId, $limit) {

        $sql = "SELECT DISTINCT(entities.id) FROM `entities` 
                INNER JOIN videos ON entities.id = videos.entityId 
                WHERE videos.isMovie = 0 ";

        if($categoryId != null) {
            $sql .= "AND categoryId=:categoryId ";
        }

        $sql .= "ORDER BY RAND() LIMIT :limit";

        $query = $con->prepare($sql);

        if($categoryId != null) {
            $query->bindValue(":categoryId", $categoryId);
        }

        $query->bindValue(":limit", $limit, PDO::PARAM_INT);
        $query->execute();

        $result = array();
        while($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $result[] = new coffeeshop_products($con, $row["id"]);
        }

        return $result;
    }

    public static function getMoviesEntities($con, $categoryId, $limit) {

        $sql = "SELECT DISTINCT(entities.id) FROM `entities` 
                INNER JOIN videos ON entities.id = videos.entityId 
                WHERE videos.isMovie = 1 ";

        if($categoryId != null) {
            $sql .= "AND categoryId=:categoryId ";
        }

        $sql .= "ORDER BY RAND() LIMIT :limit";

        $query = $con->prepare($sql);

        if($categoryId != null) {
            $query->bindValue(":categoryId", $categoryId);
        }

        $query->bindValue(":limit", $limit, PDO::PARAM_INT);
        $query->execute();

        $result = array();
        while($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $result[] = new coffeeshop_products($con, $row["id"]);
        }

        return $result;
    }

    public static function getSearchEntities($con, $term) {

        $sql = "SELECT * FROM entities WHERE name LIKE CONCAT('%', :term, '%') LIMIT 30";

        $query = $con->prepare($sql);

        $query->bindValue(":term", $term);
        $query->execute();

        $result = array();
        while($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $result[] = new coffeeshop_products($con, $row);
        }

        return $result;
    }

}
?> 