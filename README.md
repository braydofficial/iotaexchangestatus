# iotaexchangestatus
IOTA exchange status is a simple website for tracking the current withdrawal possibility of IOTA tokens at the exchanges by community votes.

The website is available at https://iotaexchangestatus.canreal.net

The changelog can be found at https://github.com/braydofficial/iotaexchangestatus/wiki/Changelog

## FAQs
### How does it work?
You can visit the website and vote if a specific exchange currently allows or suspends withdrawal of IOTA tokens. Votes are stored 24 hours and always reset at 12am German time. This way the vote-based data is never older than 24 hours.
### Is it planned to store every vote 24 hours instead of resetting them at a specific time that repeats every 24 hours?
Yes. Currently, if you vote at one hour before the daily reset, your vote only gets stored one hour. In the future, I want to add a time stamp to every vote, so it get's deleted after 24 hours instead of a daily reset of all votes at once.
### Which data of me is stored?
The website does not use cookies or any tracking like Google Analytics or else. The only thing that is getting stored is your IP address. However, your IP address is only stored 24 hours and gets fully deleted afterwards. Also, your IP address is hashed together with a random generated salt as a SHA256 hash. This way your IP does not get exposed in plain text in case of an attack and successfull breach onto the database.
### Do you plan to make updates?
Sure, that's why there's a link to the changelog above! :) You can also always make suggestions, contribute to the project or create your own fork (Please respect the license, so that the project is always Open Source and usable for everyone in the community).
