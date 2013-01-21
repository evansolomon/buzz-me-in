# Buzz Me In

I can buzz people into my building with a callbox, but I'd like to be able to let myself in with a secret code.  I wrote this (tiny) app to act as a phone number for my callbox and give me a few seconds to enter a secret code before dialing my cell phone number to let me buzz people in as usual.

## Setup

* Use the URL for `callbox.xml` as your "Voice Request URL" on Twilio.
* Set a PIN in `pin.php` and your real phone number in `callbox.xml`.  That's it.

## Usage
When someone comes to your door, they'll dial your apartment's number as usual.  A very nice woman will ask them to wait one moment, and in 5 seconds the call will be forwarded to your real number.

When you come to your own door, dial your apartment's number and then type your secret key followed by '#'.  Your door will automattically unlock.  If you need to use a tone other than 9, you can generate one [here](http://www.dialabc.com/sound/generate/).
