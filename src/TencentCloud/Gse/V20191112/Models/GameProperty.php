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
 * 游戏属性详情
 *
 * @method string getKey() 获取属性名称，最大长度不超过32个ASCII字符
 * @method void setKey(string $Key) 设置属性名称，最大长度不超过32个ASCII字符
 * @method string getValue() 获取属性值，最大长度不超过96个ASCII字符
 * @method void setValue(string $Value) 设置属性值，最大长度不超过96个ASCII字符
 */
class GameProperty extends AbstractModel
{
    /**
     * @var string 属性名称，最大长度不超过32个ASCII字符
     */
    public $Key;

    /**
     * @var string 属性值，最大长度不超过96个ASCII字符
     */
    public $Value;

    /**
     * @param string $Key 属性名称，最大长度不超过32个ASCII字符
     * @param string $Value 属性值，最大长度不超过96个ASCII字符
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
