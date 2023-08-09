<?php

namespace Com\Pdd\Pop\Sdk\Api\Request;

use Com\Pdd\Pop\Sdk\PopBaseHttpRequest;
use Com\Pdd\Pop\Sdk\PopBaseJsonEntity;

class PddDdkPromotionGoodsQueryRequest extends PopBaseHttpRequest
{
    public function __construct()
    {

    }

    /**
     * @JsonProperty(Long, "goods_id")
     */
    private $goodsId;

    /**
     * @JsonProperty(Long, "$mall_id")
     */
    private $mallId;

    /**
     * @JsonProperty(Integer, "page_number")
     */
    private $pageNumber;

    /**
     * @JsonProperty(Integer, "page_size")
     */
    private $pageSize;

    /**
     * @JsonProperty(List<String>, "status_list")
     */
    private $statusList;

    /**
     * @JsonProperty(Long, "update_end_time")
     */
    private $updateEndTime;

    /**
     * @JsonProperty(Long, "update_start_time")
     */
    private $updateStartTime;


    protected function setUserParams(&$params)
    {
        $this->setUserParam($params, "goods_id", $this->goodsId);
        $this->setUserParam($params, "mall_id", $this->mallId);
        $this->setUserParam($params, "page_number", $this->pageNumber);
        $this->setUserParam($params, "page_size", $this->pageSize);
        $this->setUserParam($params, "status_list", $this->statusList);
        $this->setUserParam($params, "update_end_time", $this->updateEndTime);
        $this->setUserParam($params, "update_start_time", $this->updateStartTime);

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
        return "pdd.ddk.promotion.goods.query";
    }

    public function setGoodsId($goodsId)
    {
        $this->goodsId = $goodsId;
    }

    public function setMallId($mallId)
    {
        $this->mallId = $mallId;
    }

    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    public function setStatusList($statusList)
    {
        $this->statusList = $statusList;
    }

    public function setUpdateEndTime($updateEndTime)
    {
        $this->updateEndTime = $updateEndTime;
    }

    public function setUpdateStartTime($updateStartTime)
    {
        $this->updateStartTime = $updateStartTime;
    }
}
