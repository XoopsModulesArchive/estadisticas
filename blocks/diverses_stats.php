<?php

// ------------------------------------------------------------------------- //
// XOOPS - PHP Content Management System                                     //
// <http://xoopscube.org>                                                   //
// ------------------------------------------------------------------------- //
// Based on:                                                                 //
// myPHPNUKE Web Portal System - http://myphpnuke.com/                       //
// PHP-NUKE Web Portal System - http://phpnuke.org/                          //
// Thatware - http://thatware.org/                                           //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify      //
// it under the terms of the GNU General Public License as published by      //
// the Free Software Foundation; either version 2 of the License, or         //
// (at your option) any later version.                                       //
//                                                                           //
// This program is distributed in the hope that it will be useful,           //
// but WITHOUT ANY WARRANTY; without even the implied warranty of            //
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the              //
// GNU General Public License for more details.                              //
//                                                                           //
// You should have received a copy of the GNU General Public License         //
// along with this program; if not, write to the Free Software               //
// Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA   //
// ------------------------------------------------------------------------- //
function b_diverssats_show()
{
    global $xoopsDB, $xoopsConfig;

    $block = [];

    $block['title'] = 'Estatisticas';

    $result = $xoopsDB->query('select uid, uname, level from ' . $xoopsDB->prefix('users') . ' where level=1 order by uid DESC', 1);

    [$uid, $lastuser] = $xoopsDB->fetchRow($result);

    $result = $xoopsDB->query('SELECT COUNT(*) from ' . $xoopsDB->prefix('users') . ' where level>=0 order by uid DESC', 1);

    [$numbers] = $xoopsDB->fetchRow($result);

    $result = $xoopsDB->query('SELECT COUNT(*) from ' . $xoopsDB->prefix('users') . ' where level=0 order by uid DESC', 1);

    [$inactifs] = $xoopsDB->fetchRow($result);

    $result = $xoopsDB->query('SELECT COUNT(*) from ' . $xoopsDB->prefix('users') . ' where level=5 order by uid DESC', 1);

    [$admins] = $xoopsDB->fetchRow($result);

    $result = $xoopsDB->query('SELECT count(*) from ' . $xoopsDB->prefix('mydownloads_downloads') . '');

    [$numrows2] = $xoopsDB->fetchRow($result);

    $result = $xoopsDB->query('SELECT count(*) from ' . $xoopsDB->prefix('bb_forums') . '');

    [$bbforum] = $xoopsDB->fetchRow($result);

    $result = $xoopsDB->query('SELECT count(*) from ' . $xoopsDB->prefix('mylinks_links') . '');

    [$links] = $xoopsDB->fetchRow($result);

    $result = $xoopsDB->query('SELECT sum(comments) from ' . $xoopsDB->prefix('stories') . '');

    [$comment] = $xoopsDB->fetchRow($result);

    $result = $xoopsDB->query('SELECT count(*) from ' . $xoopsDB->prefix('stories') . '');

    [$news] = $xoopsDB->fetchRow($result);

    $result = $xoopsDB->query('select sum(hits) from ' . $xoopsDB->prefix('mylinks_links') . '');

    [$hitsliens] = $xoopsDB->fetchRow($result);

    $result = $xoopsDB->query('SELECT count(*) from ' . $xoopsDB->prefix('bb_posts') . '');

    [$bbpost] = $xoopsDB->fetchRow($result);

    $result = $xoopsDB->query('SELECT count(*) from ' . $xoopsDB->prefix('bb_topics') . '');

    [$bbtopics] = $xoopsDB->fetchRow($result);

    $result = $xoopsDB->query('select sum(hits) from ' . $xoopsDB->prefix('mydownloads_downloads') . '');

    [$hits] = $xoopsDB->fetchRow($result);

    $result = $xoopsDB->query('select sum(topic_views) from ' . $xoopsDB->prefix('bb_topics') . '');

    [$postviews] = $xoopsDB->fetchRow($result);

    $result = $xoopsDB->query('select sum(counter) from ' . $xoopsDB->prefix('stories') . '');

    [$storiesviews] = $xoopsDB->fetchRow($result);

    $block['content'] = '<center><b>O último visitante<br>registrado foi :</b><br><a href="' . $xoopsConfig['xoops_url'] . "/userinfo.php?uid=$uid\"><EM><b>$lastuser</EM></b></a><br><br>
<b>$inactifs usuarios<br>inativos</b><br><b>y</b><br><b>$numbers usuarios<br>registrados</b><br>::> <a href=\"" . $xoopsConfig['xoops_url'] . '/modules/xoopsmembers/index.php"><b>Lista</b></a> <::<br><br>
<a href="' . $xoopsConfig['xoops_url'] . "/modules/news/index.php\"><b>$news</a> Noticias<br>Publicadas</b><br>
(<b>$storiesviews</b> Lecturas)<br>
<b>$comment</b> Comentarios<br><br>
<a href=\"" . $xoopsConfig['xoops_url'] . "/modules/mydownloads/index.php\"><b>$numrows2</a> Ficheros<br>en Descargas</b><br>
(<b>$hits</b> Descargas)<br><br>
<a href=\"" . $xoopsConfig['xoops_url'] . "/modules/mylinks/index.php\"><b>$links</a> Enlaces</b>
(<b>$hitsliens</b> Sitios Visitados)<br><br>
<b>$bbforum Foros</b><br>
(<b>$bbpost</b> Temas,<b>$bbtopics</b> respuestas,<b>$postviews</b> Lecturas)


</center>";

    return $block;
}
