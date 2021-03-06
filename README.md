![N|Solid](https://mamen.at/ugamela/images/logo.png)

[![Build Status](https://travis-ci.org/mamen/ugamela.svg?branch=master)](https://travis-ci.org/mamen/ugamela)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/4d0fb3f129a8413e820144e6fba280e1)](https://www.codacy.com/app/mamen/ugamela?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=mamen/ugamela&amp;utm_campaign=Badge_Grade)
[![Codacy Badge](https://api.codacy.com/project/badge/Coverage/4d0fb3f129a8413e820144e6fba280e1)](https://www.codacy.com/app/mamen/ugamela?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=mamen/ugamela&amp;utm_campaign=Badge_Coverage)
[![Discord Server](https://discordapp.com/api/guilds/339129999082913794/embed.png)](https://discord.gg/YDUHM3k)
[![License: AGPL v3](https://img.shields.io/badge/License-AGPL%20v3-blue.svg)](./LICENSE)

# What is ugamela?

ugamela is a open-source clone of the popular browsergame ogame, developed by the Gameforge 4D GmbH. It first appeared around the year 2006, when Peberos published the source-code for his version of ugamela. It stayed open-source until the version 0.2-r13, which can still be found for download. After this, Peberos continued to improve ugamela as a closed-source browsergame.

Now, many years later, ugamela is back, redone completely from scratch with the latest web-technologies available. Its goal is to be as close to the original ogame (also known as ogame classic) as possible.

# Disclaimer

This open-source project is still in an alpha-state, **please do not use this in an production-environment**. Currently, not many features are available and this game is not fully playable. Feel free to contribute by making a pull-request.

# Project-Structure

```shell
┌─── core/                       # → contains all necessary classes
│   │── classes/                 # → classes for the ORM-Mapping and parent-classes
│   │   │── data                 # → classes, which map database-values to objects
│   │   └── units                # → classes for various ingame-units
│   ├── controllers/             # → all needed controller-classes
│   ├── interfaces/              # → interfaces the classes
│   ├── language/                # → contains all translations in subfolders named after their ISO 639-1 language-code
│   ├── models/                  # → all needed model-classes
│   ├── templates/               # → template for each site (HTML)
│   └── views/                   # → all needed view-classes
├── css/                         # → css for all pages outside of the game
├── images/                      # → images for all pages outside of the game
├── install/                     # → contains the necessary files for a first-time setup
├── scripts/                     # → javascript-files
├── skins/                       # → skins, which are useable ingame (all images and css for the game must go here)
├── game.php                     # → the main php-file, which dynamically loads the needed pages
├── index.php                    # → redirects to the game.php if logged in, else to the login-page
├── login.php                    # → login-form for the user
├── logout.php                   # → user-logout
└── register.php                 # → registration
```

# Quick Start

1.  This project uses is being developed with the (currently) latest release of PHP (Version 7.1.9) and mariaDB (Version 10.2). For a easy quick start, use the latest release of [XAMPP](https://www.apachefriends.org/de/download.html) or use [Docker](https://www.docker.com) with the necessary containers.
2.  After setting up your environment, import the sql-file located in the install directory.
3.  Edit the config.sample.php in the core-folder to match your server-configuration and **rename it to config.php and change the classname to Config**.

# Documentation & Demo

A live-demo can be found [here](https://ugamela.mamen.at). This demo may not always contain the latest version of this repository.

The credentials for the test-account are:

```
Username: test
Password: test
```

The [documentation](https://ugamela.mamen.at/docs) is hosted on the same server as the game.

# Roadmap

The current roadmap for the next version is listed below with their respective issues linked.

* [ ] ability to build defense ([#10](https://github.com/mamen/ugamela/issues/10))
* [ ] empire-view ([#31](https://github.com/mamen/ugamela/issues/31))
* [ ] techtree-view ([#32](https://github.com/mamen/ugamela/issues/32))
* [ ] simple statistics ([#11](https://github.com/mamen/ugamela/issues/11))
* [ ] research
    - [ ] make technologies usefull (make ships go faster etc.) ([#33](https://github.com/mamen/ugamela/issues/33))
* [ ] fleet
    - [X] transportation
    - [ ] colonization ([#36](https://github.com/mamen/ugamela/issues/36))
* [ ] settings-view ([#14](https://github.com/mamen/ugamela/issues/14))
* [ ] search-functionality ([#37](https://github.com/mamen/ugamela/issues/37))
* [ ] admin-panel ([#39](https://github.com/mamen/ugamela/issues/39))
    - [ ] show currently online users
    - [ ] show all users/planets
    - [ ] ban/unban users
    - [ ] send messages to all players
* [ ] game-installer ([#38](https://github.com/mamen/ugamela/issues/38))

# Support / Questions

For any further questions, support or general talk, please visit our Discord by clicking on the image below or follow the link.

[![N|Solid](https://t5.rbxcdn.com/18108a5641ff1becc8dfa20aed634d1f)](https://discord.gg/YDUHM3k)

https://discord.gg/YDUHM3k
