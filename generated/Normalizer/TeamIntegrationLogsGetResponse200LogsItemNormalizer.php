<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TeamIntegrationLogsGetResponse200LogsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\TeamIntegrationLogsGetResponse200LogsItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'JoliCode\\Slack\\Api\\Model\\TeamIntegrationLogsGetResponse200LogsItem';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\TeamIntegrationLogsGetResponse200LogsItem();
        if (property_exists($data, 'admin_app_id') && $data->{'admin_app_id'} !== null) {
            $object->setAdminAppId($data->{'admin_app_id'});
        }
        if (property_exists($data, 'app_id') && $data->{'app_id'} !== null) {
            $object->setAppId($data->{'app_id'});
        }
        if (property_exists($data, 'app_type') && $data->{'app_type'} !== null) {
            $object->setAppType($data->{'app_type'});
        }
        if (property_exists($data, 'change_type') && $data->{'change_type'} !== null) {
            $object->setChangeType($data->{'change_type'});
        }
        if (property_exists($data, 'channel') && $data->{'channel'} !== null) {
            $object->setChannel($data->{'channel'});
        }
        if (property_exists($data, 'date') && $data->{'date'} !== null) {
            $object->setDate($data->{'date'});
        }
        if (property_exists($data, 'scope') && $data->{'scope'} !== null) {
            $object->setScope($data->{'scope'});
        }
        if (property_exists($data, 'service_id') && $data->{'service_id'} !== null) {
            $object->setServiceId($data->{'service_id'});
        }
        if (property_exists($data, 'service_type') && $data->{'service_type'} !== null) {
            $object->setServiceType($data->{'service_type'});
        }
        if (property_exists($data, 'user_id') && $data->{'user_id'} !== null) {
            $object->setUserId($data->{'user_id'});
        }
        if (property_exists($data, 'user_name') && $data->{'user_name'} !== null) {
            $object->setUserName($data->{'user_name'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAdminAppId()) {
            $data->{'admin_app_id'} = $object->getAdminAppId();
        }
        if (null !== $object->getAppId()) {
            $data->{'app_id'} = $object->getAppId();
        }
        if (null !== $object->getAppType()) {
            $data->{'app_type'} = $object->getAppType();
        }
        if (null !== $object->getChangeType()) {
            $data->{'change_type'} = $object->getChangeType();
        }
        if (null !== $object->getChannel()) {
            $data->{'channel'} = $object->getChannel();
        }
        if (null !== $object->getDate()) {
            $data->{'date'} = $object->getDate();
        }
        if (null !== $object->getScope()) {
            $data->{'scope'} = $object->getScope();
        }
        if (null !== $object->getServiceId()) {
            $data->{'service_id'} = $object->getServiceId();
        }
        if (null !== $object->getServiceType()) {
            $data->{'service_type'} = $object->getServiceType();
        }
        if (null !== $object->getUserId()) {
            $data->{'user_id'} = $object->getUserId();
        }
        if (null !== $object->getUserName()) {
            $data->{'user_name'} = $object->getUserName();
        }

        return $data;
    }
}
