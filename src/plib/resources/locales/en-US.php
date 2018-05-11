<?php
// Copyright 1999-2018. Plesk International GmbH.
$messages = array(
    'pageTitle' => 'Amazon Route 53',
    'indexPageTitle' => 'AWS API Authorization',
    'delegationSetTitle' => 'Reusable Delegation Sets',
    'toolsTitle' => 'Mass Management',
    'keyLabel' => 'Key',
    'secretLabel' => 'Secret',
    'enabledLabel' => 'Turn on Amazon Web Service Route 53',
    'authDataSaved' => 'The authorization data was saved.',
    'getAuth' => 'Find your root account credentials here',
    'getAuthStepTwo' => 'You can also create one yourself. If you do, make sure to grant the "route53:*" and "route53domains:*" permissions to the account (<a href="%%learnMoreUrl%%">learn more</a>).',
    'createDelegationSetButton' => 'Create a Delegation Set',
    'createDelegationSetHint' => 'Creates a delegation set (a group of four name servers) that can be reused by multiple hosted zones.',
    'resetDefaultDelegationSetButton' => 'Reset to Default',
    'resetDefaultDelegationSetHint' => 'New hosted zones will not reuse any existing delegation sets.',
    'delegationSetCreated' => 'A reusable delegation set was created.',
    'nameServersColumn' => 'Name Servers',
    'ipAddressesColumn' => 'IP Addresses',
    'actionsColumn' => 'Actions',
    'deleteDelegationSetButton' => 'Remove the Delegation Set',
    'whiteLabel' => 'Learn more about white label name servers.',
    'hostedZoneSelect' => 'Reuse the delegation set of an existing hosted zone',
    'hostedZoneNone' => 'None',
    'delegationSetDeleted' => 'A reusable delegation set was deleted.',
    'defaultDelegationSet' => 'Default Delegation Set',
    'defaultDelegationSetButton' => 'Make Default',
    'defaultDelegationSetChanged' => 'The default reusable delegation set was changed.',
    'syncAllButton' => 'Sync All Zones',
    'syncAllHint' => 'Pushes the information about all DNS zones from the Plesk database to Amazon.',
    'syncAllConfirm' => 'Are you sure you want to push all zones registered in Plesk to Amazon?',
    'removeAllButton' => 'Remove All Zones',
    'removeAllHint' => 'Completely removes all zones hosted on Amazon.',
    'removeAllConfirm' => 'Are you sure you want to completely remove all zones hosted on Amazon?',
    'buttonYes' => 'Yes',
    'buttonNo' => 'No',
    'syncAllDone' => 'All zones registered in Plesk were synchronized with Amazon.',
    'removeAllDone' => 'All zones hosted on Amazon were removed.',
    'awsApiAuthorization' => 'AWS API Authorization',
    'awsDescriptionWindow' => 'To manage Route53, you need a restricted IAM user account to authenticate with Amazon. If you provide root account credentials, Plesk will create a restricted IAM user account for you.',
    'awsKeyType' => 'Key type',
    'formRootCredential' => 'I will use the root account credentials (will not be stored)',
    'formPreCreatedLimitedUserCredential' => 'I have created a restricted IAM user account',
    'awsSecurityTokenInvalid' => 'The security token included in the request is invalid.',
    'statusRootAccountCredentials' => 'Your root account credentials will not be stored. They are used only for creating a restricted IAM user account.',
    'userLoggedInError' => 'Could not log the user in.',
    'userLoggedIn' => 'User was logged in.',
    'iamUserCreated' => 'A restricted IAM user was created with the name "%%userName%%".',
    'notAdministratorAccess' => 'Could not create user.',
    'cli.commands.initUnix' => 'Initialize extension with credentials. ACCESS_KEY and SECRET_KEY should be passed as environment variables.',
    'cli.commands.initWin' => 'Initialize extension with credentials.',
    'cli.commands.init.wrongSyntax' => 'Wrong command syntax',
    'cli.options.root' => 'Use root IAM account',
    'cli.options.user' => 'Use restricted IAM account',
    'cli.options.access-key' => 'Access key',
    'cli.options.secret-key' => 'Secret key',
    'cli.options.clear' => 'Clear initialized parameters',
    'cliClearSuccess' => 'Authentication token was cleared.',
    'cliValidationFailed' => 'Validation failed.',
    'login' => 'Log in',
);
