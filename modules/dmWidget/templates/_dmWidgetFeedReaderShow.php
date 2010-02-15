<?php

/*
 * An $item is an array containing:
 * - title:       title of the feed item
 * - link:        url of the feed item
 * - content:     HTML content
 * - pub_date:    item publication date (timestamp)
 */

echo _open('ul');

foreach($items as $item)
{
  echo _tag('li',

    // link to the feed page
    _link($item['link'])->text($item['title'])->set('.feed_item_link').

    // render truncated feed content
    _tag('div.feed_item_content', dmString::truncate(strip_tags($item['content']), 100))

  );
}

echo _close('ul');