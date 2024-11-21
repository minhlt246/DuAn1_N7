<?php
require_once "../public/models/ContactModel.php";

class ContactController {
    private $model;

    public function __construct($db) {
        $this->model = new ContactModel($db);
    }

    public function showForm() {
        require "views/content/form.php";
    }

    public function submitForm() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $phone = htmlspecialchars($_POST['phone']);
            $email = htmlspecialchars($_POST['email']);
            $content = htmlspecialchars($_POST['content']);

            if (!empty($name) && !empty($phone) && !empty($email) && !empty($content)) {
                $success = $this->model->saveContact($name, $phone, $email, $content);
                if ($success) {
                    require "views/contact/success.php";
                } else {
                    require "views/contact/error.php";
                }
            } else {
                require "views/contact/error.php";
            }
        }
    }
}
?>
