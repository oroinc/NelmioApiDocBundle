<?php

/*
 * This file is part of the NelmioApiDocBundle.
 *
 * (c) Nelmio <hello@nelm.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nelmio\ApiDocBundle\Tests\Fixtures\Form;

use Nelmio\ApiDocBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ImprovedTestType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $choiceType = LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\ChoiceType');
        $datetimeType = LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\DateTimeType');
        $dateType = LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\DateType');

        $builder
            ->add('dt1', $datetimeType, array('widget' => 'single_text', 'description' => 'A nice description'))
            ->add('dt2', $datetimeType, array('date_format' => 'M/d/y', 'widget' => 'text'))
            ->add('dt3', $datetimeType, array('widget' => 'single_text', 'format' => 'M/d/y H:i:s', 'html5' => false))
            ->add('dt4', $datetimeType, array('date_format' => \IntlDateFormatter::MEDIUM, 'widget' => 'text'))
            ->add('dt5', $datetimeType, array('format' => 'M/d/y H:i:s', 'widget' => 'text', 'html5' => false))
            ->add('d1', $dateType, array('format' => \IntlDateFormatter::MEDIUM, 'html5' => false))
            ->add('d2', $dateType, array('format' => 'd-M-y', 'html5' => false))
            ->add('c1', $choiceType, array('choices' => array('m' => 'Male', 'f' => 'Female')))
            ->add('c2', $choiceType, array('choices' => array('m' => 'Male', 'f' => 'Female'), 'multiple' => true))
            ->add('c3', $choiceType, array('choices' => array()))
            ->add('c4', $choiceType, array('choices' => array('foo' => 'bar', 'bazgroup' => array('baz' => 'Buzz'))))
            ->add('e1', __NAMESPACE__.'\EntityType',
                array('choices' => array('foo' => 'bar', 'bazgroup' => array('baz' => 'Buzz')))
            )
        ;
    }

    /**
     * {@inheritdoc}
     *
     * @deprecated Remove it when bumping requirements to Symfony 2.7+
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $this->configureOptions($resolver);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(array(
            'data_class' => 'Nelmio\ApiDocBundle\Tests\Fixtures\Model\ImprovedTest',
        ));

        return;
    }

    /**
     * BC SF < 2.8
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->getBlockPrefix();
    }

    /**
     * {@inheritdoc}
     */
    #[\Override]
    public function getBlockPrefix(): string
    {
        return '';
    }
}
