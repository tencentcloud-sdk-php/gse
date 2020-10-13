<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * CreateAsset请求参数结构体
 *
 * @method string getBucketKey() 获取生成包的ZIP包名，例如：server.zip
 * @method void setBucketKey(string $BucketKey) 设置生成包的ZIP包名，例如：server.zip
 * @method string getAssetName() 获取生成包名字，最小长度为1，最大长度为64
 * @method void setAssetName(string $AssetName) 设置生成包名字，最小长度为1，最大长度为64
 * @method string getAssetVersion() 获取生成包版本，最小长度为1，最大长度为64
 * @method void setAssetVersion(string $AssetVersion) 设置生成包版本，最小长度为1，最大长度为64
 * @method string getAssetRegion() 获取生成包所在地域，详见产品支持的 [地域列表](https://cloud.tencent.com/document/api/1165/42053#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8)
 * @method void setAssetRegion(string $AssetRegion) 设置生成包所在地域，详见产品支持的 [地域列表](https://cloud.tencent.com/document/api/1165/42053#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8)
 * @method string getOperateSystem() 获取生成包可运行的操作系统，暂时只有CentOS7.16
 * @method void setOperateSystem(string $OperateSystem) 设置生成包可运行的操作系统，暂时只有CentOS7.16
 * @method string getImageId() 获取生成包支持的操作系统镜像id
 * @method void setImageId(string $ImageId) 设置生成包支持的操作系统镜像id
 */
class CreateAssetRequest extends AbstractModel
{
    /**
     * @var string 生成包的ZIP包名，例如：server.zip
     */
    public $BucketKey;

    /**
     * @var string 生成包名字，最小长度为1，最大长度为64
     */
    public $AssetName;

    /**
     * @var string 生成包版本，最小长度为1，最大长度为64
     */
    public $AssetVersion;

    /**
     * @var string 生成包所在地域，详见产品支持的 [地域列表](https://cloud.tencent.com/document/api/1165/42053#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8)
     */
    public $AssetRegion;

    /**
     * @var string 生成包可运行的操作系统，暂时只有CentOS7.16
     */
    public $OperateSystem;

    /**
     * @var string 生成包支持的操作系统镜像id
     */
    public $ImageId;

    /**
     * @param string $BucketKey 生成包的ZIP包名，例如：server.zip
     * @param string $AssetName 生成包名字，最小长度为1，最大长度为64
     * @param string $AssetVersion 生成包版本，最小长度为1，最大长度为64
     * @param string $AssetRegion 生成包所在地域，详见产品支持的 [地域列表](https://cloud.tencent.com/document/api/1165/42053#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8)
     * @param string $OperateSystem 生成包可运行的操作系统，暂时只有CentOS7.16
     * @param string $ImageId 生成包支持的操作系统镜像id
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
        if (array_key_exists("BucketKey",$param) and $param["BucketKey"] !== null) {
            $this->BucketKey = $param["BucketKey"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("AssetVersion",$param) and $param["AssetVersion"] !== null) {
            $this->AssetVersion = $param["AssetVersion"];
        }

        if (array_key_exists("AssetRegion",$param) and $param["AssetRegion"] !== null) {
            $this->AssetRegion = $param["AssetRegion"];
        }

        if (array_key_exists("OperateSystem",$param) and $param["OperateSystem"] !== null) {
            $this->OperateSystem = $param["OperateSystem"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }
    }
}
