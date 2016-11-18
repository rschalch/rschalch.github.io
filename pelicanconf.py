#!/usr/bin/env python
# -*- coding: utf-8 -*- #
from __future__ import unicode_literals

AUTHOR = 'Ricardo Bürger Schalch'
SITENAME = "rschalch's"
ALT_NAME = SITENAME + " python blog"

PATH = 'content'

TIMEZONE = 'America/Sao_Paulo'

DEFAULT_LANG = 'pt-br'

THEME = "themes/mg"

TYPOGRIFY = True

# Feed generation is usually not desired when developing
FEED_ALL_ATOM = None
CATEGORY_FEED_ATOM = None
TRANSLATION_FEED_ATOM = None
AUTHOR_FEED_ATOM = None
AUTHOR_FEED_RSS = None

# Blogroll
LINKS = (('Python.org', 'http://python.org/'),
         ('Pelican', 'http://getpelican.com/'),
         ('Grupo Python Sorocaba',
          'https://groups.google.com/forum/#!forum/python-sorocaba'),)

# Social widget
SOCIAL = (
    ('Twitter', 'https://twitter.com/rschalch'),
    ('Github', 'https://github.com/rschalch'),
    ('Facebook', 'https://www.facebook.com/ricardo.burgerschalch'),)

DEFAULT_PAGINATION = 10

PAGE_ORDER_BY = 'page-order'

# Uncomment following line if you want document-relative URLs when developing
RELATIVE_URLS = True

TAG_SAVE_AS = ''
AUTHOR_SAVE_AS = ''
DIRECT_TEMPLATES = ('index', 'categories', 'archives', 'search',
                    'tipue_search')
TIPUE_SEARCH_SAVE_AS = 'tipue_search.json'

SHARE = True

FOOTER = ("&copy; 2016 Ricardo Bürger Schalch. All rights reserved.<br>" +
          "Code snippets in the pages are released under " +
          "<a href=\"http://opensource.org/licenses/MIT\" target=\"_blank\">" +
          "The MIT License</a>, unless otherwise specified.")
