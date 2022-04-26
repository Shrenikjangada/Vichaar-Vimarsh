# vichaar-vimarsh
News Discussion forum 
Hosted on AWS 
Link => https://52.11.64.158/vichaar-vimarsh_final/

# Steps For Implementation
Step 1
After Amazon console login you find the following screen, select EC2 from Compute category. 
<br />
Step 2
Click Launch Instance button.
<br />
Step 3
Now choose operating system for your web server, I suggest use Ubuntu for more package advantages.
Make sure, that should be listed in free tier.
<br />
Step 4
You find the following screen, now click Launch button.
<br />
Step 5
Here you can modify your server type, but initially explore things with free tier.
Creating Amazon Key File - Authentication
Most important part in this installation process.
<br />
Step 6
Here choose Create a new pair key
<br />
Step 7
Give valid name and click to Download Key Pair. You will get an .pem file.
<br />
Step 8
Instance has been created successfully.
<br />
Step 9
You will find the instance status here.
<br />
Step 10
Select the instance box and scroll down the page, you will find inbound rules for firewall security
<br />
Step 11
Add HTTP rule for web server access.
Elastic IP - Create Static IP Address
Basically, Amazon instance will provide you a dynamic public DNS name, this is not stable. So you need
a static IP.
<br />
Step 12
Go to Network & Security category and select Elastic IPs, click Allocate New Address
<br />
Step 13
Amazon will provide you a random IP address.
<br />
Step 14
Now associate IP address with instance box.
<br />
Step 15
Choose instance box here.
<br />
Step 16
Click Associate address.
<br />
Step 17
Associated IP address with instance.
<br />
XAMPP Installation Commands for Ubuntu <br />
Download XAMPP for 64 bit
wget https://www.apachefriends.org/xampp-files/7.0.23/xampp-linux-x64-7.0.23-0-installer.run <br />
Make Execute Installation
<br />
sudo chmod +x xampp-linux-x64-7.0.23-0-installer.run <br />
Run Installation <br />
sudo ./xampp-linux-x64-7.0.23-0-installer.run <br />
XAMPP instructions <br />
Select the components you want to install; clear the components you do not want to install. Click Next when you are
ready to continue. <br />
XAMPP Core Files : Y (Cannot be edited) <br />
XAMPP Developer Files [Y/n] : Y <br />
Is the selection above correct? [Y/n]: Y <br />
Installation Directory <br />
XAMPP will be installed to /opt/lampp <br />
Press [Enter] to continue: <br />
Do you want to continue? [Y/n]:Y <br />
Run XAMPP <br />
sudo /opt/lampp/lampp start <br />
XAMPP Access Forbidden <br />
Open your browser and access http://IP-ADDRESS/ you will find this Access forbidden screen. <br />
XAMPP Configurations <br />
Edit XAMPP configurations. <br />
vi /opt/lampp/etc/extra/httpd-xampp.conf <br />
<LocationMatch "^/(?i:(?:xampp|security|licenses|phpmyadmin|webalizer|server-status|server-info))"> <br />
Require local  <br />
ErrorDocument 403 /error/XAMPP_FORBIDDEN.html.var <br />
</LocationMatch> <br />
to <br />
<LocationMatch "^/(?i:(?:xampp|security|licenses|phpmyadmin|webalizer|server-status|server-info))"> <br />
Order deny,allow <br />
Allow from all <br />
Allow from ::1 127.0.0.0/8 \ <br />
fc00::/7 10.0.0.0/8 172.16.0.0/12 192.168.0.0/16 \ <br />
fe80::/10 169.254.0.0/16 <br />
ErrorDocument 403 /error/XAMPP_FORBIDDEN.html.var <br />
</LocationMatch> <br />
Restart XAMPP <br />
sudo /opt/lampp/lampp restart <br />

Security Settings <br />
sudo /opt/lampp/xampp security <br />
XAMPP: Your XAMPP pages are NOT secured by a password. <br />
XAMPP: Do you want to set a password? [yes] <br />
XAMPP: Your XAMPP pages are NOT secured by a password. <br />
XAMPP: Do you want to set a password? [yes] no <br />
XAMPP: MySQL is accessable via network. <br />
XAMPP: Normaly that's not recommended. Do you want me to turn it off? [yes] yes <br />
XAMPP: Turned off.<br />
XAMPP: Stopping MySQL...ok.<br />
XAMPP: Starting MySQL...ok.<br />
XAMPP: The MySQL/phpMyAdmin user pma has no password set!!!<br />
XAMPP: Do you want to set a password? [yes] yes<br />
XAMPP: Password:*******<br />
XAMPP: Password (again):*******<br />
XAMPP: Setting new MySQL pma password.<br />
XAMPP: Setting phpMyAdmin's pma password to the new one.<br />
XAMPP: MySQL has no root passwort set!!!<br />
XAMPP: Do you want to set a password? [yes] yes<br />
XAMPP: Write the password somewhere down to make sure you won't forget it!!!<br />
XAMPP: Password:*******<br />
XAMPP: Password (again):*******<br />
XAMPP: Setting new MySQL root password.<br />
XAMPP: Change phpMyAdmin's authentication method.<br />
XAMPP: The FTP password for user 'daemon' is still set to 'xampp'.<br />
XAMPP: Do you want to change the password? [yes] no<br />
XAMPP: Done.<br />
