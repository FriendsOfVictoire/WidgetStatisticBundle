<?php

namespace Victoire\Widget\StatisticBundle\Controller;

use AppVentus\Awesome\ShortcutsBundle\Controller\AwesomeController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Victoire\Widget\StatisticBundle\Entity\WidgetStatistic;

/**
 * StatisticController.
 *
 * @Route("/statistic")
 */
class StatisticController extends AwesomeController
{
    /**
     * renderTypeFormAction.
     *
     * @param Request $request
     *
     * @Route("/type/form", name="statistic_render_type_form")
     *
     * @return partialRender
     */
    public function renderTypeFormAction(Request $request)
    {
        if ($this->get('request')->isXmlHttpRequest()) {
            $widgetId = $request->request->get('widgetId');
            $graphType = $request->request->get('type');
            $graphIndex = $request->request->get('index');
            $widget = new WidgetStatistic();

            if ($widgetId != null) {
                $widgetRepository = $this->getDoctrine()
                    ->getRepository('VictoireWidgetBundle:Widget');
                $widget = $widgetRepository->findOneById($widgetId);

                $widgetType = $widget->getTypeByIndex($graphIndex);

                if ($graphType != $widgetType) {
                    $widget->setDataByIndex('', $graphIndex);
                }
            }

            return $this->render(
                'VictoireWidgetStatisticBundle::_'.$graphType.'Form.html.twig', [
                    'values' => $widget,
                    'index'  => $graphIndex,
                ]
            );
        }
    }
}
