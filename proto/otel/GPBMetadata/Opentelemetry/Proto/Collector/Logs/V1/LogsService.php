<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opentelemetry/proto/collector/logs/v1/logs_service.proto

namespace GPBMetadata\Opentelemetry\Proto\Collector\Logs\V1;

class LogsService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Opentelemetry\Proto\Logs\V1\Logs::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
8opentelemetry/proto/collector/logs/v1/logs_service.proto%opentelemetry.proto.collector.logs.v1"\\
ExportLogsServiceRequest@
resource_logs (2).opentelemetry.proto.logs.v1.ResourceLogs"
ExportLogsServiceResponse2�
LogsService�
Export?.opentelemetry.proto.collector.logs.v1.ExportLogsServiceRequest@.opentelemetry.proto.collector.logs.v1.ExportLogsServiceResponse" Bp
(io.opentelemetry.proto.collector.logs.v1BLogsServiceProtoPZ0go.opentelemetry.io/proto/otlp/collector/logs/v1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

