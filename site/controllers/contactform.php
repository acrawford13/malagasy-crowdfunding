<?php

use Uniform\Form;

return function ($site, $pages, $page)
{
    
    $errors = ['fr'=>['email'=>'L\'adresse email est non valide','message'=>'Vous n\'avez pas renseigné de message'],'mg'=>['email'=>'L\'adresse email est non valide','message'=>'Vous n\'avez pas renseigné de message'],'en'=>['email'=>'Please enter a valid email address','message'=>'Please enter a message']];

    $form = new Form([
        'name' => [],
        'email' => [
            'rules' => ['required', 'email'],
            'message' => $errors[$site->language()->code()]['email']
        ],
        'message' => [
            'rules' => ['required'],
            'message' => $errors[$site->language()->code()]['message']
        ],
    ]);

    if (r::is('POST')) {
        $form->emailAction([
            'to' => $page->contact(),
            'from' => 'andrea.crawford13@gmail.com',
            'snippet' => 'emails/success',
            'subject' => 'New message from Malagasy Crowdfunding website contact form'
        ]);
    }

    return compact('form');
};