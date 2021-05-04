# delete old images
docker rmi -f engine-x
docker rmi -f grafana
docker rmi -f wordpress
docker rmi -f phpmyadmin
docker rmi -f mysql
docker rmi -f influxd
docker rmi -f ftps

# build new images
docker build -t engine-x nginx
docker build -t grafana grafana
docker build -t wordpress wordpress
docker build -t phpmyadmin phpmyadmin
docker build -t mysql mysql
docker build -t influxdb influxdb
docker build -t ftps ftps

# build the deployments
kubectl apply -f nginx/nginx.yaml
kubectl apply -f grafana/grafana.yaml
kubectl apply -f wordpress/wordpress.yaml
kubectl apply -f phpmyadmin/phpmyadmin.yaml
kubectl apply -f mysql/mysql.yaml
kubectl apply -f influxdb/influxdb.yaml
kubectl apply -f ftps/ftps.yaml