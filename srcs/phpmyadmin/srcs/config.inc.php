<?php

declare(strict_types=1);

/**                                                                                                                              
 * This is needed for cookie based authentication to encrypt password in                                                         
 * cookie. Needs to be 32 chars long.                                                                                            
 */
$cfg['blowfish_secret'] = 'FDXO6GfXqQSdMv8FGd::0EM{fOGvMN8E';

/* Servers configuration */
$i = 1;

/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'cookie';
/* Server parameters */
$cfg['Servers'][$i]['host'] = '${MYSQL_DB_HOST}';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = true;

$cfg['Servers'][$i]['port'] = '3306';
$cfg['Servers'][$i]['user'] = 'admin';
$cfg['Servers'][$i]['password'] = 'admin';

/* Directories for saving/loading files from server */
$cfg['UploadDir'] = '';
$cfg['PmaAbsoluteUri'] = '${PHPSVC_IP}:5000';
$cfg['SaveDir'] = '';

$cfg['TempDir'] = 'tmp';