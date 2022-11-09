<?php
namespace Deployer;

require 'recipe/common.php';

// Config

set('repository', 'git@github.com:Sikoual/symfony-github.git');
set('git_tty', false);

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('9a7w6.ftp.infomaniak.com')
    ->set('remote_user', '9a7w6_maximeh')
    ->set('deploy_path', 'deployer');

// Hooks

after('deploy:failed', 'deploy:unlock');
