Wiki.php
========

Wiki.php is a simple cms/wiki script.  You can see it in use here:

* [Thunix Wiki](https://wiki.thunix.net)
* [Ubergeek's Personal Page](https://thunix.net/~ubergeek)

Installation
============

Installation is really only a couple of steps:


* Clone down the repo
* Edit config.php.  The values are pretty self-explantory, but there's also comments explaining
* Edit includes/header.md, includes/footer.md, and includes/sidebar.md


Once that's all set, you can start editing articles.  Main.md is always the landing page.

Directory Structure
===================

    ./ <-- Doc root
    ./wiki.php <-- main code
    ./media <-- Images and such.  Files here do get get hit by the rewrite rule
    ./articles <-- All of your site's content
    ./includes <-- Support files that make up the layout
      header.md <-- site header
      footer.md <-- site footer
      sidebar.mb <-- site sidebar
    ./config.php <-- Site configuration file

Support
=======

Open an issue at (ubergeek/wiki.php)[https://www.tildegit.org/ubergeek/wiki.php).  PRs are also welcomed!

