<?php  
// example of multiple processes  
date_default_timezone_set( 'Asia/Chongqing');  
echo "parent start, pid ", getmypid(), "\n" ;  
beep();  
for ($i=0; $i<3; ++$i){  
      $pid = pcntl_fork();  
       if ($pid == -1){  
             die ("cannot fork" );  
      } else if ($pid > 0){  
             echo "parent continue \n";  
             for ($k=0; $k<2; ++$k){  
                  beep();  
            }  
      } else if ($pid == 0){  
             echo "child start, pid ", getmypid(), "\n" ;  
             for ($j=0; $j<5; ++$j){  
                  beep();  
            }  
             exit ;  
      }  
}  
