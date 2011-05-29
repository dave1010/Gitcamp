# Gitcamp #

Script that loads Basecamp todo lists into Git commit messages, and marks todos as complete if they are kept in the commit message.


# Install #
	
	# Install Zend Framework
	sudo pear channel-discover zend.googlecode.com/svn
	sudo pear install zend/zend
	
	# Install gitcamp
    git clone ssh://git@git.brainstormmedia.com/bsm/gitcamp.git ~/Sites/gitcamp;
    echo "export PATH=~/Sites/gitcamp:$PATH" >> ~/.bash_profile;
    # Now run "gitcamp init" in a git repo


## What is my Basecamp subdomain?

Your Basecamp subdomain is the first part of your Basecamp URL.
For example, if you Basecamp URL were:

    https://company-name.basecamphq.com

Your Basecamp subdomain would be "company-name".


## Where do I find my API Token?

In your Basecamp account, go to "My info," then click 
"Show your tokens" at the bottom of the page.

Your Basecamp API Token is the long string of letters and
numbers under "Token for feed readers or the Basecamp API".

