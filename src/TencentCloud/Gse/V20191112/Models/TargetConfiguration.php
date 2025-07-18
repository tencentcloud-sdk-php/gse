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
 * 基于规则的动态扩缩容配置项
 *
 * @method integer getTargetValue() 获取预留存率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetValue(integer $TargetValue) 设置预留存率
注意：此字段可能返回 null，表示取不到有效值。
 */
class TargetConfiguration extends AbstractModel
{
    /**
     * @var integer 预留存率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetValue;

    /**
     * @param integer $TargetValue 预留存率
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TargetValue",$param) and $param["TargetValue"] !== null) {
            $this->TargetValue = $param["TargetValue"];
        }
    }
}
