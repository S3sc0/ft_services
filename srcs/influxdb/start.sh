rc-service influxdb restart

# Create a user
influx -execute "CREATE USER admin WITH PASSWORD 'admin' WITH ALL PRIVILEGES"

telegraf --config /etc/telegraf.conf