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

class ReactionsGetGetResponse200Item0Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ReactionsGetGetResponse200Item0';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ReactionsGetGetResponse200Item0';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ReactionsGetGetResponse200Item0();
        if (property_exists($data, 'channel') && $data->{'channel'} !== null) {
            $object->setChannel($data->{'channel'});
        }
        if (property_exists($data, 'message') && $data->{'message'} !== null) {
            $object->setMessage($this->denormalizer->denormalize($data->{'message'}, 'JoliCode\\Slack\\Api\\Model\\ObjsMessage', 'json', $context));
        }
        if (property_exists($data, 'ok') && $data->{'ok'} !== null) {
            $object->setOk($data->{'ok'});
        }
        if (property_exists($data, 'type') && $data->{'type'} !== null) {
            $object->setType($data->{'type'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getChannel()) {
            $data->{'channel'} = $object->getChannel();
        }
        if (null !== $object->getMessage()) {
            $data->{'message'} = $this->normalizer->normalize($object->getMessage(), 'json', $context);
        }
        if (null !== $object->getOk()) {
            $data->{'ok'} = $object->getOk();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }

        return $data;
    }
}
