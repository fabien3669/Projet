# sur un portable 
# sudo chown root:root cache_init.sh
# sudo chmod 4755 cache_init.sh
rm -Rf  var/cache var/logs var/sessions  var
tar xf var.tar.gz

chmod -R 777 var/cache var/logs var/sessions  var
 
