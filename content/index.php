<?php
/**
 * Plog - Simple markdown based blog eingine
 *
 * Author: TANIGUCHI Masaya <ta2gch@moffice.space>
 * Website: https://www.moffice.space/blog/plog.php
 * License: MIT (see also LICENSE file in this repository)
 */
$filenames = array_reverse(glob('content/*.md'));
for ($i=0; $i < min(3, count($filenames)); $i++) {
  preg_match('/\d+-\d+-\d+/',$filenames[$i],$matches);
  $article = Parsedown::instance()->text(file_get_contents($filenames[$i]));
  $article = str_replace('<h1>',"<h1><time>$matches[0]</time> ",$article);
  echo "<article>$article</article>";
}
?>
