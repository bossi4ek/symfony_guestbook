<?php
/**
 * Created by JetBrains PhpStorm.
 * User: root
 * Date: 20.10.13
 * Time: 16:28
 * To change this template use File | Settings | File Templates.
 */

namespace Acme\GuestBookBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username', 'text')
                ->add('email', 'email')
                ->add('randmessage', 'checkbox', array(
                    'required'  => false,
                ))
                ->add('message', 'textarea');
    }

    public function getName()
    {
        return 'post';
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Acme\GuestBookBundle\Entity\Post',
        );
    }
}