<?php

/** Cron comment deleter. Gets rid of bad comments in WP.
**  If you happen to be running a website in Spain, Russia, or the Netherlands, there are some lines below that you may want to comment out that I have clearly marked.
**  @author Joshua Walcher, joshuawalcher@gmail.com
** Last updated, August 1, 2017
** installation instructions: place this file in a folder called crons in the root of your WordPress installation. Add a cronjob to wget the file twice a day. Recommended syntax:
5 2,22 * * 1 wget -q http://[yoururl]/crons/cron-wp-comments.php
**/
require('../wp-blog-header.php');
//get the global WPDB
global $wpdb;
$queries = array(
	"DELETE FROM wp_comments WHERE comment_approved = 'spam';",
	"DELETE FROM wp_comments WHERE comment_author LIKE '%calvin klein%';",
	"DELETE FROM wp_comments WHERE comment_author like '%shoes%';",
	"DELETE FROM wp_comments WHERE comment_author like '%wholesale%';",
	"DELETE FROM wp_comments WHERE comment_author like '%User Profile%';",
	"DELETE FROM wp_comments WHERE comment_author like '%sex%';",
	"DELETE FROM wp_comments WHERE comment_author like '%ladies%';",
	"DELETE FROM wp_comments WHERE comment_author_email like '%.ru';", //Russia
	"DELETE FROM wp_comments WHERE comment_author LIKE '%nfl%';",
	"DELETE FROM wp_comments WHERE comment_author LIKE '%jersey%';",
	"DELETE FROM wp_comments WHERE comment_author LIKE '%outfit%';",
	"DELETE FROM wp_comments WHERE comment_author LIKE '%nexium%';",
	"DELETE FROM wp_comments WHERE comment_author LIKE '%underwear%';",
	"DELETE FROM wp_comments WHERE comment_author LIKE '%football%';",
	"DELETE FROM wp_comments WHERE comment_author_email like '%.es';", //Spain
	"DELETE FROM wp_comments WHERE comment_author_email like '%.de';", //Netherlands
	"DELETE FROM wp_comments WHERE comment_author LIKE '%web%';",
	"DELETE FROM wp_comments WHERE comment_author LIKE '%reproductive%';",
	"DELETE FROM wp_comments WHERE comment_author LIKE '%viagra%';",
	"DELETE FROM wp_comments WHERE comment_author LIKE '%drugs%';",
	"DELETE FROM wp_comments WHERE comment_author LIKE '%viagra%';",
	"DELETE FROM wp_comments WHERE comment_author LIKE '%hack%';",
	"DELETE FROM wp_comments WHERE comment_author LIKE '%www%';",
	"DELETE FROM wp_comments WHERE comment_author LIKE '%http%';",
	"DELETE FROM wp_comments WHERE comment_author LIKE '%.%';",
	"DELETE FROM wp_comments WHERE comment_author LIKE '% SEO%';",
	"DELETE FROM wp_comments WHERE comment_author LIKE '%plugin%';",
	"DELETE FROM wp_comments WHERE comment_author LIKE '%girlfriend%';",
	"DELETE FROM wp_comments WHERE comment_author LIKE '%mp3%';",
	"DELETE FROM wp_comments WHERE comment_author LIKE '%mp4%';",
	"DELETE FROM wp_comments WHERE comment_author LIKE '%barcode%';",
	"DELETE FROM wp_comments WHERE comment_author LIKE '%google%';",
	"DELETE FROM wp_comments WHERE comment_author LIKE '%porn%';",
	"DELETE FROM wp_comments WHERE comment_author LIKE '%psychic%';",
	"DELETE FROM wp_comments WHERE comment_author LIKE '%android%';",
	"DELETE FROM wp_comments WHERE comment_author LIKE '%shop%';",
	"DELETE FROM wp_comments WHERE comment_author LIKE '%flight%';",
	"DELETE FROM wp_comments WHERE comment_author LIKE '%video%';",
	"DELETE FROM wp_comments WHERE comment_author LIKE '%phone%';",
	"DELETE FROM wp_comments WHERE comment_content LIKE '%a href%';",
	"DELETE FROM wp_comments WHERE comment_content LIKE '%http%';",
	"DELETE FROM wp_commentmeta WHERE (SELECT COUNT(*) FROM wp_comments WHERE wp_comments.comment_ID = wp_commentmeta.comment_id) = 0;",
);

foreach($queries as $sql){
	$wpdb->query($sql);
}
die('Comments have been cleaned.');
