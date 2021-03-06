<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = [];
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new \Jane\JsonSchemaRuntime\Normalizer\ReferenceNormalizer();
        $normalizers[] = new BlocksItemNormalizer();
        $normalizers[] = new DefsPinnedInfoItemNormalizer();
        $normalizers[] = new ObjsChannelNormalizer();
        $normalizers[] = new ObjsChannelPurposeNormalizer();
        $normalizers[] = new ObjsChannelTopicNormalizer();
        $normalizers[] = new ObjsCommentNormalizer();
        $normalizers[] = new ObjsConversationNormalizer();
        $normalizers[] = new ObjsConversationDisplayCountsNormalizer();
        $normalizers[] = new ObjsConversationPurposeNormalizer();
        $normalizers[] = new ObjsConversationSharesItemNormalizer();
        $normalizers[] = new ObjsConversationTopicNormalizer();
        $normalizers[] = new ObjsEnterpriseUserNormalizer();
        $normalizers[] = new ObjsFileNormalizer();
        $normalizers[] = new ObjsFileSharesNormalizer();
        $normalizers[] = new ObjsGroupNormalizer();
        $normalizers[] = new ObjsGroupPurposeNormalizer();
        $normalizers[] = new ObjsGroupTopicNormalizer();
        $normalizers[] = new ObjsIconNormalizer();
        $normalizers[] = new ObjsImNormalizer();
        $normalizers[] = new ObjsMessageNormalizer();
        $normalizers[] = new ObjsMessageAttachmentsItemNormalizer();
        $normalizers[] = new ObjsMessageAttachmentsItemFieldsItemNormalizer();
        $normalizers[] = new ObjsMessageAttachmentsItemActionsItemNormalizer();
        $normalizers[] = new ObjsMessageIconsNormalizer();
        $normalizers[] = new ObjsMessageRepliesItemNormalizer();
        $normalizers[] = new ObjsPagingNormalizer();
        $normalizers[] = new ObjsReactionNormalizer();
        $normalizers[] = new ObjsReminderNormalizer();
        $normalizers[] = new ObjsResourcesNormalizer();
        $normalizers[] = new ObjsResponseMetadataNormalizer();
        $normalizers[] = new ObjsSubteamNormalizer();
        $normalizers[] = new ObjsSubteamPrefsNormalizer();
        $normalizers[] = new ObjsTeamNormalizer();
        $normalizers[] = new ObjsTeamProfileFieldNormalizer();
        $normalizers[] = new ObjsUserNormalizer();
        $normalizers[] = new ObjsUserTeamProfileNormalizer();
        $normalizers[] = new ObjsUserProfileNormalizer();
        $normalizers[] = new ObjsUserProfileShortNormalizer();
        $normalizers[] = new AdminUsersSessionResetPostResponse200Normalizer();
        $normalizers[] = new AdminUsersSessionResetPostResponsedefaultNormalizer();
        $normalizers[] = new ApiTestGetResponse200Normalizer();
        $normalizers[] = new ApiTestGetResponsedefaultNormalizer();
        $normalizers[] = new AppsPermissionsInfoGetResponse200Normalizer();
        $normalizers[] = new AppsPermissionsInfoGetResponse200InfoNormalizer();
        $normalizers[] = new AppsPermissionsInfoGetResponse200InfoAppHomeNormalizer();
        $normalizers[] = new AppsPermissionsInfoGetResponse200InfoChannelNormalizer();
        $normalizers[] = new AppsPermissionsInfoGetResponse200InfoGroupNormalizer();
        $normalizers[] = new AppsPermissionsInfoGetResponse200InfoImNormalizer();
        $normalizers[] = new AppsPermissionsInfoGetResponse200InfoMpimNormalizer();
        $normalizers[] = new AppsPermissionsInfoGetResponse200InfoTeamNormalizer();
        $normalizers[] = new AppsPermissionsInfoGetResponsedefaultNormalizer();
        $normalizers[] = new AppsPermissionsRequestGetResponse200Normalizer();
        $normalizers[] = new AppsPermissionsRequestGetResponsedefaultNormalizer();
        $normalizers[] = new AppsPermissionsResourcesListGetResponse200Normalizer();
        $normalizers[] = new AppsPermissionsResourcesListGetResponse200ResourcesItemNormalizer();
        $normalizers[] = new AppsPermissionsResourcesListGetResponse200ResponseMetadataNormalizer();
        $normalizers[] = new AppsPermissionsResourcesListGetResponsedefaultNormalizer();
        $normalizers[] = new AppsPermissionsScopesListGetResponse200Normalizer();
        $normalizers[] = new AppsPermissionsScopesListGetResponse200ScopesNormalizer();
        $normalizers[] = new AppsPermissionsScopesListGetResponsedefaultNormalizer();
        $normalizers[] = new AppsPermissionsUsersListGetResponse200Normalizer();
        $normalizers[] = new AppsPermissionsUsersListGetResponsedefaultNormalizer();
        $normalizers[] = new AppsPermissionsUsersRequestGetResponse200Normalizer();
        $normalizers[] = new AppsPermissionsUsersRequestGetResponsedefaultNormalizer();
        $normalizers[] = new AppsUninstallGetResponse200Normalizer();
        $normalizers[] = new AppsUninstallGetResponsedefaultNormalizer();
        $normalizers[] = new AuthRevokeGetResponse200Normalizer();
        $normalizers[] = new AuthRevokeGetResponsedefaultNormalizer();
        $normalizers[] = new AuthTestGetResponse200Normalizer();
        $normalizers[] = new AuthTestGetResponsedefaultNormalizer();
        $normalizers[] = new BotsInfoGetResponse200Normalizer();
        $normalizers[] = new BotsInfoGetResponse200BotNormalizer();
        $normalizers[] = new BotsInfoGetResponse200BotIconsNormalizer();
        $normalizers[] = new BotsInfoGetResponsedefaultNormalizer();
        $normalizers[] = new ChannelsArchivePostResponse200Normalizer();
        $normalizers[] = new ChannelsArchivePostResponsedefaultNormalizer();
        $normalizers[] = new ChannelsCreatePostResponse200Normalizer();
        $normalizers[] = new ChannelsCreatePostResponsedefaultNormalizer();
        $normalizers[] = new ChannelsHistoryGetResponse200Normalizer();
        $normalizers[] = new ChannelsHistoryGetResponsedefaultNormalizer();
        $normalizers[] = new ChannelsInfoGetResponse200Normalizer();
        $normalizers[] = new ChannelsInfoGetResponsedefaultNormalizer();
        $normalizers[] = new ChannelsInvitePostResponse200Normalizer();
        $normalizers[] = new ChannelsInvitePostResponsedefaultNormalizer();
        $normalizers[] = new ChannelsJoinPostResponse200Normalizer();
        $normalizers[] = new ChannelsJoinPostResponsedefaultNormalizer();
        $normalizers[] = new ChannelsKickPostResponse200Normalizer();
        $normalizers[] = new ChannelsKickPostResponsedefaultNormalizer();
        $normalizers[] = new ChannelsLeavePostResponse200Normalizer();
        $normalizers[] = new ChannelsLeavePostResponsedefaultNormalizer();
        $normalizers[] = new ChannelsListGetResponse200Normalizer();
        $normalizers[] = new ChannelsListGetResponsedefaultNormalizer();
        $normalizers[] = new ChannelsMarkPostResponse200Normalizer();
        $normalizers[] = new ChannelsMarkPostResponsedefaultNormalizer();
        $normalizers[] = new ChannelsRenamePostResponse200Normalizer();
        $normalizers[] = new ChannelsRenamePostResponsedefaultNormalizer();
        $normalizers[] = new ChannelsRepliesGetResponse200Normalizer();
        $normalizers[] = new ChannelsRepliesGetResponse200MessagesItemItem0Normalizer();
        $normalizers[] = new ChannelsRepliesGetResponse200MessagesItemItem0RepliesItemNormalizer();
        $normalizers[] = new ChannelsRepliesGetResponse200MessagesItemItem1Normalizer();
        $normalizers[] = new ChannelsRepliesGetResponsedefaultNormalizer();
        $normalizers[] = new ChannelsSetPurposePostResponse200Normalizer();
        $normalizers[] = new ChannelsSetPurposePostResponsedefaultNormalizer();
        $normalizers[] = new ChannelsSetTopicPostResponse200Normalizer();
        $normalizers[] = new ChannelsSetTopicPostResponsedefaultNormalizer();
        $normalizers[] = new ChannelsUnarchivePostResponse200Normalizer();
        $normalizers[] = new ChannelsUnarchivePostResponsedefaultNormalizer();
        $normalizers[] = new ChatDeletePostResponse200Normalizer();
        $normalizers[] = new ChatDeletePostResponsedefaultNormalizer();
        $normalizers[] = new ChatDeleteScheduledMessagePostResponse200Normalizer();
        $normalizers[] = new ChatDeleteScheduledMessagePostResponsedefaultNormalizer();
        $normalizers[] = new ChatGetPermalinkGetResponse200Normalizer();
        $normalizers[] = new ChatGetPermalinkGetResponsedefaultNormalizer();
        $normalizers[] = new ChatMeMessagePostResponse200Normalizer();
        $normalizers[] = new ChatMeMessagePostResponsedefaultNormalizer();
        $normalizers[] = new ChatPostEphemeralPostResponse200Normalizer();
        $normalizers[] = new ChatPostEphemeralPostResponsedefaultNormalizer();
        $normalizers[] = new ChatPostMessagePostResponse200Normalizer();
        $normalizers[] = new ChatPostMessagePostResponsedefaultNormalizer();
        $normalizers[] = new ChatScheduleMessagePostResponse200Normalizer();
        $normalizers[] = new ChatScheduleMessagePostResponse200MessageNormalizer();
        $normalizers[] = new ChatScheduleMessagePostResponsedefaultNormalizer();
        $normalizers[] = new ChatScheduledMessagesListGetResponse200Normalizer();
        $normalizers[] = new ChatScheduledMessagesListGetResponse200ResponseMetadataNormalizer();
        $normalizers[] = new ChatScheduledMessagesListGetResponse200ScheduledMessagesItemNormalizer();
        $normalizers[] = new ChatScheduledMessagesListGetResponsedefaultNormalizer();
        $normalizers[] = new ChatUnfurlPostResponse200Normalizer();
        $normalizers[] = new ChatUnfurlPostResponsedefaultNormalizer();
        $normalizers[] = new ChatUpdatePostResponse200Normalizer();
        $normalizers[] = new ChatUpdatePostResponse200MessageNormalizer();
        $normalizers[] = new ChatUpdatePostResponsedefaultNormalizer();
        $normalizers[] = new ConversationsArchivePostResponse200Normalizer();
        $normalizers[] = new ConversationsArchivePostResponsedefaultNormalizer();
        $normalizers[] = new ConversationsClosePostResponse200Normalizer();
        $normalizers[] = new ConversationsClosePostResponsedefaultNormalizer();
        $normalizers[] = new ConversationsCreatePostResponse200Normalizer();
        $normalizers[] = new ConversationsCreatePostResponsedefaultNormalizer();
        $normalizers[] = new ConversationsHistoryGetResponse200Normalizer();
        $normalizers[] = new ConversationsHistoryGetResponsedefaultNormalizer();
        $normalizers[] = new ConversationsInfoGetResponse200Normalizer();
        $normalizers[] = new ConversationsInfoGetResponsedefaultNormalizer();
        $normalizers[] = new ConversationsInvitePostResponse200Normalizer();
        $normalizers[] = new ConversationsInvitePostResponsedefaultNormalizer();
        $normalizers[] = new ConversationsInvitePostResponsedefaultErrorsItemNormalizer();
        $normalizers[] = new ConversationsJoinPostResponse200Normalizer();
        $normalizers[] = new ConversationsJoinPostResponse200ResponseMetadataNormalizer();
        $normalizers[] = new ConversationsJoinPostResponsedefaultNormalizer();
        $normalizers[] = new ConversationsKickPostResponse200Normalizer();
        $normalizers[] = new ConversationsKickPostResponsedefaultNormalizer();
        $normalizers[] = new ConversationsLeavePostResponse200Normalizer();
        $normalizers[] = new ConversationsLeavePostResponsedefaultNormalizer();
        $normalizers[] = new ConversationsListGetResponse200Normalizer();
        $normalizers[] = new ConversationsListGetResponse200ResponseMetadataNormalizer();
        $normalizers[] = new ConversationsListGetResponsedefaultNormalizer();
        $normalizers[] = new ConversationsMembersGetResponse200Normalizer();
        $normalizers[] = new ConversationsMembersGetResponse200ResponseMetadataNormalizer();
        $normalizers[] = new ConversationsMembersGetResponsedefaultNormalizer();
        $normalizers[] = new ConversationsOpenPostResponse200Normalizer();
        $normalizers[] = new ConversationsOpenPostResponsedefaultNormalizer();
        $normalizers[] = new ConversationsRenamePostResponse200Normalizer();
        $normalizers[] = new ConversationsRenamePostResponsedefaultNormalizer();
        $normalizers[] = new ConversationsRepliesGetResponse200Normalizer();
        $normalizers[] = new ConversationsRepliesGetResponse200MessagesItemItem0Normalizer();
        $normalizers[] = new ConversationsRepliesGetResponse200MessagesItemItem0RepliesItemNormalizer();
        $normalizers[] = new ConversationsRepliesGetResponse200MessagesItemItem1Normalizer();
        $normalizers[] = new ConversationsRepliesGetResponsedefaultNormalizer();
        $normalizers[] = new ConversationsSetPurposePostResponse200Normalizer();
        $normalizers[] = new ConversationsSetPurposePostResponsedefaultNormalizer();
        $normalizers[] = new ConversationsSetTopicPostResponse200Normalizer();
        $normalizers[] = new ConversationsSetTopicPostResponsedefaultNormalizer();
        $normalizers[] = new ConversationsUnarchivePostResponse200Normalizer();
        $normalizers[] = new ConversationsUnarchivePostResponsedefaultNormalizer();
        $normalizers[] = new DialogOpenGetResponse200Normalizer();
        $normalizers[] = new DialogOpenGetResponsedefaultNormalizer();
        $normalizers[] = new DndEndDndPostResponse200Normalizer();
        $normalizers[] = new DndEndDndPostResponsedefaultNormalizer();
        $normalizers[] = new DndEndSnoozePostResponse200Normalizer();
        $normalizers[] = new DndEndSnoozePostResponsedefaultNormalizer();
        $normalizers[] = new DndInfoGetResponse200Normalizer();
        $normalizers[] = new DndInfoGetResponsedefaultNormalizer();
        $normalizers[] = new DndSetSnoozePostResponse200Normalizer();
        $normalizers[] = new DndSetSnoozePostResponsedefaultNormalizer();
        $normalizers[] = new DndTeamInfoGetResponse200Normalizer();
        $normalizers[] = new DndTeamInfoGetResponsedefaultNormalizer();
        $normalizers[] = new EmojiListGetResponse200Normalizer();
        $normalizers[] = new EmojiListGetResponsedefaultNormalizer();
        $normalizers[] = new FilesCommentsDeletePostResponse200Normalizer();
        $normalizers[] = new FilesCommentsDeletePostResponsedefaultNormalizer();
        $normalizers[] = new FilesDeletePostResponse200Normalizer();
        $normalizers[] = new FilesDeletePostResponsedefaultNormalizer();
        $normalizers[] = new FilesInfoGetResponse200Normalizer();
        $normalizers[] = new FilesInfoGetResponsedefaultNormalizer();
        $normalizers[] = new FilesListGetResponse200Normalizer();
        $normalizers[] = new FilesListGetResponsedefaultNormalizer();
        $normalizers[] = new FilesRevokePublicURLPostResponse200Normalizer();
        $normalizers[] = new FilesRevokePublicURLPostResponsedefaultNormalizer();
        $normalizers[] = new FilesSharedPublicURLPostResponse200Normalizer();
        $normalizers[] = new FilesSharedPublicURLPostResponsedefaultNormalizer();
        $normalizers[] = new FilesUploadPostResponse200Normalizer();
        $normalizers[] = new FilesUploadPostResponsedefaultNormalizer();
        $normalizers[] = new GroupsArchivePostResponse200Normalizer();
        $normalizers[] = new GroupsArchivePostResponsedefaultNormalizer();
        $normalizers[] = new GroupsCreatePostResponse200Normalizer();
        $normalizers[] = new GroupsCreatePostResponsedefaultNormalizer();
        $normalizers[] = new GroupsCreateChildPostResponse200Normalizer();
        $normalizers[] = new GroupsCreateChildPostResponsedefaultNormalizer();
        $normalizers[] = new GroupsHistoryGetResponse200Normalizer();
        $normalizers[] = new GroupsHistoryGetResponsedefaultNormalizer();
        $normalizers[] = new GroupsInfoGetResponse200Normalizer();
        $normalizers[] = new GroupsInfoGetResponsedefaultNormalizer();
        $normalizers[] = new GroupsInvitePostResponse200Normalizer();
        $normalizers[] = new GroupsInvitePostResponsedefaultNormalizer();
        $normalizers[] = new GroupsKickPostResponse200Normalizer();
        $normalizers[] = new GroupsKickPostResponsedefaultNormalizer();
        $normalizers[] = new GroupsLeavePostResponse200Normalizer();
        $normalizers[] = new GroupsLeavePostResponsedefaultNormalizer();
        $normalizers[] = new GroupsListGetResponse200Normalizer();
        $normalizers[] = new GroupsListGetResponsedefaultNormalizer();
        $normalizers[] = new GroupsMarkPostResponse200Normalizer();
        $normalizers[] = new GroupsMarkPostResponsedefaultNormalizer();
        $normalizers[] = new GroupsOpenPostResponse200Normalizer();
        $normalizers[] = new GroupsOpenPostResponsedefaultNormalizer();
        $normalizers[] = new GroupsRenamePostResponse200Normalizer();
        $normalizers[] = new GroupsRenamePostResponsedefaultNormalizer();
        $normalizers[] = new GroupsRepliesGetResponse200Normalizer();
        $normalizers[] = new GroupsRepliesGetResponsedefaultNormalizer();
        $normalizers[] = new GroupsSetPurposePostResponse200Normalizer();
        $normalizers[] = new GroupsSetPurposePostResponsedefaultNormalizer();
        $normalizers[] = new GroupsSetTopicPostResponse200Normalizer();
        $normalizers[] = new GroupsSetTopicPostResponsedefaultNormalizer();
        $normalizers[] = new GroupsUnarchivePostResponse200Normalizer();
        $normalizers[] = new GroupsUnarchivePostResponsedefaultNormalizer();
        $normalizers[] = new ImClosePostResponse200Normalizer();
        $normalizers[] = new ImClosePostResponsedefaultNormalizer();
        $normalizers[] = new ImHistoryGetResponse200Normalizer();
        $normalizers[] = new ImHistoryGetResponsedefaultNormalizer();
        $normalizers[] = new ImListGetResponse200Normalizer();
        $normalizers[] = new ImListGetResponsedefaultNormalizer();
        $normalizers[] = new ImMarkPostResponse200Normalizer();
        $normalizers[] = new ImMarkPostResponsedefaultNormalizer();
        $normalizers[] = new ImOpenPostResponse200Normalizer();
        $normalizers[] = new ImOpenPostResponse200ChannelNormalizer();
        $normalizers[] = new ImOpenPostResponsedefaultNormalizer();
        $normalizers[] = new ImRepliesGetResponse200Normalizer();
        $normalizers[] = new ImRepliesGetResponse200MessagesItemItem0Normalizer();
        $normalizers[] = new ImRepliesGetResponse200MessagesItemItem0RepliesItemNormalizer();
        $normalizers[] = new ImRepliesGetResponse200MessagesItemItem1Normalizer();
        $normalizers[] = new ImRepliesGetResponsedefaultNormalizer();
        $normalizers[] = new MigrationExchangeGetResponse200Normalizer();
        $normalizers[] = new MigrationExchangeGetResponsedefaultNormalizer();
        $normalizers[] = new MpimClosePostResponse200Normalizer();
        $normalizers[] = new MpimClosePostResponsedefaultNormalizer();
        $normalizers[] = new MpimHistoryGetResponse200Normalizer();
        $normalizers[] = new MpimHistoryGetResponsedefaultNormalizer();
        $normalizers[] = new MpimListGetResponse200Normalizer();
        $normalizers[] = new MpimListGetResponsedefaultNormalizer();
        $normalizers[] = new MpimMarkPostResponse200Normalizer();
        $normalizers[] = new MpimMarkPostResponsedefaultNormalizer();
        $normalizers[] = new MpimOpenPostResponse200Normalizer();
        $normalizers[] = new MpimOpenPostResponsedefaultNormalizer();
        $normalizers[] = new MpimRepliesGetResponse200Normalizer();
        $normalizers[] = new MpimRepliesGetResponse200MessagesItemItem0Normalizer();
        $normalizers[] = new MpimRepliesGetResponse200MessagesItemItem0RepliesItemNormalizer();
        $normalizers[] = new MpimRepliesGetResponse200MessagesItemItem1Normalizer();
        $normalizers[] = new MpimRepliesGetResponsedefaultNormalizer();
        $normalizers[] = new OauthAccessGetResponse200Normalizer();
        $normalizers[] = new OauthAccessGetResponsedefaultNormalizer();
        $normalizers[] = new OauthTokenGetResponse200Normalizer();
        $normalizers[] = new OauthTokenGetResponsedefaultNormalizer();
        $normalizers[] = new PinsAddPostResponse200Normalizer();
        $normalizers[] = new PinsAddPostResponsedefaultNormalizer();
        $normalizers[] = new PinsListGetResponse200Item0Normalizer();
        $normalizers[] = new PinsListGetResponse200Item0ItemsItem0Normalizer();
        $normalizers[] = new PinsListGetResponse200Item0ItemsItem1Normalizer();
        $normalizers[] = new PinsListGetResponse200Item0ItemsItem2Normalizer();
        $normalizers[] = new PinsListGetResponse200Item1Normalizer();
        $normalizers[] = new PinsListGetResponsedefaultNormalizer();
        $normalizers[] = new PinsRemovePostResponse200Normalizer();
        $normalizers[] = new PinsRemovePostResponsedefaultNormalizer();
        $normalizers[] = new ReactionsAddPostResponse200Normalizer();
        $normalizers[] = new ReactionsAddPostResponsedefaultNormalizer();
        $normalizers[] = new ReactionsGetGetResponse200Item0Normalizer();
        $normalizers[] = new ReactionsGetGetResponse200Item1Normalizer();
        $normalizers[] = new ReactionsGetGetResponse200Item2Normalizer();
        $normalizers[] = new ReactionsGetGetResponsedefaultNormalizer();
        $normalizers[] = new ReactionsListGetResponse200Normalizer();
        $normalizers[] = new ReactionsListGetResponse200ItemsItemItem0Normalizer();
        $normalizers[] = new ReactionsListGetResponse200ItemsItemItem1Normalizer();
        $normalizers[] = new ReactionsListGetResponse200ItemsItemItem2Normalizer();
        $normalizers[] = new ReactionsListGetResponsedefaultNormalizer();
        $normalizers[] = new ReactionsRemovePostResponse200Normalizer();
        $normalizers[] = new ReactionsRemovePostResponsedefaultNormalizer();
        $normalizers[] = new RemindersAddPostResponse200Normalizer();
        $normalizers[] = new RemindersAddPostResponsedefaultNormalizer();
        $normalizers[] = new RemindersCompletePostResponse200Normalizer();
        $normalizers[] = new RemindersCompletePostResponsedefaultNormalizer();
        $normalizers[] = new RemindersDeletePostResponse200Normalizer();
        $normalizers[] = new RemindersDeletePostResponsedefaultNormalizer();
        $normalizers[] = new RemindersInfoGetResponse200Normalizer();
        $normalizers[] = new RemindersInfoGetResponsedefaultNormalizer();
        $normalizers[] = new RemindersListGetResponse200Normalizer();
        $normalizers[] = new RemindersListGetResponsedefaultNormalizer();
        $normalizers[] = new RtmConnectGetResponse200Normalizer();
        $normalizers[] = new RtmConnectGetResponse200SelfNormalizer();
        $normalizers[] = new RtmConnectGetResponse200TeamNormalizer();
        $normalizers[] = new RtmConnectGetResponsedefaultNormalizer();
        $normalizers[] = new SearchMessagesGetResponse200Normalizer();
        $normalizers[] = new SearchMessagesGetResponsedefaultNormalizer();
        $normalizers[] = new StarsAddPostResponse200Normalizer();
        $normalizers[] = new StarsAddPostResponsedefaultNormalizer();
        $normalizers[] = new StarsListGetResponse200Normalizer();
        $normalizers[] = new StarsListGetResponse200ItemsItemItem0Normalizer();
        $normalizers[] = new StarsListGetResponse200ItemsItemItem1Normalizer();
        $normalizers[] = new StarsListGetResponse200ItemsItemItem2Normalizer();
        $normalizers[] = new StarsListGetResponse200ItemsItemItem3Normalizer();
        $normalizers[] = new StarsListGetResponse200ItemsItemItem4Normalizer();
        $normalizers[] = new StarsListGetResponse200ItemsItemItem5Normalizer();
        $normalizers[] = new StarsListGetResponsedefaultNormalizer();
        $normalizers[] = new StarsRemovePostResponse200Normalizer();
        $normalizers[] = new StarsRemovePostResponsedefaultNormalizer();
        $normalizers[] = new TeamAccessLogsGetResponse200Normalizer();
        $normalizers[] = new TeamAccessLogsGetResponse200LoginsItemNormalizer();
        $normalizers[] = new TeamAccessLogsGetResponsedefaultNormalizer();
        $normalizers[] = new TeamBillableInfoGetResponse200Normalizer();
        $normalizers[] = new TeamBillableInfoGetResponsedefaultNormalizer();
        $normalizers[] = new TeamInfoGetResponse200Normalizer();
        $normalizers[] = new TeamInfoGetResponsedefaultNormalizer();
        $normalizers[] = new TeamIntegrationLogsGetResponse200Normalizer();
        $normalizers[] = new TeamIntegrationLogsGetResponse200LogsItemNormalizer();
        $normalizers[] = new TeamIntegrationLogsGetResponsedefaultNormalizer();
        $normalizers[] = new TeamProfileGetGetResponse200Normalizer();
        $normalizers[] = new TeamProfileGetGetResponse200ProfileNormalizer();
        $normalizers[] = new TeamProfileGetGetResponsedefaultNormalizer();
        $normalizers[] = new UsergroupsCreatePostResponse200Normalizer();
        $normalizers[] = new UsergroupsCreatePostResponsedefaultNormalizer();
        $normalizers[] = new UsergroupsDisablePostResponse200Normalizer();
        $normalizers[] = new UsergroupsDisablePostResponsedefaultNormalizer();
        $normalizers[] = new UsergroupsEnablePostResponse200Normalizer();
        $normalizers[] = new UsergroupsEnablePostResponsedefaultNormalizer();
        $normalizers[] = new UsergroupsListGetResponse200Normalizer();
        $normalizers[] = new UsergroupsListGetResponsedefaultNormalizer();
        $normalizers[] = new UsergroupsUpdatePostResponse200Normalizer();
        $normalizers[] = new UsergroupsUpdatePostResponsedefaultNormalizer();
        $normalizers[] = new UsergroupsUsersListGetResponse200Normalizer();
        $normalizers[] = new UsergroupsUsersListGetResponsedefaultNormalizer();
        $normalizers[] = new UsergroupsUsersUpdatePostResponse200Normalizer();
        $normalizers[] = new UsergroupsUsersUpdatePostResponsedefaultNormalizer();
        $normalizers[] = new UsersConversationsGetResponse200Normalizer();
        $normalizers[] = new UsersConversationsGetResponse200ResponseMetadataNormalizer();
        $normalizers[] = new UsersConversationsGetResponsedefaultNormalizer();
        $normalizers[] = new UsersDeletePhotoPostResponse200Normalizer();
        $normalizers[] = new UsersDeletePhotoPostResponsedefaultNormalizer();
        $normalizers[] = new UsersGetPresenceGetResponse200Normalizer();
        $normalizers[] = new UsersGetPresenceGetResponsedefaultNormalizer();
        $normalizers[] = new UsersIdentityGetResponse200Item0Normalizer();
        $normalizers[] = new UsersIdentityGetResponse200Item0TeamNormalizer();
        $normalizers[] = new UsersIdentityGetResponse200Item0UserNormalizer();
        $normalizers[] = new UsersIdentityGetResponse200Item1Normalizer();
        $normalizers[] = new UsersIdentityGetResponse200Item1TeamNormalizer();
        $normalizers[] = new UsersIdentityGetResponse200Item1UserNormalizer();
        $normalizers[] = new UsersIdentityGetResponse200Item2Normalizer();
        $normalizers[] = new UsersIdentityGetResponse200Item2TeamNormalizer();
        $normalizers[] = new UsersIdentityGetResponse200Item2UserNormalizer();
        $normalizers[] = new UsersIdentityGetResponse200Item3Normalizer();
        $normalizers[] = new UsersIdentityGetResponse200Item3TeamNormalizer();
        $normalizers[] = new UsersIdentityGetResponse200Item3UserNormalizer();
        $normalizers[] = new UsersIdentityGetResponsedefaultNormalizer();
        $normalizers[] = new UsersInfoGetResponse200Normalizer();
        $normalizers[] = new UsersInfoGetResponsedefaultNormalizer();
        $normalizers[] = new UsersListGetResponse200Normalizer();
        $normalizers[] = new UsersListGetResponsedefaultNormalizer();
        $normalizers[] = new UsersLookupByEmailGetResponse200Normalizer();
        $normalizers[] = new UsersLookupByEmailGetResponsedefaultNormalizer();
        $normalizers[] = new UsersProfileGetGetResponse200Normalizer();
        $normalizers[] = new UsersProfileGetGetResponsedefaultNormalizer();
        $normalizers[] = new UsersProfileSetPostResponse200Normalizer();
        $normalizers[] = new UsersProfileSetPostResponsedefaultNormalizer();
        $normalizers[] = new UsersSetActivePostResponse200Normalizer();
        $normalizers[] = new UsersSetActivePostResponsedefaultNormalizer();
        $normalizers[] = new UsersSetPhotoPostResponse200Normalizer();
        $normalizers[] = new UsersSetPhotoPostResponse200ProfileNormalizer();
        $normalizers[] = new UsersSetPhotoPostResponsedefaultNormalizer();
        $normalizers[] = new UsersSetPresencePostResponse200Normalizer();
        $normalizers[] = new UsersSetPresencePostResponsedefaultNormalizer();

        return $normalizers;
    }
}
