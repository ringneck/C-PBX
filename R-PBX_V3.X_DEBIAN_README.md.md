# R-PBX V3.X Debian Jessie
Based on Debian Jessie for Rsapberry PI

Based on raspbx-03-12-2017.zip.torrent 
(http://www.raspberry-asterisk.org/downloads/)

# Bug report 
  - contact norman.southcastle@gmail.com


# Open Source 

  - Asterisk : https://www.asterisk.org
  - Elastix : https://www.elastix.org
  - FreePBX : https://www.freepbx.org
  - Apache, PHP, Zend, MySQL and so on.


# Commercial Services

  - OLSSOO : http://www.olssoo.com
  


# Overview R-PBX RPi 3

1. O/S 
  - Based on Raspberry Pi Foundation’s official Raspbian Stretch.

2. Packages - V 3.X

  - Asterisk 11.25.3
  - FreePBX  2.11.43
  - Elastix  4.X 
  - Apache Apache/2.4.25 (Raspbian)
  - PHP 5.6.30-0+deb8u1 (cli) (built: Apr 14 2017 16:20:58) 
  - Zend Engine v2.6.0
  - MariaDB 10.1.23-MariaDB-9+deb9u1 Raspbian 9.0
  - OLSSOO FACTORY Custmizing.


# Prepare

  - SIP Phone (Soft, Hard) or VoIP G/W(ATA/MTA) 2 more. 
  - SD Card, RPi 3, Networking  
  - Option for Outbound : Trunk(SIP)
  
 
# Installation

Install O/S.

Update O/S.

* apt -y update && apt -y upgrade
* reboot


Install Sqlite.
apt -y install php5-sqlite dialog libsasl2-2 libsasl2-modules sasl2-bin libsqlite3-dev libssl1.0-dev php-db

apt -y install  dnsmasq logrotate fail2ban whois alsa-utils  dialog mpg123 lame  xinetd libtool  composer vim libssl1.0-dev libneon27-dev libical-dev

Install Prepare Packages.
apt -y install build-essential openssh-server apache2 mysql-server mysql-client bison flex php5 php5-curl php5-cli php5-mysql php-pear php5-gd curl sox libncurses5-dev libssl-dev libmysqlclient-dev mpg123 libxml2-dev libnewt-dev sqlite3 libsqlite3-dev pkg-config automake libtool autoconf git subversion uuid uuid-dev libiksemel-dev tftpd postfix mailutils nano ntp chkconfig libspandsp-dev libcurl4-gnutls-dev unixodbc unixodbc-dev libmyodbc xinetd e2fsprogs linux-headers*
reboot


# time config
timedatectl set-timezone Asia/Seoul
timedatectl status

# Core Install
Add users.
adduser asterisk --disabled-password --gecos “OLSSOO FACTORY”
adduser olssoo --disabled-password --gecos “OLSSOO FACTORY”

cd /usr/src/olssoo
wget http://downloads.asterisk.org/pub/telephony/asterisk/releases/asterisk-11.25.3.tar.gz
tar zxvf asterisk-11.25.3.tar.gz
cd /usr/src/olssoo/asterisk-11.25.3
make distclean
./contrib/scripts/install_prereq install
./contrib/scripts/get_mp3_source.sh
./configure
make menuselect

make && make install && chown -R asterisk. /var/lib/asterisk

# Install FreePBX
/usr/src/olssoo/freepbx
systemctl start mariadb
[root@rpbx freepbx]# mysqladmin create asterisk
[root@rpbx freepbx]# mysqladmin create asteriskcdrdb
[root@rpbx freepbx]# mysql asterisk < SQL/newinstall.sql

[root@rpbx freepbx]# mysqladmin create meetme
[root@rpbx freepbx]# mysql meetme dpbx-meetme.sql
[root@rpbx freepbx]# mysql asteriskcdrdb < SQL/cdr_mysql_table.sql

GRANT ALL PRIVILEGES ON meetme.* TO asteriskuser@localhost IDENTIFIED BY ‘your_password’;
GRANT ALL PRIVILEGES ON asterisk.* TO asteriskuser@localhost IDENTIFIED BY ‘your_password’;
GRANT ALL PRIVILEGES ON asteriskcdrdb.* TO asteriskuser@localhost IDENTIFIED BY ‘your_password’;
flush privileges;

/usr/sbin/safe_asterisk
cd /usr/src/olssoo/freepbx
./install_amp

echo /usr/local/sbin/amportal start >> /etc/rc.local
reboot

