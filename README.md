# codeigniter-reg-login
How to create a login &amp; registration system in Codeigniter

Codeigniter version: 3.1.6

After you download unzip the code into your xampp or wampp and rename the folder to <strong>codeigniter</strong> and then do the below configurations first.

Open and edit <strong>/codeigniter/application/config/config.php</strong>
<pre class="toolbar-overlay:false lang:php decode:true">$config['base_url'] = 'http://localhost/codeigniter/index.php';</pre>
then,

update your database settings in <strong>/codeigniter/application/config/database.php</strong>
<pre class="toolbar-overlay:false lang:php decode:true">$db['default'] = array(
	'dsn'	=&gt; '',
	'hostname' =&gt; 'localhost',
	'username' =&gt; 'root',
	'password' =&gt; '',
	'database' =&gt; 'codeigniter',
	'dbdriver' =&gt; 'mysqli',
	'dbprefix' =&gt; '',
	'pconnect' =&gt; FALSE,
	'db_debug' =&gt; (ENVIRONMENT !== 'production'),
	'cache_on' =&gt; FALSE,
	'cachedir' =&gt; '',
	'char_set' =&gt; 'utf8',
	'dbcollat' =&gt; 'utf8_general_ci',
	'swap_pre' =&gt; '',
	'encrypt' =&gt; FALSE,
	'compress' =&gt; FALSE,
	'stricton' =&gt; FALSE,
	'failover' =&gt; array(),
	'save_queries' =&gt; TRUE
);
</pre>
Now open phpmyadmin / mysql, and create a new database called 'codeigniter' and execute the below queries:
<pre class="toolbar-overlay:false lang:mysql decode:true">--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;</pre>
This will create a new table in your database called 'users'.

Basic configuration are done now.


Run your application to see the application is working. 

You can also refer the tutorial here at: http://theonlytutorials.com/codeigniter-login-and-registration-tutorial/

Demo is available at: http://theonlytutorials.com/demo/codeigniter3-login/index.php/login

Thanks!