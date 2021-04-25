# this will run grafana-server

/usr/sbin/grafana-server --pidfile=/var/run/grafana-server.pid --config=/etc/grafana.ini --homepath=/usr/share/grafana cfg:default.paths.data=/grafana cfg:default.paths.logs=/var/log/grafana cfg:default.paths.plugins=/var/lib/grafana/plugins </dev/null &>/dev/null &

tail -f /dev/null