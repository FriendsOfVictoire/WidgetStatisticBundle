*DEPRECATED*, you should use the victoire/table-widget instead
===========

Victoire CMS Statistic Bundle
============

Need to add a statistic in a victoire cms website ?
Get this statistic bundle and so on

First you need to have a valid Symfony2 Victoire edition.
Then you just have to run the following composer command :

    php composer.phar require friendsofvictoire/statistic-bundle

Do not forget to add the bundle in your AppKernel !

    class AppKernel extends Kernel
    {
        public function registerBundles()
        {
            $bundles = array(
                ...
                new Victoire\Widget\StatisticBundle\VictoireWidgetStatisticBundle(),
            );

            return $bundles;
        }
    }
