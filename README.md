Victoire DCMS Statistic Bundle
============

##What is the purpose of this bundle

This bundle gives you access to the *Statistic Widget* which enables a graphical representation of datas.

##Set Up Victoire

If you haven't already, you can follow the steps to set up Victoire *[here](https://github.com/Victoire/victoire/blob/master/setup.md)*

##Install the Bundle

Run the following composer command :

    php composer.phar require friendsofvictoire/statistic-bundle

###Reminder

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
