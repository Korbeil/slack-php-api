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

class UsersListGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\UsersListGetResponse200';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'JoliCode\\Slack\\Api\\Model\\UsersListGetResponse200';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\UsersListGetResponse200();
        if (property_exists($data, 'cache_ts') && $data->{'cache_ts'} !== null) {
            $object->setCacheTs($data->{'cache_ts'});
        }
        if (property_exists($data, 'members') && $data->{'members'} !== null) {
            $values = [];
            foreach ($data->{'members'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\ObjsUser', 'json', $context);
            }
            $object->setMembers($values);
        }
        if (property_exists($data, 'ok') && $data->{'ok'} !== null) {
            $object->setOk($data->{'ok'});
        }
        if (property_exists($data, 'response_metadata') && $data->{'response_metadata'} !== null) {
            $object->setResponseMetadata($this->denormalizer->denormalize($data->{'response_metadata'}, 'JoliCode\\Slack\\Api\\Model\\ObjsResponseMetadata', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCacheTs()) {
            $data->{'cache_ts'} = $object->getCacheTs();
        }
        if (null !== $object->getMembers()) {
            $values = [];
            foreach ($object->getMembers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'members'} = $values;
        }
        if (null !== $object->getOk()) {
            $data->{'ok'} = $object->getOk();
        }
        if (null !== $object->getResponseMetadata()) {
            $data->{'response_metadata'} = $this->normalizer->normalize($object->getResponseMetadata(), 'json', $context);
        }

        return $data;
    }
}
