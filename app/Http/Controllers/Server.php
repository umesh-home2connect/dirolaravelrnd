<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class Server extends Controller
{
    public function deploy(){
       $git_add =  shell_exec('git add .');
       $git_com =  shell_exec('git commit -m "Initial commit');
       $git_log =  shell_exec('git log');
//        'git commit -m "Initial commit'
//        'git push origin master'
        $git_status = exec('git status');
//        $git_commit =  shell_exec('git branch');
        $git_pull =  shell_exec('git pull origin master');
        $whoami =  shell_exec('whoami');
        
        echo '<pre>'; print_r($git_add); echo '</pre>';
        echo '<pre>'; print_r($git_com); echo '</pre>';
        echo '<pre>'; print_r($git_log); echo '</pre>';
        echo '<pre>'; print_r($git_status); echo '</pre>';
        echo '<pre>'; print_r($git_pull); echo '</pre>';
//        echo '<pre>'; print_r($git_commit); echo '</pre>';
//        echo '<pre>'; print_r($git_pull); echo '</pre>';
//        echo '<pre>'; print_r($whoami); echo '</pre>';
        exit();
//        SSH::into('production')->run(array(
//	    'cd ~/public_html/mywebsite',
//	    'git pull origin master'
//	), function($line){
//	
//	    echo $line.PHP_EOL; // outputs server feedback
//	});
        
    }
}
