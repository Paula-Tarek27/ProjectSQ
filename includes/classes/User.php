<?php
class User {
    private $conn, $sqlData;

    public function __construct($con, $username) {
        $this->conn = $con;

        $query = $con->prepare("SELECT * FROM users WHERE username=:username");
        $query->bindValue(":username", $username);
        $query->execute();

        $this->sqlData = $query->fetch(PDO::FETCH_ASSOC);
    }

    public function getFirstName() {
        return $this->sqlData["firstNmae"];
    }

    public function getLastName() {
        return $this->sqlData["lastName"];
    }

    public function getEmail() {
        return $this->sqlData["email"];
    }

    public function getIsSubscribed() {
        return $this->sqlData["IsSubscribed"];
    }

    public function getUsername() {
        return $this->sqlData["username"];
    }

    public function setIsSubscribed($value) {
        $query = $this->conn->prepare("UPDATE users SET IsSubscribed=:IsSubscribed
                                    WHERE username=:un");
        $query->bindValue(":IsSubscribed", $value);
        $query->bindValue(":un", $this->getUsername());
        
        if($query->execute()) {
            $this->sqlData["IsSubscribed"] = $value;
            return true;
        }

        return false;
    }
}
