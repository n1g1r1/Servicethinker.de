# Read later plugin

This is a plugin for [Kirby](http://getkirby.com/) that let´s you save the page for later reading. It currently supports [Instapaper](http://www.instapaper.com/) and [Pocket](http://getpocket.com/).

## Installation

Put the `readlater` folder in `/site/plugins`.

## How to use it

Simple! Put `<?php echo readlater($page->title(),'instapaper') ?>` in your template and it will echo the a link that let´s you save the page to Instapaper. Do you want to use Pocket? Then you use `<?php echo readlater($page->title(),'pocket') ?>` in your template.

You can pass any other page variable to use for the title. I asume that you use `$page->title()` for the title but you are free to change it.

## Example usage

    <?php snippet('header') ?>
    <?php snippet('menu') ?>
    <?php snippet('submenu') ?>

    <section class="content">

        <article>
            <?php echo readlater($page->title(),'pocket') ?>
            <h1><?php echo html($page->title()) ?></h1>
            <?php echo kirbytext($page->text()) ?>
        </article>

    </section>

    <?php snippet('footer') ?>

## Link text

The plugin let's you change the link text with ease. The default format for Instapaper is `Add to Instapaper`. For Pocket we use `Save to Pocket`.

Simply pass the link text as third argument to use your own.

	<?php echo readlater($page->title(), 'instapaper', 'Read later'); ?>

## Options

You can add additional options to customize the html result:

	<?php

	echo readlater($page->title(), 'instapaper', 'Read later', array(
		'class'  => 'mycustomclass',
		'target' => '_blank',
		'rel'    => 'somerelattribute'
	));

	?>

## Author

Author: Roy Lodder <http://roylodder.com>
Contributor: Bastian Allgeier <http://getkirby.com>