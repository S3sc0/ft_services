# the start
minikube start

eval $(minikube -p minikube docker-env)

# build new images
docker build -t engine-x srcs/nginx
docker build -t grafana srcs/grafana
docker build -t wordpress srcs/wordpress
docker build -t phpmyadmin psrcs/hpmyadmin
docker build -t mysql srcs/mysql
docker build -t influxdb srcs/influxdb
docker build -t ftps srcs/ftps

# build the deployments
kubectl apply -f srcs/nginx/nginx.yaml
kubectl apply -f srcs/grafana/grafana.yaml
kubectl apply -f srcs/wordpress/wordpress.yaml
kubectl apply -f srcs/phpmyadmin/phpmyadmin.yaml
kubectl apply -f srcs/mysql/mysql.yaml
kubectl apply -f srcs/influxdb/influxdb.yaml
kubectl apply -f srcs/ftps/ftps.yaml
kubectl apply -f srcs/configmap.yaml