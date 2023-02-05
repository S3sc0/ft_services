# ft_services

![](./The%20Infrastructure.png)

## Project Overview

ft_services is my second System Administration and Networking school project, where I had to setup an infrastructure of different services using **Kubernetes**. Those services must run in a dedicated container. Each service was built manually no built-in images were used, but **Alpline Linux** used as the base image.

## Technical Details

The whole project was built locally so this is what has been used.

- Minikube as local Kubernetes cluster.
- MetalLB to enable services of type LoadBalancer in a non-cloud environment.
- Docker of course holding the following services:
	- Nginx used as a reverse proxy,
	- PhpMyAdmin linked with Mysql database.
	- A WordPress website that works with Mysql database.
	- FTPS server.
	- Grafana platform linked with InfluxDb database.

<p float="left">
  <img src="https://blog.teracy.com/images/2017/06/15/kubernetes_logo_with_border.png" width="30px" height="30px">
  <img src="https://v0-2-1--metallb.netlify.app/images/logo.png" width="30px" height="30px">
  <img src="https://cdn.icon-icons.com/icons2/2699/PNG/512/docker_tile_logo_icon_168248.png" width="30px" height="30px">
  <img src="https://ugeek.github.io/blog/images-blog/nginx.png" width="30px" height="30px">
  <img src="https://upload.wikimedia.org/wikipedia/commons/0/0c/Wordpress_logo_8.png" width="30px" height="30px">
  <img src="https://www.freepnglogos.com/uploads/logo-mysql-png/logo-mysql-mysql-logo-png-images-are-download-crazypng-21.png" width="30px" height="30px">
  <img src="https://upload.wikimedia.org/wikipedia/commons/9/9d/Grafana_logo.png" width="30px" height="30px">
</p>

## What I Learned

- Learned containers orchestration.
- Learned to write a fully customized Dockerfiles.
- Learned to write YAML files of kind deployment and service manifests to configure k8s cluster.
- Learned to write Bash scripts to automate repetitive tasks.
- Learned to configure & run each service mentioned above.

## How To Use

First of all you need to have `minikube` and `metallb` installed on your machine, if you don't follow these guides.

- [Minikube Installation](https://k8s-docs.netlify.app/en/docs/tasks/tools/install-minikube/)
- [Metallb Installation](https://metallb.universe.tf/installation/)

Next run the following script and it will take care of everything.

```console
sh ./setup.sh
```

> This way has been tested both in macOS and Linux systems.

## Resources

- [Kubernetes Documentation](https://kubernetes.io/docs/home/)
- [Metallb Configuration](https://metallb.universe.tf/configuration/)
- [Kubernetes Services Networking](https://kubernetes.io/docs/concepts/services-networking/service/)
- [Kubernetes Deployments](https://kubernetes.io/docs/concepts/workloads/controllers/deployment/)
- [Dockerfile reference](https://docs.docker.com/engine/reference/builder/)
- [Kubernetes tutorial — Create deployments using YAML file](https://karthi-net.medium.com/kubernetes-tutorial-create-deployments-using-yaml-file-90ea901a2f74)
- [MetalLB (Network LoadBalancer ) & Minikube](https://medium.com/@shoaib_masood/metallb-network-loadbalancer-minikube-335d846dfdbe)
- [VSFTPD.CONF](http://vsftpd.beasts.org/vsftpd_conf.html)
- [vsftpd Configuration Options](https://web.mit.edu/rhel-doc/5/RHEL-5-manual/Deployment_Guide-en-US/s1-ftp-vsftpd-conf.html)
- [Grafana - Install and Configure Grafana, InfluxDB, telegraf - 1](https://www.youtube.com/watch?v=pE7zU4MOqC8)
- [Grafana - Install and Configure Grafana Dashboard - 2](https://www.youtube.com/watch?v=7kfgTtQzSG0)
- [Grafana Package](https://pkgs.org/search/?q=grafana)
- [Map Environment Variables Using Secrets](https://octoperf.com/blog/2019/09/19/kraken-kubernetes-influxdb-grafana-telegraf/#map-a-configuration-file-using-configmap)
- [Set up an Nginx Reverse Proxy for Grafana](https://medium.com/grafana-tutorials/reverse-proxy-grafana-with-nginx-c5df753acfde)
- [Configure a Pod to Use a PersistentVolume for Storage](https://kubernetes.io/docs/tasks/configure-pod-container/configure-persistent-volume-storage/)
- [Kubernetes liveness probe – Command Exec](https://www.grandmetric.com/knowledge-base/design_and_configure/kubernetes-liveness-probe-command-exec/)
