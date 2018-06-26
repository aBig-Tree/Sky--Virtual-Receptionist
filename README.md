# Sky--Virtual-Receptionist
A simple app that uses zapier hooks and a program of your choice (e.g. pushbullet, slack) to greet guests at the door.  Add it to an Android tablet or an old iPad.

Created by: Steve Johnson @aBiG_Tree
Version: 1.0
Date: 26 June 2018
Summary: Quick and dirty way of having a professional looking virtual receptionist.  Intended for small companies, otherwise the notifications would be just stupid.

Requirements:
- Tablet (anything will work, but an older high-end is waaayyy better than a new cheap tablet)
- Tablet Stand (e.g. https://www.amazon.co.uk/s/field-keywords=secure+tablet+floor+stand)
- Zapier account
- Charging cable/plug (remember it needs to go down the back of the stand and up the wall.  I went for a 4m cable.)
- Full screen browser app (there's quite a few)
- Somewhere private to locate your file (e.g. FTP access)

Instructions
1. Go to Zapier and create a new zapp.  For the Trigger, select 'Webhooks' and select 'Catch Hook'
3. Enter the URL it gives you into each button below and append a persons name (or whatever) onto the URL.  See examples below.
4. Back in Zapier, select Pushbullet as the Action and select 'Send a Note'
5. For the template, use something decent for the title (I went with 'There's somebody at the door ha ha') and in the body add your catch hook.  
6. Install the desktop or chrome extension of Pushbullet, or whatever it is you're using and submit a test.
7. Once the below is done, upload your file somewhere accessible on the web.  I uploaded it to one of my sites via FTP and blocked it from the outside world using htaccess, so it can only be accessed via our IP address.
8. On your tablet, download a fullscreen browser and browse to your file (do a test on something off the network to check the block worked).
9. If your're on iOS, go into the accessibility settings and turn on 'Guided Access' to prevent people leaving the browser.  It'll walk you through it.
10. That's it!  You can now push out updates by updating the file via FTP and the tablet will pull them through overnight.

Notes
This probably isn't that tidy and I expect others could improve it - go for it!  I initially started it because as a small business, we don't have a receptionist.  So visitors and people delivering parcels would just wander in and as i was nearest the door, they'd come to me (I don't people all that well!!).  I then started to look into various solutions, but I was amazed at the amount of crap out there.  We already had an old tablet knocking around, so this only cost us about £60 all in.  Anyway, I started tinkering and ended up with this after a few iterations.  Hopefully it'll help a few people out.

I installed Pushbullet initially and later Slack on peoples machines to receive messages, but I expect you could probably hook it up to pretty much any messaging service. 

If you paid for the premium version of Zapier, you could set it up to notify a group of people or specific departments.  Otherwise i can see this getting a bit out of hand for larger companies (there's about 15 of us).

Feel free to use this, but it would be nice if you credited me.  Cheers!
