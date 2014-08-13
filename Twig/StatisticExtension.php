<?php
namespace Victoire\Widget\StatisticBundle\Twig;

class StatisticExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'camelize' => new \Twig_SimpleFilter('camelize', array($this, 'camelizeFilter')),
            'unset_header' => new \Twig_SimpleFilter('unset_header', array($this, 'unsetHeaderFilter')),
            'get_headers' => new \Twig_SimpleFilter('get_headers', array($this, 'getHeadersFilter')),
            'get_datas' => new \Twig_SimpleFilter('get_datas', array($this, 'getDatasFilter')),
        );
    }

    /**
     * register twig functions
     *
     * @return array The list of extensions
     */
    public function getFunctions()
    {
        return array(
            'remove_quote_from_array'           => new \Twig_Function_Method($this, 'removeQuoteFromArray', array('is_safe' => array('html'))),
            'statistic_form_preg_replace'           => new \Twig_Function_Method($this, 'statisticFormPregReplace', array('is_safe' => array('html'))),
            'data_unserialize'           => new \Twig_Function_Method($this, 'dataUnserialize', array('is_safe' => array('html'))),
            'pie_highchartilize_data'           => new \Twig_Function_Method($this, 'pieHighchartilizeData', array('is_safe' => array('html'))),

        );
    }

    public function removeQuoteFromArray($val,$key = null){
        return preg_replace("/\'/","",$val);
    }

    public function statisticFormPregReplace($name){
        return preg_replace("/-|\[|\]/","",$name);
    }

    public function dataUnserialize($data){
        return unserialize($data);
    }

    public function camelizeFilter($id) {
        return strtr(ucwords(strtr($id, array('_' => ' ', '.' => '_ ', '\\' => '_ '))), array(' ' => ''));
    }

    public function unsetHeaderFilter($data) {
        unset($data['header']);
        return $data;
    }

    public function getHeadersFilter($data, $index) {
        $data = unserialize($data);
        $headers = array();
        if(!empty($data['header']) && is_array($data['header'])){
            $headers = $data['header'];
        }
        return implode("','",$headers);
    }

    public function getDatasFilter($data, $index) {
        $data = unserialize($data);
        $data = $this->unsetHeaderFilter($data);
        $datas = array();
        foreach($data as $d){
            if(!empty($d["key"]) && !empty($d["values"]))
                $datas[] = "{name: '".preg_replace("/\'/","",$d["key"])."', data: [".implode(",",$d["values"])."]}";
        }
        return implode(",",$datas);
    }

    public function pieHighchartilizeData($data, $index)
    {
        $data = unserialize($data);
        if(is_array($data)) {
            $result = array();
            foreach($data as $key => $value){
                if($value['key'] != '' && $value['value'] != null) {
                    $result[] = "['".$value['key']."', ".$value['value']."]";
                }
            }
            return implode(",", $result);
        }
        return null;
        
    }

    public function getName()
    {
        return 'statistic_extension';
    }
}