<?php

require_once 'FeedParser.php';

$feeds = array(
	'http://twitter.com/statuses/user_timeline/15039921.atom',
	'http://api.flickr.com/services/feeds/photos_public.gne?id=30516977@N00&lang=en-us&format=atom',
	'http://feeds.delicious.com/v2/rss/isofarro?count=15',
	'http://www.isolani.co.uk/blog/index.atom',
	'http://www.isolani.co.uk/blog/links.atom',
	'http://www.accessibilitytips.com/feed/atom/',
	'http://www.internationalisationtips.com/feed/atom/',
	'http://www.webstandardstips.com/feed/atom/'
);


$parser = new FeedParser();

$feed = $parser->parse($feeds[0]);
print_r($feed->entries[0]);





if (false) {
	$parser = new FeedParser();
	//$feed = $parser->parse('http://feeds.reuters.com/reuters/UKSportsNews');
	//$feed = $parser->parse('http://mf.feeds.reuters.com/reuters/UKTopNews');
	//$feed = $parser->parseXml(file_get_contents('testdata/001-reuters.xml'));
	//$feed = $parser->parseXml(file_get_contents('testdata/002-reuters.xml'));
	//$feed = $parser->parseXml(file_get_contents('testdata/003-guardian.xml'));
	//$feed = $parser->parseXml(file_get_contents('testdata/004-guardian.xml'));
	//$feed = $parser->parseXml(file_get_contents('testdata/005-reuters-video.xml'));
	//$feed = $parser->parseXml(file_get_contents('testdata/006-reuters-video.xml'));
	//$feed = $parser->parseXml(file_get_contents('testdata/007-bbc-frontpage.xml'));
	//$feed = $parser->parseXml(file_get_contents('testdata/008-bbc-video.xml'));
	//$feed = $parser->parseXml(file_get_contents('testdata/009-timesonline.xml'));
	//$feed = $parser->parseXml(file_get_contents('testdata/010-timesonline-podcasts.xml'));
	//$feed = $parser->parseXml(file_get_contents('testdata/011-timesonline-video.xml'));
	//$feed = $parser->parseXml(file_get_contents('testdata/012-telegraph-news.xml'));
	//$feed = $parser->parseXml(file_get_contents('testdata/013-nytimes.xml'));
	//$feed = $parser->parseXml(file_get_contents('testdata/014-nytimes-weekinreview.xml'));
	//$feed = $parser->parseXml(file_get_contents('testdata/015-wallstreetjournal.xml'));
	//$feed = $parser->parseXml(file_get_contents('testdata/016-financialtimes.xml'));
	//$feed = $parser->parseXml(file_get_contents('testdata/017-financialtimes-webmaster.xml'));
	//$feed = $parser->parseXml(file_get_contents('testdata/018-financialtimes-podcasts.xml'));
	//$feed = $parser->parseXml(file_get_contents('testdata/019-financialtimes-moneyShow.xml'));
	//$feed = $parser->parseXml(file_get_contents('testdata/020-yahoo-finance-yhoo.xml'));
	//$feed = $parser->parseXml(file_get_contents('testdata/021-yahoo-uk-finance-yhoo.xml'));
	//$feed = $parser->parseXml(file_get_contents('testdata/022-yahoo-news.xml'));
	//$feed = $parser->parseXml(file_get_contents('testdata/022-yahoo-uk-news.xml'));
	//$feed = $parser->parseXml(file_get_contents('testdata/023-ap-news-author.xml'));
	//$feed = $parser->parseXml(file_get_contents('testdata/024-afp-rssrdf.xml'));
	//$feed = $parser->parseXml(file_get_contents('testdata/025-flickr-rss2.xml'));
	$feed = $parser->parseXml(file_get_contents('testdata/026-flickr-atom.xml'));
	//$feed = $parser->parseXml(file_get_contents('testdata/027-flickr-rdf.xml'));
	//$feed = $parser->parseXml(file_get_contents('testdata/028-flickr-rss092.xml'));
	//$feed = $parser->parseXml(file_get_contents('testdata/029-flickr-rss091.xml'));
	//$feed = $parser->parseXml(file_get_contents('testdata/030-flickr-rss2-enclosure.xml'));
	echo "FEED: "; print_r($feed);
}

?>