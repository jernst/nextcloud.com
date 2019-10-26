<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/clients.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<script>
	require(["require.config"], function() {
		require(["modules/scrollingtohash"])
	});
</script>
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/clients/desktop/laptop.jpg">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/clients/desktop/laptop.jpg">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/clients/desktop/laptop.jpg">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/clients/desktop/laptop.jpg">
</head>
<div class="background clients-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Mobile and <span class="avoidwrap">desktop clients</span>');?></h1>
				<h2><?php echo $l->t('Have your data handy wherever you are.');?></h2>
			</div>
		</div>
	</div>
</div>

<section class="section--intro">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
                <p class="section--paragraph text-center"><?php echo $l->t('Nextcloud gives you access to your files wherever you are. Our easy to use desktop and mobile clients are available for all major platforms at zero cost!');?></p>
                <div class="text-center">
                    <a href="<?php echo home_url('install/#install-clients') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Download now');?></a>
                </div>
			</div>
		</div>
	</div>
</section>

<section class="section--desktop" id="desktop">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 feature--block">
                <h2 class="text-center"><?php echo $l->t('Sync and collaborate on your desktop or laptop');?></h2>
                <p class="section--paragraph text-center"><?php echo $l->t('The Nextcloud desktop client keeps photos and documents always up to date, enabling you to work like you always did.');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/desktop/linux.png" alt="in action" >
            </div>
            <div class="col-md-6 feature--block">
                <p class="section--paragraph"><?php echo $l->t('Any file you add, modify or delete in the synced folders on your desktop or laptop will show up, change or disappear on the server and all other connected devices.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Sync one or more folders locally with folders on the server and pick what folders you don\t need.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Right-click a file in your file manager and easily share it with other users, a public link or by email.');?></p>
                <p class="section--paragraph"><?php echo $l->t('Get notified of activities and events, like an incoming call, a comment on a file or a new folder that is shared with you.');?></p>
                <a href="<?php echo home_url('install/#install-clients') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Get the desktop client');?></a>
            </div>
        </div>
    </div>
</section>

<section class="section--desktop-features">
    <div class="container-fluid quote">
        <div class="container">
            <h2 class="text-center"><?php echo $l->t('Desktop client features');?></h2>
            <div class="row">
                <div class="col-sm-4">
                    <p class="section--paragraph"><ul>
                    <li><?php echo $l->t('Select any number of local folders to keep in sync with specified remote folders');?></li>
                    <li><?php echo $l->t('Exempt any number of subfolders in a synced folder from being synced');?></li>
                    <li><?php echo $l->t('Optional warning in case a very big new subfolder was added');?></li>
                    <li><?php echo $l->t('Easily pause and resume syncing');?></li>
                    </ul></p>
                </div>
                <div class="col-sm-4">
                    <p class="section--paragraph"><ul>
                    <li><?php echo $l->t('Receive notifications of server events like a new share or audio/video call');?></li>
                    <li><?php echo $l->t('Use the activity feed to track what happens on the server');?></li>
                    <li><?php echo $l->t('Immediately reply to notifications to join a call or accept a share');?></li>
                    <li><?php echo $l->t('Protect your files with client side,');?> <a class="hyperlink" href="<?php echo home_url('endtoend') ?>"><?php echo $l->t('End-to-end encryption</a> (version 2.5.0+)');?></li>
                    </ul></p>
                </div>
                <div class="col-sm-4">
                    <p class="section--paragraph"><ul>
                    <li><?php echo $l->t('Easily configure a proxy or set bandwidth throttling');?></li>
                    <li><?php echo $l->t('Enjoy convenient file manager integration for easy sharing');?></li>
                    <li><?php echo $l->t('Branding support for ');?><a class="hyperlink" href="<?php echo home_url('enterprise') ?>"><?php echo $l->t('enterprise customers');?></a></li>
                    <li><?php echo $l->t('Set up multiple accounts');?></li>
                    </ul></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section--desktop-screenshots">
    <div class="container">
        <h2 class="text-center"><?php echo $l->t('Desktop client in action');?></h2>
        <div class="row">
            <div class="col-md-4">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/features/share-dialog.png"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/features/share-dialog.png" alt="" class="img-responsive" /></a>
                Easy to use sharing dialog
            </div>
            <div class="col-md-4">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/features/share-dialog-options.png"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/features/share-dialog-options.png" alt="" class="img-responsive" /></a>
                Share dialog options only show when needed
            </div>
            <div class="col-md-4">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/features/context-menu.png"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/features/context-menu.png" alt="" class="img-responsive" /></a>
                Open Nextcloud apps from the context menu
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/features/space-used.png"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/features/space-used.png" alt="" class="img-responsive" /></a>
                See how much storage you have left
            </div>
            <div class="col-md-4">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/features/edit-ignored-files.png"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/features/edit-ignored-files.png" alt="" class="img-responsive" /></a>
                List which files should not be synced
            </div>
            <div class="col-md-4">
            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/features/separate-activities.png"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/features/separate-activities.png" alt="" class="img-responsive" /></a>
            View and respond to activities and notifications
            </div>
        </div>
    </div>
</section>

<section class="section--mobile" id="mobileid">
	<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 feature--block">
                <h2 class="text-center"><?php echo $l->t('Your files with you wherever you are');?></h2>
                <p class="section--paragraph text-center"><?php echo $l->t('With the Nextcloud clients for Android and iOS you can sync, edit and share your files in a fully secure way through an encrypted connection.');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 col-xs-6">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/iPhoneX.png" alt="in action" >
            </div>
            <div class="col-sm-3 col-xs-6">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/iPhone2.png" alt="in action" >
            </div>
            <div class="col-sm-3 col-xs-6">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/android.png" alt="in action" >
            </div>
            <div class="col-sm-3 col-xs-6">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/android2.png" alt="in action" >
            </div>
        </div>
    </div>
</section>

<section class="section--ios" id="iosid">
	<div class="container">
        <div class="row">
            <div class="col-md-6 image--floated">
                <div data-type="youtube" data-video-id="5yFKZze6TqM"></div>
                <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/5yFKZze6TqM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('top-rated iOS app');?></h3>
                <p class="section--paragraph"><?php echo $l->t('The Nextcloud iOS app provides a way for users to access and sync files on the go in a easy and intuitive interface. The client is kept always up to date with the latest iOS versions and designed for both smaller and newer iPhones, iPhone X and iPad.');?></p>
                <div class="row">
                <div class="col-xs-6 mobileclientbuttons">
                    <a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_IOS; ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/appstore.png">
                    </a>
                </div>
                </div>
            </div>
        </div>
        <div class="row docscanner">
            <h3 class="section--paragraph__title text-center"><?php echo $l->t('Document scanner in action');?></h3>
            <br>
            <div class="col-xs-6 col-sm-4 col-lg-2">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/ios-scanner-1.png"><img class="thumbnail img-thumbnail" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/ios-scanner-1.png" class="" ></a>
            </div>
            <div class="col-xs-6 col-sm-4 col-lg-2">
                <a  href="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/ios-scanner-2.jpg"><img class="thumbnail img-thumbnail" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/ios-scanner-2.jpg" class="" ></a>
            </div>
            <div class="col-xs-6 col-sm-4 col-lg-2">
                <a  href="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/ios-scanner-3.png"><img class="thumbnail img-thumbnail" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/ios-scanner-3.png" class="" ></a>
            </div>
            <div class="col-xs-6 col-sm-4 col-lg-2">
                <a  href="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/ios-scanner-4.png"><img class="thumbnail img-thumbnail" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/ios-scanner-4.png" class="" ></a>
            </div>
            <div class="col-xs-6 col-sm-4 col-lg-2">
                <a  href="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/ios-scanner-5.png"><img class="thumbnail img-thumbnail" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/ios-scanner-5.png" class="" ></a>
            </div>
            <div class="col-xs-6 col-sm-4 col-lg-2">
                <a  href="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/ios-scanner-6.png"><img class="thumbnail img-thumbnail" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/ios-scanner-6.png" class="" ></a>
            </div>
        </div>
    </div>
</section>

<section class="section--ios-features">
    <div class="container-fluid quote">
        <div class="container">
            <h2 class="text-center"><?php echo $l->t('iOS client features');?></h2>
            <div class="row">
                <div class="col-sm-4">
                    <p class="section--paragraph"><ul>
                    <li><?php echo $l->t('Display documents, photos, videos, audio files, as a list or thumbnails, sorted as you like.');?></li>
                    <li><?php echo $l->t('Edit files on the phone built in or using other apps installed on your iPhone or iPad.');?></li>
                    <li><?php echo $l->t('Add, rename, copy, move and delete files and folders');?></li>
                    <li><?php echo $l->t('Keep your favorite files available offline');?></li>
                    </ul></p>
                </div>
                <div class="col-sm-4">
                    <p class="section--paragraph"><ul>
                    <li><?php echo $l->t('Share files with others');?></li>
                    <li><?php echo $l->t('Client-side,');?> <a class="hyperlink" href="<?php echo home_url('endtoend') ?>"><?php echo $l->t('End-to-end encryption');?></a></li>
                    <li><?php echo $l->t('Local and server-side search');?></li>
                    <li><?php echo $l->t('Support for server notifications and file activity feed');?></li>
                    <li><?php echo $l->t('3D Touch peek&pop and homescreen quick actions');?></li>
                    <li><?php echo $l->t('Scan-to-PDF with rotation and quality level control');?></li>
                    </ul></p>
                </div>
                <div class="col-sm-4">
                    <p class="section--paragraph"><ul>
                    <li><?php echo $l->t('Multi-account support');?></li>
                    <li><?php echo $l->t('Adjusts to Nextcloud server theming preferences');?></li>
                    <li><?php echo $l->t('Auto-upload of photos and videos with custom file naming and folder sorting, wifi-only upload and HEIC support');?></li>
                    <li><?php echo $l->t('iOS 11 Files Integration');?></li>
                    <li><?php echo $l->t('Trash and versions integration');?></li>
                    </ul></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section--android" id="androidid">
	<div class="container">
        <div class="row">
            <div class="col-md-6 image--floated">
                <div data-type="youtube" data-video-id="https://youtu.be/4oY7R14Ydno"></div>
                <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/4oY7R14Ydno" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('Well integrated Android app');?></h3>
                <p class="section--paragraph"><?php echo $l->t('The Nextcloud Android app makes accessing, syncing and sharing your files easy with its modern and intuitive interface. Our client supports Android 4.0 and later and works with a wide variety of screen sizes and Android features.');?></p>
                <div class="row">
                    <div class="col-xs-6">
                        <a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_ANDROID; ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/googleplay.png"></a><br />
                    </div>
                    <div class="col-xs-6">
                        <a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_FDROID; ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/fdroid.png"></a><br />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section--android-features">
    <div class="container-fluid quote">
        <div class="container">
            <h2 class="text-center"><?php echo $l->t('Android app features');?></h2>
            <div class="row">
                <div class="col-sm-4">
                    <p class="section--paragraph"><ul>
                    <li><?php echo $l->t('Display documents, photos, videos, audio files, as a list or thumbnails, sorted as you like.');?></li>
                    <li><?php echo $l->t('Stream media files (needs at least Nextcloud 14)');?></li>
                    <li><?php echo $l->t('Edit files on the phone built in or using other apps installed on your Android device.');?></li>
                    <li><?php echo $l->t('Local and server-side search');?></li>
                    <li><?php echo $l->t('Add, rename, copy, move and delete files and folders');?></li>
                    <li><?php echo $l->t('Keep your favorite files available offline');?></li>
                    <li><?php echo $l->t('Restore deleted files (needs at least Nextcloud 14)');?></li>
                    </ul></p>
                </div>
                <div class="col-sm-4">
                    <p class="section--paragraph"><ul>
                    <li><?php echo $l->t('Share files with others');?></li>
                    <li><?php echo $l->t('Shared files view');?></li>
                    <li><?php echo $l->t('Simple contacts backup & restore');?></li>
                    <li><?php echo $l->t('Auto-configuration of Contacts and Calendar integration through DAVDroid');?></li>
                    <li><?php echo $l->t('Client-side,');?> <a class="hyperlink" href="<?php echo home_url('endtoend') ?>"><?php echo $l->t('End-to-end encryption');?></a></li>
                    <li><?php echo $l->t('Support for server push notifications and file activity feed');?></li>
                    <li><?php echo $l->t('View and reply to comments on files (needs at least Nextcloud 14)');?></li>
                    </ul></p>
                </div>
                <div class="col-sm-4">
                    <p class="section--paragraph"><ul>
                    <li><?php echo $l->t('TalkBack screenreader support');?></li>
                    <li><?php echo $l->t('Multi-account support');?></li>
                    <li><?php echo $l->t('Fingerprint locking');?></li>
                    <li><?php echo $l->t('Adjusts to Nextcloud server theming preferences');?></li>
                    <li><?php echo $l->t('Auto-upload of any type of data including photos and videos with custom file naming and folder sorting, wifi-only upload, differential handling of photos and videos');?></li>
                    <li><?php echo $l->t('monitor any number of folders for any file type so you can upload Whatsapp images, documents and anything else');?></li>
                    </ul></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section--intro">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
                <p class="section--paragraph text-center"><?php echo $l->t('We\'re grateful to our hundreds of thousands of users for the great ratings in the Play store and Apple App store and look forward to hear your feedback!');?></p>
                <div class="text-center">
                    <a href="<?php echo home_url('install/#install-clients') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Download now');?></a>
                </div>
			</div>
		</div>
	</div>
</section>
