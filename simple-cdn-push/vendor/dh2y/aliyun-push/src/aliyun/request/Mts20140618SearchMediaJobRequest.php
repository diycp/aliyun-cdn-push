<?php
/**
 * TOP API: mts.aliyuncs.com.SearchMediaJob.2014-06-18 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Mts20140618SearchMediaJobRequest
{
	/** 
	 * 创建作业时间的上限，日期格式按照ISO8601标准表示，并需要使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ 例如，2014-01-11T12:00:00Z（为北京时间2014年1月11日20点0分0秒）
	 **/
	private $endOfJobCreatedTimeRange;
	
	/** 
	 * 当前页号
	 **/
	private $pageNumber;
	
	/** 
	 * 分页查询时设置的每页行数页面大小
	 **/
	private $pageSize;
	
	/** 
	 * 创建作业时间范围中的下限值，日期格式按照ISO8601标准表示，并需要使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ  例如，2014-01-10T12:00:00Z（为北京时间2014年1月10日20点0分0秒）
	 **/
	private $startOfJobCreatedTimeRange;
	
	/** 
	 * 媒资作业状态：All表示所有状态，Submitted表示作业已经提交，Transcoding表示转码中，TranscodeSuccess表示转码成功，TranscodeFail表示转码失败，TranscodeCancelled表示转码取消
	 **/
	private $state;
	
	/**
	 * 仅用于渠道商发起API调用时，指定访问的资源拥有者的ID
	 **/
	private $ownerId;
	
	/**
	 *仅用于渠道商发起API调用时，指定访问的资源拥有者的账号
	 **/
    private  $ownerAccount;
    
    /**
     *API调用者试图通过API调用来访问别人拥有但已经授权给他的资源时，
     *通过使用该参数来声明此次操作涉及到的资源是谁名下的,该参数仅官网用户可用
     **/
    private $resourceOwnerAccount;
    
	private $apiParas = array();
	
	public function setEndOfJobCreatedTimeRange($endOfJobCreatedTimeRange)
	{
		$this->endOfJobCreatedTimeRange = $endOfJobCreatedTimeRange;
		$this->apiParas["EndOfJobCreatedTimeRange"] = $endOfJobCreatedTimeRange;
	}

	public function getEndOfJobCreatedTimeRange()
	{
		return $this->endOfJobCreatedTimeRange;
	}

	public function setPageNumber($pageNumber)
	{
		$this->pageNumber = $pageNumber;
		$this->apiParas["PageNumber"] = $pageNumber;
	}

	public function getPageNumber()
	{
		return $this->pageNumber;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["PageSize"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setStartOfJobCreatedTimeRange($startOfJobCreatedTimeRange)
	{
		$this->startOfJobCreatedTimeRange = $startOfJobCreatedTimeRange;
		$this->apiParas["StartOfJobCreatedTimeRange"] = $startOfJobCreatedTimeRange;
	}

	public function getStartOfJobCreatedTimeRange()
	{
		return $this->startOfJobCreatedTimeRange;
	}

	public function setState($state)
	{
		$this->state = $state;
		$this->apiParas["State"] = $state;
	}

	public function getState()
	{
		return $this->state;
	}

	
	public function setOwnerId($ownerId)
	{
		$this->ownerId = $ownerId;
		$this->apiParas["OwnerId"] = $ownerId;
	}
	
	public function getOwnerId()
	{
		return $this->ownerId;
	}
	
	public function setOwnerAccount($ownerAccount)
	{
		$this->ownerAccount = $ownerAccount;
		$this->apiParas["OwnerAccount"] = $ownerAccount;
	}
	
	public function getOwnerAccount()
	{
		return $this->ownerAccount;
	}
	
	public function setResourceOwnerAccount($resourceOwnerAccount)
	{
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->apiParas["ResourceOwnerAccount"] = $resourceOwnerAccount;
	}
	
	public function getResourceOwnerAccount()
	{
		return $this->resourceOwnerAccount;
	}

	public function getApiMethodName()
	{
		return "mts.aliyuncs.com.SearchMediaJob.2014-06-18";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}