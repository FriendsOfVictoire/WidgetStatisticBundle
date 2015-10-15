<?php

namespace Victoire\Widget\StatisticBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Victoire\Bundle\CoreBundle\Form\WidgetType;

/**
 * WidgetStatistic form type.
 */
class WidgetStatisticType extends WidgetType
{
    /**
     * define form fields.
     *
     * @param FormBuilderInterface $builder
     *
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
            ->add('type0', 'choice', [
                    'choices'     => [
                        'pie'    => 'Camembert',
                        'column' => 'Diagramme',
                        'line'   => 'Courbe',
                    ],
                    'required'    => true,
                    'label'       => 'widget.statistic.form.type0.label',
                    'empty_value' => false,
                ]
            )
            ->add('showLabel0', 'checkbox', [
                    'required'              => false,
                    'label'                 => 'widget.statistic.form.showLabel0.label',
                    'widget_checkbox_label' => 'widget',
                ]
            )
            ->add('fontSize0', 'integer', [
                    'data'       => 12,
                    'required'   => true,
                    'label'      => 'widget.statistic.form.fontSize0.label',
                    'help_block' => 'widget.statistic.form.fontSize0.helpBlock',
                ]
            )
            ->add('pieSize0', 'integer', [
                    'data'       => 100,
                    'required'   => true,
                    'label'      => 'widget.statistic.form.pieSize0.label',
                    'help_block' => 'widget.statistic.form.pieSize0.helpBlock',
                ]
            )
            ->add('title0', null, [
                    'required' => true,
                    'label'    => 'widget.statistic.form.title0.label',
                ]
            )
            ->add('width0', 'integer', [
                    'data'       => 350,
                    'required'   => true,
                    'label'      => 'widget.statistic.form.width0.label',
                    'help_block' => 'widget.statistic.form.width0.helpBlock',
                ]
            )
            ->add('height0', 'integer', [
                    'data'       => 350,
                    'required'   => true,
                    'label'      => 'widget.statistic.form.height0.label',
                    'help_block' => 'widget.statistic.form.height0.helpBlock',
                ]
            )
            ->add('coordonatesYAxis0', null, [
                    'required'   => false,
                    'label'      => 'widget.statistic.form.coordonatesYAxis0.label',
                    'help_block' => 'widget.statistic.form.coordonatesYAxis0.helpBlock',
                ]
            )
            ->add('data0', 'hidden', [
                    'required' => false,
                    'label'    => 'widget.statistic.form.data0.label',
                    'data'     => 'Array',
                ]
            )
            ->add('isDoubleChart', 'checkbox', [
                    'required'              => false,
                    'label'                 => 'widget.statistic.form.isDoubleChart.label',
                    'help_block'            => 'widget.statistic.form.isDoubleChart.helpBlock',
                    'widget_checkbox_label' => 'widget',
                ]
            )
            ->add('type1', 'choice', [
                    'choices' => [
                        'pie'    => 'Camembert',
                        'column' => 'Diagramme',
                        'line'   => 'Courbe',
                    ],
                    'required'    => false,
                    'empty_value' => false,
                    'label'       => 'widget.statistic.form.type1.label',
                ]
            )
            ->add('showLabel1', 'checkbox', [
                    'required'              => false,
                    'label'                 => 'widget.statistic.form.showLabel1.label',
                    'widget_checkbox_label' => 'widget',
                ]
            )
            ->add('fontSize1', 'integer', [
                    'data'       => 12,
                    'required'   => false,
                    'label'      => 'widget.statistic.form.fontSize1.label',
                    'help_block' => 'widget.statistic.form.fontSize1.helpBlock',
                ]
            )
            ->add('pieSize1', 'integer', [
                    'data'       => 100,
                    'required'   => false,
                    'label'      => 'widget.statistic.form.pieSize1.label',
                    'help_block' => 'widget.statistic.form.pieSize1.helpBlock',
                ]
            )
            ->add('title1', null, [
                    'required' => false,
                    'label'    => 'widget.statistic.form.title1.label',
                ]
            )
            ->add('width1', 'integer', [
                    'data'       => 350,
                    'required'   => false,
                    'label'      => 'widget.statistic.form.width1.label',
                    'help_block' => 'widget.statistic.form.width1.helpBlock',
                ]
            )
            ->add('height1', 'integer', [
                    'data'       => 350,
                    'required'   => false,
                    'label'      => 'widget.statistic.form.height1.label',
                    'help_block' => 'widget.statistic.form.height1.helpBlock',
                ]
            )
            ->add('coordonatesYAxis1', null, [
                    'required'   => false,
                    'label'      => 'widget.statistic.form.coordonatesYAxis1.label',
                    'help_block' => 'widget.statistic.form.coordonatesYAxis1.helpBlock',
                ]
            )
            ->add('data1', 'hidden', [
                    'required' => false,
                    'label'    => 'widget.statistic.form.data1.label',
                ]
            );

        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
            $widget = $event->getData();
            $form = $event->getForm();
            $widget->setData0(serialize($widget->getData0()));

            if ($widget->getIsDoubleChart()) {
                $widget->setData1(serialize($widget->getData1()));
            } else {
                $widget->setData1('');
            }
        });
    }

    /**
     * bind form to WidgetStatistic entity.
     *
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->setDefaults([
            'data_class'         => 'Victoire\Widget\StatisticBundle\Entity\WidgetStatistic',
            'widget'             => 'statistic',
            'translation_domain' => 'victoire',
        ]);
    }

    /**
     * get form name.
     *
     * @return string The form name
     */
    public function getName()
    {
        return 'victoire_widget_form_statistic';
    }
}
