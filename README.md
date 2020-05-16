# wordpress site

Follow below steps to configure this site.

1)Create mysql db and dump .sql file.

2)install httpd dump * contents in /var/www/html

3)Add route53 tou your IP.

Others:

UPDATE wp_users SET user_url = 'http://100.26.12.185' WHERE ID = 1

update wp_options set option_value='http://100.26.12.185' where option_name = 'siteurl';

update wp_options set option_value='http://100.26.12.185' where option_name = 'home';

find / -type f -exec grep -H '18.212.53.250' {} \;

Wordpress install doc:
https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/hosting-wordpress.html

Mysql install doc:
https://asvignesh.in/install-mysql-on-amazon-linux-in-aws-ec2/
