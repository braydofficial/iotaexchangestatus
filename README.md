# IOTA exchange status
<p>
  <img src="https://img.shields.io/tokei/lines/github/braydofficial/iotaexchangestatus">
  <img src="https://img.shields.io/github/license/braydofficial/iotaexchangestatus">
  <img src="https://img.shields.io/github/issues/braydofficial/iotaexchangestatus">
  <img src="https://img.shields.io/github/stars/braydofficial/iotaexchangestatus?style=social">
  <img src="https://img.shields.io/twitter/follow/thisdudeisvegan?style=social"><br>
  <img src="https://img.shields.io/website?down_color=lightgrey&down_message=red&up_color=green&up_message=online&url=https%3A%2F%2Fiotaexchangestatus.canreal.net">
</p>

<p align="center">
  <a href="#faqs">FAQs</a>
  &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#installation">Installation</a>
  &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#contributing">Contributing</a>
</p>

![grafik](https://user-images.githubusercontent.com/55672814/148083906-be823b47-92e7-4401-88bb-cf249fa78eeb.png)

IOTA exchange status is a simple website for tracking the current withdrawal possibility of IOTA tokens at the exchanges by community votes. Votes are being reset every 24 hours. The only data that is stored is the IP of the user who voted and the vote of the user. The stored IP address is being deleted after 24 hours. While being saved it is hashed together with a salt by using an SHA256 hash. This enables privacy of the user, even if the database is being breached.  
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

## Installation
The installation process is pretty straight forwards. You will need PHP8.0 installed and a MySQL database. Create a table in your database called 'votes' with the following structure:
![grafik](https://user-images.githubusercontent.com/55672814/148084696-75714aa0-fe61-4fcc-adf7-03d8c60b5998.png)

**Set up your webserver configuration with apache2, NGINX, etc. & clone the repo afterwards**
```
$ git clone https://github.com/braydofficial/iotaexchangestatus.git
```
**Install iota.php as a submodule, which is needed for checking the balances of the exchange wallets**
```
$ cd iotaexchangestatus
$ git submodule init
$ git submodule update
```
**Copy the sample-config.php to config.php**
```
$ cp sample-config.php config.php
```
**Now open config.php with your favorite text editor and adjust the settings for the data base and your salt**

## Contributing
You're always free to contribute to this little project with your code, ideas or else! However, please respect the license, so the project and its forks are always Open Source and available for everyone in the IOTA community to use. Thank you!
