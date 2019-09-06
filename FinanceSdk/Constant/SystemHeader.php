<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace FinanceSdk\Constant;

/**
 * 系统HTTP头常量
 */
class SystemHeader {
    //签名Header
    const X_CA_SIGNATURE = "signData";
    //所有参与签名的Header
    const X_CA_SIGNATURE_HEADERS = "sn_fields";
    //请求时间戳
    const X_CA_TIMESTAMP = "sn_timestamp";
    //请求标识
    const X_CA_NONCE = "sn_client_no";
    //APP KEY
    const X_CA_KEY = "sn_appKey";
}
