Feed size
=========

Simple addition to allow an arbitrary number of entries returned from a
feed request - useful when importing data into another site and wanting
to grab all entries

Add URL parameter "limit" with the number of posts to include:

For instances:

 * https://sangerinstitute.blog/feed/ - return 10 posts in feed list
   
 * https://sangerinstitute.blog/feed/?limit=1 - return just 1 post in feed list
 
 * https://sangerinstitute.blog/feed/?limit=1000000 - return all posts in feed list