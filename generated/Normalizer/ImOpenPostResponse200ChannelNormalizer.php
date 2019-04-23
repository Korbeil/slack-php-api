<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ImOpenPostResponse200ChannelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ImOpenPostResponse200Channel';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \JoliCode\Slack\Api\Model\ImOpenPostResponse200Channel;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ImOpenPostResponse200Channel();
        $data = clone $data;
        if (property_exists($data, 'created')) {
            $object->setCreated($data->{'created'});
            unset($data->{'created'});
        }
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
            unset($data->{'id'});
        }
        if (property_exists($data, 'is_im')) {
            $object->setIsIm($data->{'is_im'});
            unset($data->{'is_im'});
        }
        if (property_exists($data, 'is_open')) {
            $object->setIsOpen($data->{'is_open'});
            unset($data->{'is_open'});
        }
        if (property_exists($data, 'last_read')) {
            $value = $data->{'last_read'};
            if (is_float($data->{'last_read'})) {
                $value = $data->{'last_read'};
            } elseif (is_string($data->{'last_read'})) {
                $value = $data->{'last_read'};
            }
            $object->setLastRead($value);
            unset($data->{'last_read'});
        }
        if (property_exists($data, 'latest')) {
            $object->setLatest($this->denormalizer->denormalize($data->{'latest'}, 'JoliCode\\Slack\\Api\\Model\\ObjsMessage', 'json', $context));
            unset($data->{'latest'});
        }
        if (property_exists($data, 'unread_count')) {
            $object->setUnreadCount($data->{'unread_count'});
            unset($data->{'unread_count'});
        }
        if (property_exists($data, 'unread_count_display')) {
            $object->setUnreadCountDisplay($data->{'unread_count_display'});
            unset($data->{'unread_count_display'});
        }
        if (property_exists($data, 'user')) {
            $object->setUser($data->{'user'});
            unset($data->{'user'});
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCreated()) {
            $data->{'created'} = $object->getCreated();
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getIsIm()) {
            $data->{'is_im'} = $object->getIsIm();
        }
        if (null !== $object->getIsOpen()) {
            $data->{'is_open'} = $object->getIsOpen();
        }
        if (null !== $object->getLastRead()) {
            $value = $object->getLastRead();
            if (is_float($object->getLastRead())) {
                $value = $object->getLastRead();
            } elseif (is_string($object->getLastRead())) {
                $value = $object->getLastRead();
            }
            $data->{'last_read'} = $value;
        }
        if (null !== $object->getLatest()) {
            $data->{'latest'} = $this->normalizer->normalize($object->getLatest(), 'json', $context);
        }
        if (null !== $object->getUnreadCount()) {
            $data->{'unread_count'} = $object->getUnreadCount();
        }
        if (null !== $object->getUnreadCountDisplay()) {
            $data->{'unread_count_display'} = $object->getUnreadCountDisplay();
        }
        if (null !== $object->getUser()) {
            $data->{'user'} = $object->getUser();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', $key)) {
                $data->{$key} = $value_1;
            }
        }

        return $data;
    }
}
