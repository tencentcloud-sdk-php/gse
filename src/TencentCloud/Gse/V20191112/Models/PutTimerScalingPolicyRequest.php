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
 * PutTimerScalingPolicy请求参数结构体
 *
 * @method TimerScalingPolicy getTimerScalingPolicy() 获取定时器策略消息
 * @method void setTimerScalingPolicy(TimerScalingPolicy $TimerScalingPolicy) 设置定时器策略消息
 */
class PutTimerScalingPolicyRequest extends AbstractModel
{
    /**
     * @var TimerScalingPolicy 定时器策略消息
     */
    public $TimerScalingPolicy;

    /**
     * @param TimerScalingPolicy $TimerScalingPolicy 定时器策略消息
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
        if (array_key_exists("TimerScalingPolicy",$param) and $param["TimerScalingPolicy"] !== null) {
            $this->TimerScalingPolicy = new TimerScalingPolicy();
            $this->TimerScalingPolicy->deserialize($param["TimerScalingPolicy"]);
        }
    }
}
