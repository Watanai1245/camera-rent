DATABASE_HOST=aws.connect.psdb.cloud
DATABASE_NAME=cameraforrent
DATABASE_USERNAME=m7j67io3dzxx0ggc4mwl
DATABASE_PASSWORD=pscale_pw_cbp1QQFjMYfgy71lRJuxp5AaozxsCALAmldCGZWVXdI

#Connect with MySQL CLI
mysql -h aws.connect.psdb.cloud -D cameraforrent -u m7j67io3dzxx0ggc4mwl -ppscale_pw_cbp1QQFjMYfgy71lRJuxp5AaozxsCALAmldCGZWVXdI --ssl-mode=VERIFY_IDENTITY --ssl-ca=/etc/ssl/certs/ca-certificates.crt
