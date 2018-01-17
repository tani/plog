<?php
/* 
 * This file is part of the plog.
 * Copyright (c) 2017 TANIGUCHI Masaya.
 * 
 * This program is free software: you can redistribute it and/or modify  
 * it under the terms of the GNU General Public License as published by  
 * the Free Software Foundation, version 3.
 *
 * This program is distributed in the hope that it will be useful, but 
 * WITHOUT ANY WARRANTY; without even the implied warranty of 
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU 
 * General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License 
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
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
