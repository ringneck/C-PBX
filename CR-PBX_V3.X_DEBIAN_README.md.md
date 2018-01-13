# CR-PBX V3.X Debian Jessie
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
  - FreePBX  2.11.0.43
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

```bash
apt -y update && apt -y upgrade
reboot
```

Install Sqlite.
```bash
apt -y install php5-sqlite dialog libsasl2-2 libsasl2-modules sasl2-bin libsqlite3-dev libssl1.0-dev php-db
```

Install Prepare Packages.

```bash
apt -y install  dnsmasq logrotate fail2ban whois alsa-utils  dialog mpg123 lame  xinetd libtool  composer vim libssl1.0-dev libneon27-dev libical-dev
```
```bash
apt -y install build-essential openssh-server apache2 mysql-server mysql-client bison flex php5 php5-curl php5-cli php5-mysql php-pear php5-gd curl sox libncurses5-dev libssl-dev libmysqlclient-dev mpg123 libxml2-dev libnewt-dev sqlite3 libsqlite3-dev pkg-config automake libtool autoconf git subversion uuid uuid-dev libiksemel-dev tftpd postfix mailutils nano ntp chkconfig libspandsp-dev libcurl4-gnutls-dev unixodbc unixodbc-dev libmyodbc xinetd e2fsprogs linux-headers*
```

```bash
reboot
```

# 시간설정
```bash
timedatectl set-timezone Asia/Seoul
timedatectl status
```

# Asterisk Install
Add users.
```bash
adduser asterisk --disabled-password --gecos “OLSSOO FACTORY”
adduser olssoo --disabled-password --gecos “OLSSOO FACTORY”
```

```bash
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
```

# Install FreePBX
```bash
cd /usr/src/olssoo/
wget http://mirror.freepbx.org/freepbx-2.11.0.43.tgz
tar zxvf freepbx-2.11.0.43.tgz
cd freepbx-2.11.0.43
systemctl start mariadb
mysqladmin create asterisk
mysqladmin create asteriskcdrdb
mysql asterisk < SQL/newinstall.sql
```

```bash
cd /usr/src/olssoo/freepbx-2.11.0.43
mysqladmin create meetme
mysql meetme dpbx-meetme.sql
mysql asteriskcdrdb < SQL/cdr_mysql_table.sql

GRANT ALL PRIVILEGES ON meetme.* TO asteriskuser@localhost IDENTIFIED BY ‘your_password’;
GRANT ALL PRIVILEGES ON asterisk.* TO asteriskuser@localhost IDENTIFIED BY ‘your_password’;
GRANT ALL PRIVILEGES ON asteriskcdrdb.* TO asteriskuser@localhost IDENTIFIED BY ‘your_password’;
flush privileges;
```

```bash
/usr/sbin/safe_asterisk
cd /usr/src/olssoo/freepbx-2.11.0.43
./install_amp
```
```bash
echo /usr/local/sbin/amportal start >> /etc/rc.local
reboot
```
# Install WebGUI (Elastix)
```bash
cd /usr/src/olssoo
mv /var/www/html /var/www/html_org
git clone https://github.com/ringneck/R-PBX.git
cd R-PBX/V.3X_EN_BASIC
\cp -pr html /var/www/html
```


## 참조문서

https://wiki.freepbx.org/display/FOP/Installing+FreePBX+2.11+on+Debian+Wheezy
