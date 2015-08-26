#ZF2 PHP Resque Worker in zf2

<b>Dependency</b>
<ol>
<li>
  redis server
</li>
</ol>
<b>Instalation</b>

<ol>


<li>
move file  <strong>resquezf2.global.php.dist</strong> from config folder to globle config folder and rename file to <strong>resquezf2.global.php</strong> 
</li>
<li>
  add <strong>Resquezf2</strong> in application.config.php file at moduel section to load this moudle.
</li>
<li>
load Resque Library; 
add this line to your module.php
<pre>require_once APPLICATION_PATH."/module/Resquezf2/src/Resquezf2/vendor/autoload.php";</pre>
</li

<li>
    if you are useing <a href="https://github.com/bjyoungblood/BjyAuthorize">BjyAuthorize</a> moduel then add this line to your moduel.php  to desable its for commond line rout
    
    <pre>
    $request = $e->getTarget()->getServiceManager()->get('Request'); 
        if ($request instanceof ConsoleRequest) {
            //throw new RuntimeException('You can only use this action from a console!');
            // console desable BjyAuthorize
        }else{

            //bjyauthorise navigation
            $authorize = $e->getTarget()->getServiceManager()->get('BjyAuthorizeServiceAuthorize');
            $acl = $authorize->getAcl();
            $role = $authorize->getIdentity();  

            // var_dump($acl , $role); exit();
            $parentRoles = $authorize->getIdentityProvider()->getIdentityRoles(); 
            \Zend\View\Helper\Navigation::setDefaultAcl($acl);
            \Zend\View\Helper\Navigation::setDefaultRole($role); 

        }
      </pre>
      
      
      otherwise skip this .

</li>
<li>
<b>run worker in commond line</b>
<pre>php public/index.php run-worker</pre>
</li>
<li>
#Add job in queue
<pre>
\Resque::setBackend('localhost:6379'); 

$args = array( ); 
\Resque::enqueue('zf2-php-resque', 'Resquezf2\Model\Job', $args );
</pre>
</li>

<li>
  you can also create your own class in model location.
</li>
</ol>
