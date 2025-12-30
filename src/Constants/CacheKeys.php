<?php

namespace Fatehan\Constants;

class CacheKeys
{
    public const CACHE_DEVICE_ALERT = "device:alerts";
    public const CACHE_DEVICE_EVENT_LIST = "device:events";
    public const CACHE_AREA_ODYSSEY = "area:odyssey";
    public const CACHE_AREA_FUSION = "area:fusion";
    public const CACHE_ALERT_IS_RUNNING = "alert:running";
    public const CACHE_DEVICE_HEARTBEAT = "device:heartbeat";
    public const CACHE_DEVICE_AUTHORIZE = "device:authorize";

    /**
     * (odyssey) map[PersonalAccessTokenId]com.fatehan.identities.Auth
     */
    public const CACHE_IDENTITY_AUTHORIZE = "identity:authorize";

    public const CACHE_TRIP_QUEUE_ODYSSEY = "trips:queue:odyssey";
    public const CACHE_TRIP_QUEUE_FUSION = "trips:queue:fusion";
    public const CACHE_ORGANIZATIONS_JSON = "organizations:json";
    public const CACHE_WALLET_JSON = "wallet:json";
    public const CACHE_CAR_FUSION = "cars:fusion";
    public const CACHE_OPERATION_FUSION = "operation:fusion";
    public const CACHE_OPERATION_MILEAGE = "operation:mileage";
    public const CHANNEL_DEVICE_POOL = "channel:device:pool";
    public const CACHE_SYSTEM_IO_JSON = "device:ios";
    public const CACHE_CONFIG_LIST = "config:list";
    public const CACHE_WORKFLOW_TASK = "workflow:task";
    public const CACHE_USER_NOTIFY_CONTACT = "user:notify:contact";
    public const AUTHENTICATION_OTP_ATTEMPT = "auth:otp:attempt";
    public const AUTHENTICATION_IDENTITIES = "auth:identities";
    public const AUTHENTICATION_ACCESS_TOKEN = "auth:access:token";
    public const GOOGLE_AUTH_CREDENTIAL = "google:auth:credential";
    public const TELEGRAM_AUTH_CREDENTIAL = "telegram:auth:credential";
    public const GO_AU_APPLICATION_AUTHORIZE = "application:authorize";
    public const EVENT_IS_RUNNING = "event:running";
    public const DATA_PACKET_TPMS_MODULE = "data:module:tmps";
    public const QR_CODE_TOKEN_HOLDER = "qrcode:token:holder";

    // Deprecated keys kept for compatibility
    public const CACHE_USER_PERSON_LIST_JSON = "user:person:list:json";
    public const CACHE_ROLE_PERMISSION = "fatehan_database_object:permissions";
    public const CACHE_PEOPLE_ROLE_ID = "fatehan_database_odyssey:people:roles";
}