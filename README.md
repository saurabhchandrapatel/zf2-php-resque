# zf2-php-resque
run worker in zf2 

php public/index.php  run-worker

add job in queue


\Resque::setBackend('localhost:6379');
$args = array( );
\Resque::enqueue('zf2-php-resque', 'Resquezf2\Model\Job', $args );
                
