<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: station.proto

namespace Memphisphp\Metadata;

class Station
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
station.protopb"
Station
name (	"*
MaxMessageAgeSecondsRet
seconds ("
MessagesRet
messages ("
BytesRet
bytes ("
AckBasedRet"�
RetentionOpt.
mmasret (2.pb.MaxMessageAgeSecondsRetH !
msgret (2.pb.MessagesRetH 
bret (2.pb.BytesRetH  
abret (2.pb.AckBasedRetH B

retentions"b

StorageOpt/
storageType (2.pb.StorageOpt.StorageType"#
StorageType
Disk 

Memory"
PartitionOpt
number ("y
StationOpions$
storage (2.pb.StorageOptH �(
	retention (2.pb.RetentionOptH�B

_storageB

_retention"i
CreateStationRequest
station (2.pb.Station\'
options (2.pb.StationOpionsH �B

_options"5
DestroyStationRequest
station (2.pb.StationBHZ github.com/g41797/memphisgrpc;pb�Memphisphp\\Pb�Memphisphp\\Metadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

