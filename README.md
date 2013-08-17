EZTV RSS Generator
==================

This project scrappes the eztv.it page of a specified show and generates a RSS
torrent feed that can be readed by uTorrent for automatize the download of TV
show.

### Requirements

1. A Web Server
2. PHP execution on the server (XAMPP it's the easiest way to set the environment up)

### Installation

Drop the files on a folder of your web server root. That's all!

### URL configuration on uTorrent

1. Go to eztv.it, and click on the show you want to create a RSS for
2. The URL of the show should be something like this: 

	http://eztv.it/shows/481/game-of-thrones/

3. Copy the last 2 parts of the URL: 481/game-of-thrones/
4. The URL that you have to setup on the RSS feed on uTorrent should be:

	http://your_host/the_path_to_the_script/index.php?show=481/game-of-thrones/

IMPORTANT: always copy the last 2 parts (the number and the name of the show)

Enjoy!!


