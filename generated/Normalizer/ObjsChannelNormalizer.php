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

class ObjsChannelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsChannel';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ObjsChannel';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsChannel();
        if (property_exists($data, 'accepted_user') && $data->{'accepted_user'} !== null) {
            $object->setAcceptedUser($data->{'accepted_user'});
        }
        if (property_exists($data, 'created') && $data->{'created'} !== null) {
            $object->setCreated($data->{'created'});
        }
        if (property_exists($data, 'creator') && $data->{'creator'} !== null) {
            $object->setCreator($data->{'creator'});
        }
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'is_archived') && $data->{'is_archived'} !== null) {
            $object->setIsArchived($data->{'is_archived'});
        }
        if (property_exists($data, 'is_channel') && $data->{'is_channel'} !== null) {
            $object->setIsChannel($data->{'is_channel'});
        }
        if (property_exists($data, 'is_general') && $data->{'is_general'} !== null) {
            $object->setIsGeneral($data->{'is_general'});
        }
        if (property_exists($data, 'is_member') && $data->{'is_member'} !== null) {
            $object->setIsMember($data->{'is_member'});
        }
        if (property_exists($data, 'is_moved') && $data->{'is_moved'} !== null) {
            $object->setIsMoved($data->{'is_moved'});
        }
        if (property_exists($data, 'is_mpim') && $data->{'is_mpim'} !== null) {
            $object->setIsMpim($data->{'is_mpim'});
        }
        if (property_exists($data, 'is_org_shared') && $data->{'is_org_shared'} !== null) {
            $object->setIsOrgShared($data->{'is_org_shared'});
        }
        if (property_exists($data, 'is_pending_ext_shared') && $data->{'is_pending_ext_shared'} !== null) {
            $object->setIsPendingExtShared($data->{'is_pending_ext_shared'});
        }
        if (property_exists($data, 'is_private') && $data->{'is_private'} !== null) {
            $object->setIsPrivate($data->{'is_private'});
        }
        if (property_exists($data, 'is_read_only') && $data->{'is_read_only'} !== null) {
            $object->setIsReadOnly($data->{'is_read_only'});
        }
        if (property_exists($data, 'is_shared') && $data->{'is_shared'} !== null) {
            $object->setIsShared($data->{'is_shared'});
        }
        if (property_exists($data, 'last_read') && $data->{'last_read'} !== null) {
            $object->setLastRead($data->{'last_read'});
        }
        if (property_exists($data, 'latest') && $data->{'latest'} !== null) {
            $object->setLatest($data->{'latest'});
        }
        if (property_exists($data, 'members') && $data->{'members'} !== null) {
            $values = [];
            foreach ($data->{'members'} as $value) {
                $values[] = $value;
            }
            $object->setMembers($values);
        }
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'name_normalized') && $data->{'name_normalized'} !== null) {
            $object->setNameNormalized($data->{'name_normalized'});
        }
        if (property_exists($data, 'num_members') && $data->{'num_members'} !== null) {
            $object->setNumMembers($data->{'num_members'});
        }
        if (property_exists($data, 'pending_shared') && $data->{'pending_shared'} !== null) {
            $values_1 = [];
            foreach ($data->{'pending_shared'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setPendingShared($values_1);
        }
        if (property_exists($data, 'previous_names') && $data->{'previous_names'} !== null) {
            $values_2 = [];
            foreach ($data->{'previous_names'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setPreviousNames($values_2);
        }
        if (property_exists($data, 'priority') && $data->{'priority'} !== null) {
            $object->setPriority($data->{'priority'});
        }
        if (property_exists($data, 'purpose') && $data->{'purpose'} !== null) {
            $object->setPurpose($this->denormalizer->denormalize($data->{'purpose'}, 'JoliCode\\Slack\\Api\\Model\\ObjsChannelPurpose', 'json', $context));
        }
        if (property_exists($data, 'topic') && $data->{'topic'} !== null) {
            $object->setTopic($this->denormalizer->denormalize($data->{'topic'}, 'JoliCode\\Slack\\Api\\Model\\ObjsChannelTopic', 'json', $context));
        }
        if (property_exists($data, 'unlinked') && $data->{'unlinked'} !== null) {
            $object->setUnlinked($data->{'unlinked'});
        }
        if (property_exists($data, 'unread_count') && $data->{'unread_count'} !== null) {
            $object->setUnreadCount($data->{'unread_count'});
        }
        if (property_exists($data, 'unread_count_display') && $data->{'unread_count_display'} !== null) {
            $object->setUnreadCountDisplay($data->{'unread_count_display'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAcceptedUser()) {
            $data->{'accepted_user'} = $object->getAcceptedUser();
        }
        if (null !== $object->getCreated()) {
            $data->{'created'} = $object->getCreated();
        }
        if (null !== $object->getCreator()) {
            $data->{'creator'} = $object->getCreator();
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getIsArchived()) {
            $data->{'is_archived'} = $object->getIsArchived();
        }
        if (null !== $object->getIsChannel()) {
            $data->{'is_channel'} = $object->getIsChannel();
        }
        if (null !== $object->getIsGeneral()) {
            $data->{'is_general'} = $object->getIsGeneral();
        }
        if (null !== $object->getIsMember()) {
            $data->{'is_member'} = $object->getIsMember();
        }
        if (null !== $object->getIsMoved()) {
            $data->{'is_moved'} = $object->getIsMoved();
        }
        if (null !== $object->getIsMpim()) {
            $data->{'is_mpim'} = $object->getIsMpim();
        }
        if (null !== $object->getIsOrgShared()) {
            $data->{'is_org_shared'} = $object->getIsOrgShared();
        }
        if (null !== $object->getIsPendingExtShared()) {
            $data->{'is_pending_ext_shared'} = $object->getIsPendingExtShared();
        }
        if (null !== $object->getIsPrivate()) {
            $data->{'is_private'} = $object->getIsPrivate();
        }
        if (null !== $object->getIsReadOnly()) {
            $data->{'is_read_only'} = $object->getIsReadOnly();
        }
        if (null !== $object->getIsShared()) {
            $data->{'is_shared'} = $object->getIsShared();
        }
        if (null !== $object->getLastRead()) {
            $data->{'last_read'} = $object->getLastRead();
        }
        if (null !== $object->getLatest()) {
            $data->{'latest'} = $object->getLatest();
        }
        if (null !== $object->getMembers()) {
            $values = [];
            foreach ($object->getMembers() as $value) {
                $values[] = $value;
            }
            $data->{'members'} = $values;
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getNameNormalized()) {
            $data->{'name_normalized'} = $object->getNameNormalized();
        }
        if (null !== $object->getNumMembers()) {
            $data->{'num_members'} = $object->getNumMembers();
        }
        if (null !== $object->getPendingShared()) {
            $values_1 = [];
            foreach ($object->getPendingShared() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'pending_shared'} = $values_1;
        }
        if (null !== $object->getPreviousNames()) {
            $values_2 = [];
            foreach ($object->getPreviousNames() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'previous_names'} = $values_2;
        }
        if (null !== $object->getPriority()) {
            $data->{'priority'} = $object->getPriority();
        }
        if (null !== $object->getPurpose()) {
            $data->{'purpose'} = $this->normalizer->normalize($object->getPurpose(), 'json', $context);
        }
        if (null !== $object->getTopic()) {
            $data->{'topic'} = $this->normalizer->normalize($object->getTopic(), 'json', $context);
        }
        if (null !== $object->getUnlinked()) {
            $data->{'unlinked'} = $object->getUnlinked();
        }
        if (null !== $object->getUnreadCount()) {
            $data->{'unread_count'} = $object->getUnreadCount();
        }
        if (null !== $object->getUnreadCountDisplay()) {
            $data->{'unread_count_display'} = $object->getUnreadCountDisplay();
        }

        return $data;
    }
}
