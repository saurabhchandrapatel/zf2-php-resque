# ZF2 PHP Resque

#Run worker in zf2 

php public/index.php  run-worker

# Add job in queue

\Resque::setBackend('localhost:6379');
$args = array( );
\Resque::enqueue('zf2-php-resque', 'Resquezf2\Model\Job', $args );
                
