<?php
/**
 |--------------------------------------------------------------------------|
 |   https://github.com/3evils/                                             |
 |--------------------------------------------------------------------------|
 |   Licence Info: WTFPL                                                    |
 |--------------------------------------------------------------------------|
 |   Copyright (C) 2020 Evil-Trinity                                        |
 |--------------------------------------------------------------------------|
 |   A bittorrent tracker source based on an unreleased U-232               |
 |--------------------------------------------------------------------------|
 |   Project Leaders: AntiMidas,  Seeder                                    |
 |--------------------------------------------------------------------------|
                 _   _   _   _     _   _   _   _   _   _   _
                / \ / \ / \ / \   / \ / \ / \ / \ / \ / \ / \
               | E | v | i | l )-| T | r | i | n | i | t | y )
                \_/ \_/ \_/ \_/   \_/ \_/ \_/ \_/ \_/ \_/ \_/
*/
$count = 0;
	while ((list($code, $url) = each($smilies))) {
		if ($count % 20 == 0) $HTMLOUT.= "<p>";
		$HTMLOUT.= "     <a href=\"javascript: SmileIT('" . str_replace("'", "\'", $code) . "','shbox','shbox_text')\" aria-label='Dismiss alert' data-close><img src='./pic/smilies/" . $url . "' alt='' /></a>     ";
		$count++;
		if ($count % 20 == 0) $HTMLOUT.= "</p>";
	}
?>
