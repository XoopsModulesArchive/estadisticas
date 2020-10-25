<?php

$modversion['name'] = _MI_INCBLOCKS_NAME;
$modversion['version'] = 0.1;
$modversion['description'] = _MI_INCBLOCKS_DESC;
$modversion['credits'] = '';
$modversion['author'] = '<a href="http://www.inconnueteam.net">kyex for InconnueTeam</a>';
$modversion['help'] = '';
$modversion['license'] = 'GPL';
$modversion['official'] = 0;
$modversion['image'] = 'estadisticas_logo.png';
$modversion['dirname'] = 'estadisticas';

// Menu
$modversion['hasMain'] = 0;

// Admin
$modversion['hasAdmin'] = 0;

//diverses stats
$modversion['blocks'][1]['file'] = 'diverses_stats.php';
$modversion['blocks'][1]['name'] = _MI_INCBLOCKS_DIVERSESSATS_BNAME;
$modversion['blocks'][1]['description'] = 'Muestra las estadísticas del sitio en un bloque';
$modversion['blocks'][1]['show_func'] = 'b_diverssats_show';
