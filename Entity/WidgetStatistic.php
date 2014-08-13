<?php
namespace Victoire\Widget\StatisticBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Victoire\Bundle\WidgetBundle\Entity\Widget;
/**
 * WidgetStatistic
 *
 * @ORM\Table("vic_widget_statistic")
 * @ORM\Entity
 */
class WidgetStatistic extends Widget
{

    /**
     * @var string
     *
     * @ORM\Column(name="type_0", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Regex("/^(pie|line|column)$/")
     */
    protected $type0;

    /**
     * @var boolean
     *
     * @ORM\Column(name="show_label_0", type="boolean")
     */
    protected $showLabel0;

    /**
     * @var integer
     *
     * @ORM\Column(name="font_size_0", type="integer")
     * @Assert\NotBlank()
     */
    protected $fontSize0;

    /**
     * @var integer
     *
     * @ORM\Column(name="pie_size_0", type="integer")
     * @Assert\NotBlank()
     */
    protected $pieSize0;

    /**
     * @var string
     *
     * @ORM\Column(name="title_0", type="string", length=255)
     * @Assert\NotBlank()
     */
    protected $title0;

    /**
     * @var integer
     *
     * @ORM\Column(name="width_0", type="integer")
     * @Assert\NotBlank()
     * @Assert\Range(
     *      min = 200,
     *      max = 800
     * )
     */
    protected $width0;

    /**
     * @var integer
     *
     * @ORM\Column(name="height_0", type="integer")
     * @Assert\NotBlank()
     * @Assert\Range(
     *      min = 200
     * )
     */
    protected $height0;

    /**
     * @var string
     *
     * @ORM\Column(name="coordonates_y_axis_0", type="string", length=255, nullable=true)
     */
    protected $coordonatesYAxis0;

    /**
     * @var string
     *
     * @ORM\Column(name="data_0", type="text")
     */
    protected $data0;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_double_chart", type="boolean")
     */
    protected $isDoubleChart;

    /**
     * @var string
     *
     * @ORM\Column(name="type_1", type="string", length=255, nullable=true)
     * @Assert\Regex("/^(pie|line|column)$/")
     */
    protected $type1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="show_label_1", type="boolean", nullable=true)
     */
    protected $showLabel1;

    /**
     * @var string
     *
     * @ORM\Column(name="title_1", type="string", length=255, nullable=true)
     */
    protected $title1;

    /**
     * @var integer
     *
     * @ORM\Column(name="font_size_1", type="integer", nullable=true)
     */
    protected $fontSize1;

    /**
     * @var integer
     *
     * @ORM\Column(name="pie_size_1", type="integer", nullable=true)
     */
    protected $pieSize1;

    /**
     * @var integer
     *
     * @ORM\Column(name="width_1", type="integer", nullable=true)
     * @Assert\Range(
     *      min = 200,
     *      max = 800
     * )
     */
    protected $width1;

    /**
     * @var integer
     *
     * @ORM\Column(name="height_1", type="integer", nullable=true)
     * @Assert\Range(
     *      min = 200
     * )
     */
    protected $height1;

    /**
     * @var string
     *
     * @ORM\Column(name="coordonates_y_axis_1", type="string", length=255, nullable=true)
     */
    protected $coordonatesYAxis1;

    /**
     * @var string
     *
     * @ORM\Column(name="data_1", type="text", nullable=true)
     */
    protected $data1;

    public function __construct()
    {
        $this->type0 = 'pie';
        $this->type1 = 'pie';
    }

    /**
     * To String function
     * Used in render choices type (Especially in VictoireWidgetRenderBundle)
     * //TODO Check the generated value and make it more consistent
     *
     * @return String
     */
    public function __toString()
    {
        return '#'.$this->id.' - '.$this->id;
    }

    /**
     * Set type0
     *
     * @param string $type0
     */
    public function setType0($type0)
    {
        $this->type0 = $type0;

        return $this;
    }

    /**
     * Get type0
     *
     * @return string
     */
    public function getType0()
    {
        return $this->type0;
    }

    /**
     * Set showLabel0
     *
     * @param string $showLabel0
     */
    public function setShowlabel0($showLabel0)
    {
        $this->showLabel0 = $showLabel0;

        return $this;
    }

    /**
     * Get showLabel0
     *
     * @return string
     */
    public function getShowlabel0()
    {
        return $this->showLabel0;
    }

    /**
     * Set fontSize0
     *
     * @param string $fontSize0
     */
    public function setFontSize0($fontSize0)
    {
        $this->fontSize0 = $fontSize0;

        return $this;
    }

    /**
     * Get fontSize0
     *
     * @return string
     */
    public function getFontSize0()
    {
        return $this->fontSize0;
    }

    /**
     * Set pieSize0
     *
     * @param string $pieSize0
     */
    public function setPiesize0($pieSize0)
    {
        $this->pieSize0 = $pieSize0;

        return $this;
    }

    /**
     * Get pieSize0
     *
     * @return string
     */
    public function getPiesize0()
    {
        return $this->pieSize0;
    }

    /**
     * Set title0
     *
     * @param string $title0
     */
    public function setTitle0($title0)
    {
        $this->title0 = $title0;

        return $this;
    }

    /**
     * Get title0
     *
     * @return string
     */
    public function getTitle0()
    {
        return $this->title0;
    }

    /**
     * Set width0
     *
     * @param string $width0
     */
    public function setWidth0($width0)
    {
        $this->width0 = $width0;

        return $this;
    }

    /**
     * Get width0
     *
     * @return string
     */
    public function getWidth0()
    {
        return $this->width0;
    }

    /**
     * Set height0
     *
     * @param string $height0
     */
    public function setHeight0($height0)
    {
        $this->height0 = $height0;

        return $this;
    }

    /**
     * Get height0
     *
     * @return string
     */
    public function getHeight0()
    {
        return $this->height0;
    }

    /**
     * Set coordonatesYAxis0
     *
     * @param string $coordonatesYAxis0
     */
    public function setCoordonatesyaxis0($coordonatesYAxis0)
    {
        $this->coordonatesYAxis0 = $coordonatesYAxis0;

        return $this;
    }

    /**
     * Get coordonatesYAxis0
     *
     * @return string
     */
    public function getCoordonatesyaxis0()
    {
        return $this->coordonatesYAxis0;
    }

    /**
     * Set data0
     *
     * @param string $data0
     */
    public function setData0($data0)
    {
        $this->data0 = $data0;

        return $this;
    }

    /**
     * Get data0
     *
     * @return string
     */
    public function getData0()
    {
        return $this->data0;
    }

    /**
     * Set isDoubleChart
     *
     * @param string $isDoubleChart
     */
    public function setIsdoublechart($isDoubleChart)
    {
        $this->isDoubleChart = $isDoubleChart;

        return $this;
    }

    /**
     * Get isDoubleChart
     *
     * @return string
     */
    public function getIsdoublechart()
    {
        return $this->isDoubleChart;
    }

    /**
     * Set type1
     *
     * @param string $type1
     */
    public function setType1($type1)
    {
        $this->type1 = $type1;

        return $this;
    }

    /**
     * Get type1
     *
     * @return string
     */
    public function getType1()
    {
        return $this->type1;
    }

    /**
     * Set showLabel1
     *
     * @param string $showLabel1
     */
    public function setShowlabel1($showLabel1)
    {
        $this->showLabel1 = $showLabel1;

        return $this;
    }

    /**
     * Get showLabel1
     *
     * @return string
     */
    public function getShowlabel1()
    {
        return $this->showLabel1;
    }

    /**
     * Set title1
     *
     * @param string $title1
     */
    public function setTitle1($title1)
    {
        $this->title1 = $title1;

        return $this;
    }

    /**
     * Get title1
     *
     * @return string
     */
    public function getTitle1()
    {
        return $this->title1;
    }

    /**
     * Set fontSize1
     *
     * @param string $fontSize1
     */
    public function setFontSize1($fontSize1)
    {
        $this->fontSize1 = $fontSize1;

        return $this;
    }

    /**
     * Get fontSize1
     *
     * @return string
     */
    public function getFontSize1()
    {
        return $this->fontSize1;
    }

    /**
     * Set pieSize1
     *
     * @param string $pieSize1
     */
    public function setPiesize1($pieSize1)
    {
        $this->pieSize1 = $pieSize1;

        return $this;
    }

    /**
     * Get pieSize1
     *
     * @return string
     */
    public function getPiesize1()
    {
        return $this->pieSize1;
    }

    /**
     * Set width1
     *
     * @param string $width1
     */
    public function setWidth1($width1)
    {
        $this->width1 = $width1;

        return $this;
    }

    /**
     * Get width1
     *
     * @return string
     */
    public function getWidth1()
    {
        return $this->width1;
    }

    /**
     * Set height1
     *
     * @param string $height1
     */
    public function setHeight1($height1)
    {
        $this->height1 = $height1;

        return $this;
    }

    /**
     * Get height1
     *
     * @return string
     */
    public function getHeight1()
    {
        return $this->height1;
    }

    /**
     * Set coordonatesYAxis1
     *
     * @param string $coordonatesYAxis1
     */
    public function setCoordonatesyaxis1($coordonatesYAxis1)
    {
        $this->coordonatesYAxis1 = $coordonatesYAxis1;

        return $this;
    }

    /**
     * Get coordonatesYAxis1
     *
     * @return string
     */
    public function getCoordonatesyaxis1()
    {
        return $this->coordonatesYAxis1;
    }

    /**
     * Set data1
     *
     * @param string $data1
     */
    public function setData1($data1)
    {
        $this->data1 = $data1;

        return $this;
    }

    /**
     * Get data1
     *
     * @return string
     */
    public function getData1()
    {
        return $this->data1;
    }

    /**
     * Get type of index
     *
     * @return string
     */
    public function getTypeByIndex($index)
    {
        if ($index == 0) {
            return $this->type0;
        } else {
            return $this->type1;
        }
    }

    /**
     * Set data of index
     *
     * @param string $data
     */
    public function setDataByIndex($data, $index)
    {
        if ($index == 0) {
            $this->data0 = $data;
        } else {
            $this->data1 = $data;
        }
    }
}
