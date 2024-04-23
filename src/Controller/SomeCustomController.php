<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

final class SomeCustomController extends AbstractController
{
    public function testAddForm(EntityManagerInterface $entityManager, Request $request)
    {
        $user = $this->getUser();

        $someUser = new User();
        $form = $this->createForm(RegistrationFormType::class, $someUser);
        $form->handleRequest($request);


        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
