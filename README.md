Plog
================================================================================
Simple markdown based blog engine.

## Features
- Markdown syntax (Parsedown)
- Sync articles with a git repository (webhook API)
- Bootswatch themes
- Smart URL (`example.com/plog.php/1970/01/01/sample`)
- Articles listing (`example.com/plog.php/1970/` shows all articles at 1970's)

## Requirements
- PHP 5.x or later

## Setup
clone this project.

```
$ git clone https://github.com/asciian/plog
```

Modify your `plog.ini`

```
; plog.ini

[general]
title  = "john's blog"
author = "John Doe"
email  = "john@example.com"

[page]
theme = "flatly" ;bootswatch theme

[webhook]
secret = "your_secret_key"
commands[] = "git pull origin master"
```

## Upload article
Puts a textfile in `content/` directory like `content/yyyy-mm-dd-title.md`.
A title of article is h1 (`#` or `=====`) and title of section is h2.


## Webhook
You add a webhook(`https://example.com/plog.php/webhook?secret=your_secret_key`)
to Github Webhooks or Bitbucket Webhooks.

`your_secret_key` is defined in `plog.ini`.

## License
GPL v3 (see LICENSE file in this repository)

## Copyright
Copyright (c) 2016 TANIGUCHI Masaya All Rights Reserved.
