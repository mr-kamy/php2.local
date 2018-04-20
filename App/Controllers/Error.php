<?php

namespace App\Controllers;


use App\Controller;

class Error extends Controller
{

    protected function handle()
    {
        if (100 == $this->code){
            $transport = (new \Swift_SmtpTransport('smtp.googlemail.com', 465, 'ssl'))
                ->setUsername('mr.kamc@gmail.com')
                ->setPassword('******')
            ;

            $mailer = new \Swift_Mailer($transport);


            $message = (new \Swift_Message($this->message))
                ->setFrom(['mr.kamc@gmail.com' => 'Алексей Калугин'])
                ->setTo(['mr.kamc@gmail.com'])
                ->setBody($this->message . ' код - ' . $this->code . ' время: ' . date('c'))
            ;

            $mailer->send($message);
        }

        $this->view->message = $this->message;
        $this->view->code = $this->code;
        echo $this->view->render(__DIR__ . '/../../templates/error.php');
    }
}