<div data-role="panel" id="left-panel" data-theme="b" data-position="left" data-display="push">
    <ul data-role="listview">
        <li data-role="list-divider">Welcome</li>
        <li data-icon="male"><a href="javascript:void(0)" data-ajax="false" id="user_name"></a></li>
        <li data-role="list-divider">Updates</li>
        <li data-icon="comments-alt"><a href="<?php echo site_url('mobile/list_feed_new') ?>" data-ajax="false">News Feed</a></li>
        <li data-icon="eye-open"><a href="javascript:void(0)" data-ajax="false">Activity</a></li>
        <li data-role="list-divider">Library</li>
        <li data-icon="play-sign"><a href="<?php echo site_url('mobile/list_podcast_new') ?>" data-ajax="false">Podcast</a></li>
        <li data-icon="file-text-alt"><a href="<?php echo site_url('mobile/list_document_new') ?>" data-ajax="false">Document</a></li>
        <li data-icon="indent-right"><a href="<?php echo site_url('mobile/list_presentation_new') ?>" data-ajax="false">Presentation</a></li>
        <li data-role="list-divider">Course</li>
        <li data-icon="book"><a href="<?php echo site_url('mobile/list_course_new') ?>" data-ajax="false">Course</a></li>
        <li data-role="list-divider">Other</li>
        <li data-icon="facebook"><a href="<?php echo site_url('mobile/fan_page') ?>" data-ajax="false">Fan Page</a></li>
        <li data-icon="info"><a href="javascript:void(0)" data-ajax="false">About Us</a></li>
        <li data-icon="signout"><a href="<?php echo site_url('mobile/logout') ?>" data-ajax="false">Log Out</a></li>
    </ul>
</div>