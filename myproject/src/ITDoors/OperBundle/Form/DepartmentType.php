<?php

namespace ITDoors\OperBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DepartmentType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mpk', 'text', array('label' => 'Поле MPK'))
            ->add('name','text',array('label'=> 'Название'))
            ->add('squery')
            ->add('address','text',array('label'=> 'Адресс'))
            ->add('created_at')
            ->add('description')
            ->add('coordinates')
            ->add('organization_id')
            ->add('city_id')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ITDoors\OperBundle\Entity\Department'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'itdoors_operbundle_department';
    }
}
