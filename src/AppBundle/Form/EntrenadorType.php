<?php
/**
 * Created by PhpStorm.
 * User: albertau
 * Date: 2/05/17
 * Time: 20:36
 */

namespace AppBundle\Form;
use AppBundle\Entity\Entrenador;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EntrenadorType extends  AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', TextType::class)
            ->add('lastname', TextType::class)
            ->add('texto', TextType::class)
            ->add('email', TextType::class)
            ->add('submit', SubmitType::class)

        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Entrenador::class,
        ));
    }
    public function getName()
    {
        return 'app_bundle_entrenador_type';
    }
}