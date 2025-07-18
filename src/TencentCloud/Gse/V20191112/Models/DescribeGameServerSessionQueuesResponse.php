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
 * DescribeGameServerSessionQueues返回参数结构体
 *
 * @method array getGameServerSessionQueues() 获取游戏服务器会话队列数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGameServerSessionQueues(array $GameServerSessionQueues) 设置游戏服务器会话队列数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取游戏服务器会话队列总数
 * @method void setTotalCount(integer $TotalCount) 设置游戏服务器会话队列总数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeGameServerSessionQueuesResponse extends AbstractModel
{
    /**
     * @var array 游戏服务器会话队列数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GameServerSessionQueues;

    /**
     * @var integer 游戏服务器会话队列总数
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $GameServerSessionQueues 游戏服务器会话队列数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 游戏服务器会话队列总数
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
        if (array_key_exists("GameServerSessionQueues",$param) and $param["GameServerSessionQueues"] !== null) {
            $this->GameServerSessionQueues = [];
            foreach ($param["GameServerSessionQueues"] as $key => $value){
                $obj = new GameServerSessionQueue();
                $obj->deserialize($value);
                array_push($this->GameServerSessionQueues, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
