# wordpress-spam-killer
Kill that WordPress comment spam, y'all. This program gets rid of bad comments in WordPress.

If you happen to be running a website in Spain, Russia, or the Netherlands, there are some lines in the file that you may want to comment out. I have clearly marked those lines with the country name.

Installation instructions: 
1) Place this file in a folder called crons in the root of your WordPress installation.

Add a cron job to wget the file twice a day.

Recommended syntax:
5 2,22 * * 1 wget -q http://[yoururl]/crons/cron-wp-comments.php
