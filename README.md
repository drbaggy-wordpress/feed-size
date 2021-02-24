feed-size
=========

Simple addition to allow an arbitrary number of entries returned from a
feed request - useful when importing data into another site and wanting
to grab all entries

Add URL parameter "limit" with the number of posts to include:

Examples of use
---------------

 * `https://www.mysite.com/feed/` default returns 10 entries from feed
 * `https://www.mysite.com/feed/?limit=1` return just one entry from feed
 * `https://www.mysite.com/feed/?limit=1000000` return all (!) entries from feed
 * `https://www.mysite.com/category/human-cell-atlas/feed/?limit=1` return 1 entry from a category feed
