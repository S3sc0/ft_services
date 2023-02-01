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

## What I've Learned

1. Containers orchestration.
2. Write a fully customized Dockerfiles.
3. Write YAML files of kind deployment and service to configure k8s cluster.
4. Write Bash scripts to automate repetitive tasks.
5. Configure & run each service mentioned above.

## How To Use

First of all you need to have `minikube` and `metallb` installed on your machine, if you don't follow these guides.

- [Minikube Installation](https://k8s-docs.netlify.app/en/docs/tasks/tools/install-minikube/)
- [Metallb Installation](https://metallb.universe.tf/installation/)

Next run the following script and it will take care of everything.

```console
> sh ./setup.sh
```