<?php

namespace App\Controllers;


use App\Config;
use App\Controller;

class Error extends Controller
{

    protected function handle()
    {
        if (100 == $this->code) {
            $config = Config::getInstance();
            $transport = (new \Swift_SmtpTransport
            ($config->data['mail']['host'], $config->data['mail']['port'], $config->data['mail']['security']))
                ->setUsername($config->data['mail']['username'])
                ->setPassword($config->data['mail']['password']);

            $mailer = new \Swift_Mailer($transport);

            $message = (new \Swift_Message($this->message))
                ->setFrom(['mr.kamc@gmail.com' => 'Алексей Калугин'])
                ->setTo(['mr.kamc@gmail.com'])
                ->setBody($this->message . ' код - ' . $this->code . ' время: ' . date('c'));

            $mailer->send($message);
        }
        $this->view->message = $this->message;
        $this->view->code = $this->code;
        echo $this->view->render(__DIR__ . '/../../templates/error.php');
    }
}