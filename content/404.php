<?php $toppage = str_replace($_SERVER['PATH_INFO'],'',$_SERVER['REQUEST_URI']) ?>
<h1>404 Not Found</h1>
<p>
  No corresponding article was found.
  Do you want to return to the <a href="<?php echo $toppage ?>">top page</a>?
</p>
