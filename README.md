# Cards Generator

Cards generator plugin for [WordPress][1].

__This plugin is still under development and is not finished yet - see sections [Features](#features) and [TODO](#todo) for more details.__

## Donations

If your like this plugin and you want to be maintained and improved more frequently consider donation:

[![Make donation](https://www.paypalobjects.com/webstatic/paypalme/images/pp_logo_small.png "PayPal.Me, your link to getting paid")][3]

## Features

* new [custom post type][2] _card_
* ~~options where you can set _formats_ and _resources_~~

## TODO

* [ ] ~~add new [CPT][2] _card_~~
  - [ ] Administrator should be able to switch off `publicly_queryable` argument (_maybe will be better to expose more arguments to the administrator to set..._)
* [ ] create options for _formats_ and _resources_
  - [ ] we should be able to set what _resources_ selected _format_ supports
  - [ ] _format_ has these properties: _height_, _width_, *supported_resources*
  - [ ] _resource_ has these properties: __...__
  - [ ] options for _card_ [CPT][2]
* [ ] add [Theme Customize][4] support
  - [ ] add new section where are listed existing cards
  - [ ] add sub-section for selected card to edit
* [ ] add proper plugin's description

[1]: https://wordpress.org/
[2]: https://developer.wordpress.org/reference/functions/register_post_type/
[3]: https://www.paypal.me/ondrejd
[4]: https://codex.wordpress.org/Theme_Customization_API
