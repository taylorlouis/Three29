# Three29
Here is my solution to the Three29 assignment.  
I have an index page that includes most of the code plus a javascript file that includes the functionality for handling cookies.  The third file is a PHP file named cookie.php that was specified as a requirement to use for setting the cookie value.  There is one cookie that I use named 'id'.  All three files belong in the same directory.

Notes on my General Approach 
I thought about how best to implement this solution and I came to the following decision:
Since there are a limited number of possible states for any of the divs I decided that it made the best sense Not to post any more information to the cookie script than an actual identifier of one of the few possible states that the divs could change into.  All of the actual changing of the css information happens entirely on the client side so there is no reason to send any more information about the change in style from a design perspective.  Sending information always opens up the possibility of Losing information so you should always think to send as little as possible.  If the states could vary widely based on user input that would be a different story and you would have to send as much as necessary.

Please note:  as far as the iterator in the fourth div goes I decided to craft a solution in JavaScript because I wanted to get more practice with JavaScript.  I hope you don't mind.  For this I created a subroutine called printabunch that first loops up to a specified limit entered as an argument and then loops back down while appending numbers to a page element entered as another argument.  This makes this feature semi-reusable at least but it isn't perfect because I'm entering the number 7 and it's looping up to 9 but at least it works.

I tried to test it extensively and I had trouble with the JavaScript being called more than once for each click.  I have no idea why this is the case but because of this I had to add in a hack that would filter out any clicks in which the form id value equals 'wrapper'.  It's kind of a hack but it does work well enough.  

I also included the responsive feature that you requested which works almost exactly as was specified.  The only quirk is that the transition feature for the background that was requested for all of the divs causes the bg-color in div 3 to disappear gradually rather than immediately but otherwise everything seems to function exactly as demonstrated in your video.

Please have a look and let me know what you think. 
