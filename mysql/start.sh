/etc/init.d/mariadb setup
rc-service mariadb start

mysql -u root -proot -e "CREATE DATABASE wordpress"
mysql -u root -proot -e "CREATE USER 'sesco'@'%' IDENTIFIED BY '1234'"
mysql -u root -proot -e "GRANT ALL PRIVILEGES ON *.* TO 'sesco'@'%'"

mysql -u root -proot wordpress < wordpress.sql

tail -f /dev/null