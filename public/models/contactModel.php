<?php
class ContactModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function saveContact($name, $phone, $email, $content) {
        $query = "INSERT INTO contacts (name, phone, email, content) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ssss", $name, $phone, $email, $content);
        return $stmt->execute();
    }
}
?>
