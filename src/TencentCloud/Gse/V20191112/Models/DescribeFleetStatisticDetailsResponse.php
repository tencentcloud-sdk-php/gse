<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFleetStatisticDetails返回参数结构体
 *
 * @method array getDetailList() 获取服务部署统计详情列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetailList(array $DetailList) 设置服务部署统计详情列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取记录总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置记录总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeType() 获取统计时间类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeType(string $TimeType) 设置统计时间类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeFleetStatisticDetailsResponse extends AbstractModel
{
    /**
     * @var array 服务部署统计详情列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetailList;

    /**
     * @var integer 记录总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var string 统计时间类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeType;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $DetailList 服务部署统计详情列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 记录总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeType 统计时间类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DetailList",$param) and $param["DetailList"] !== null) {
            $this->DetailList = [];
            foreach ($param["DetailList"] as $key => $value){
                $obj = new FleetStatisticDetail();
                $obj->deserialize($value);
                array_push($this->DetailList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TimeType",$param) and $param["TimeType"] !== null) {
            $this->TimeType = $param["TimeType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
