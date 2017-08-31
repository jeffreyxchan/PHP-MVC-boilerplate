<?php

class App
{
    private $url_controller = null;
    private $url_action = null;
    private $url_params = array();

    public function __construct()
    {
        $this->splitUrl();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = array(
                'jeffrey' => '1',
                'wanda' => '2',
                'jordan' => '3'
            );
            echo json_encode($data);
        }

        else if (!$this->url_controller) {
            require_once CONTROLLERS . 'MainController.php';
            $mainController = new MainController;
            $mainController->render('index');
        }
    }

    private function splitUrl()
    {
        if (isset($_GET['url'])) {
            $url = trim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            $this->url_controller = isset($url[0]) ? $url[0] : null;
        }
    }
}
