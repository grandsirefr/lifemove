<?php

namespace App\Controller;


use App\Entity\Customer;
use App\Form\CustomerType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @method getDoctrine()
 * @method render(string $string, array $array)
 */
class RegistrationController extends AbstractController
{
    /**
     * @Route ("/register", name="user_registration")
     * @param Request $request
     * @param UserPasswordEncoderInterface $passwordEncoder
     */

    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = new Customer();
        $form = $this->createForm(CustomerType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $password = $passwordEncoder->encodePassword($user, $user->getCustomerPassword());
            $user->setCustomerPassword($password);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render(
            'registration/register.html.twig',
            array('form' => $form->createView())
        );

    }


}