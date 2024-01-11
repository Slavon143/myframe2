<?php

namespace src;

class MyController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function processRequest() {
        // Получаем параметр запроса 'page'
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 'home';

        switch ($currentPage) {
            case 'home':
                $this->handleHome();
                break;
            case 'about':
                $this->handleAbout();
                break;
            case 'contact':
                $this->handleContact();
                break;
            case 'auth':
                $this->handleAuth();
                break;
            default:
                $this->handleHome(); // По умолчанию переходим на домашнюю страницу
                break;
        }
    }

    private function handleHome() {
        // Логика для домашней страницы
        //$data = $this->model->getHomeData();
        include __DIR__ .  '/view/home_view.php';
    }

    private function handleAbout() {
        // Логика для страницы "О нас"
        //$data = $this->model->getAboutData();
        include __DIR__ .  '/view/about_view.php';
        //include 'about_view.php'; // Подключение представления для страницы "О нас"
    }

    private function handleContact() {
        // Логика для страницы "Контакты"
        //$data = $this->model->getContactData();
        //include 'contact_view.php'; // Подключение представления для страницы "Контакты"
    }

    private function handleAuth() {
        // Логика для страницы "Контакты"
        //$data = $this->model->getContactData();
        include __DIR__ .  '/view/auth_view.php'; // Подключение представления для страницы "Контакты"
    }
}

