<?php

namespace Com\Pdd\Pop\Sdk\Api\Request;

use Com\Pdd\Pop\Sdk\PopBaseHttpRequest;
use Com\Pdd\Pop\Sdk\PopBaseJsonEntity;

class PddDdkGoodsPromotionRightAuthRequest extends PopBaseHttpRequest
{
    public function __construct()
    {

    }

    /**
     * @JsonProperty(STRING, "demo_url")
     */
    private $demoUrl;

    /**
     * @JsonProperty(Long, "duo_id")
     */
    private $duoId;

    /**
     * @JsonProperty(Long, "goods_id")
     */
    private $goodsId;

    /**
     * @JsonProperty(List<String>, "mall_certificate_url")
     */
    private $mallCertificateUrl;

    /**
     * @JsonProperty(String, "promotion_code_url")
     */
    private $promotionCodeUrl;

    /**
     * @JsonProperty(Long, "promotion_end_time")
     */
    private $promotionEndTime;

    /**
     * @JsonProperty(Long, "promotion_start_time")
     */
    private $promotionStartTime;

    /**
     * @JsonProperty(List<String>, "thumb_pic_url")
     */
    protected $thumbPicUrl;

    protected function setUserParams(&$params)
    {
        $this->setUserParam($params, "demo_url", $this->demoUrl);
        $this->setUserParam($params, "duo_id", $this->duoId);
        $this->setUserParam($params, "goods_id", $this->goodsId);
        $this->setUserParam($params, "mall_certificate_url", $this->mallCertificateUrl);
        $this->setUserParam($params, "promotion_code_url", $this->promotionCodeUrl);
        $this->setUserParam($params, "promotion_end_time", $this->promotionEndTime);
        $this->setUserParam($params, "promotion_start_time", $this->promotionStartTime);
        $this->setUserParam($params, "thumb_pic_url", $this->thumbPicUrl);

    }

    public function getVersion()
    {
        return "V1";
    }

    public function getDataType()
    {
        return "JSON";
    }

    public function getType()
    {
        return "pdd.ddk.goods.promotion.right.auth";
    }

    public function setDemoUrl($demoUrl)
    {
        $this->demoUrl = $demoUrl;
    }

    public function setDuoId($duoId)
    {
        $this->duoId = $duoId;
    }

    public function setGoodsId($goodsId)
    {
        $this->goodsId = $goodsId;
    }

    public function setMallCertificateUrl($mallCertificateUrl)
    {
        $this->mallCertificateUrl = $mallCertificateUrl;
    }

    public function setPromotionCodeUrl($promotionCodeUrl)
    {
        $this->promotionCodeUrl = $promotionCodeUrl;
    }

    public function setPromotionEndTime($promotionEndTime)
    {
        $this->promotionEndTime = $promotionEndTime;
    }

    public function setPromotionStartTime($promotionStartTime)
    {
        $this->promotionStartTime = $promotionStartTime;
    }

    public function setThumbPicUrl($thumbPicUrl)
    {
        $this->thumbPicUrl = $thumbPicUrl;
    }
}
