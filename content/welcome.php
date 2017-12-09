<?php
/**
 * Plog - Simple markdown based blog eingine.
 *
 * Author: asciian <asciian@moffice.space>
 * Website: https://www.moffice.space/blog/plog.php
 * License: MIT (see also LICENSE file in this repository)
 */
$filenames = array_reverse(glob('content/*.md'));
for ($i = 0; $i < min(3, count($filenames)); ++$i) {
    preg_match('/\d+-\d+-\d+/', $filenames[$i], $matches);
    $content = '<article>';
    $content .= "<time>$matches[0]</time>";
    $content .= Parsedown::instance()->text(file_get_contents($filenames[$i]));
    $content .= '</article>';
    echo $content;
}
