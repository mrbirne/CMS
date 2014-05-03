mysql -u root -e "CREATE DATABASE IF NOT EXISTS `cmstest` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;"
mysql -u root -e "CREATE USER 'cms'@'localhost' IDENTIFIED BY 'BCv4r2hrfhw4ahrc';"
mysql -u root -e "GRANT USAGE ON * . * TO 'cms'@'localhost' IDENTIFIED BY 'BCv4r2hrfhw4ahrc' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0 ;"
mysql -u root -e "GRANT ALL PRIVILEGES ON `cmstest` . * TO 'cms'@'localhost';"
mysql -u root cmstest < ./DB.sql
mysql -u root cmstest < ./sql/rights/create.sql

