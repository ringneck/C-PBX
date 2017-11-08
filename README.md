

# R-PBX

Tiny IP-PBX on ARM Processor Such as Raspberry Pi

# R-PBX QNA
  - http://cafe.naver.com/asterisker/8960


# R-PBX Case Study
  - http://cafe.naver.com/asterisker/8961


# Bug report 
  - contact norman.southcastle@gmail.com

# Based on
[Based on Image of Elastix for Raspbery Pi3 who made KHASHAYAR NAMDAR]

  - Special thanks for KHASHAYAR NAMDAR

  - http://khnamdar.com/

# Open Source 

  - Asterisk : https://www.asterisk.org

  - Elastix : https://www.elastix.org

  - FreePBX : https://www.freepbx.org

  - Apache, PHP, Zend, MySQL and so on.

# Commercial Services

  - OLSSOO : http://www.olssoo.com


# Overview R-PBX RPi 2/3

1. O/S 
  - Fedora 18 (Sperical Cow)

2. Packages

  - Asterisk  11.7
  - FreePBX  2.11.43
  - Elastix  2.4.0
  - Apache 2.4.6
  - PHP 5.4.23
  - Zend Engine v2.4.0
  - MySQL 5.5.35
  - OLSSOO 1.0 (customizing, performance tunning)
  - Include access to OLSSOO Connected Services (ing...)

# Raspberry Pi SD Card Image (Samsung EVO 16G)

  - Download Lisk (V1.1) : http://gofile.me/30zWY/VUfWMox14
  
# Image history

  - V1.1 (ing...)
  - 시간그룹, 시간라우트, 관리자내선번호 변경 1004 => 9999
  - 패널 모니터링 수정
  - 사용자 화면 수정
  - 안내멘트, 라우트, CSV내선설정 등, 안정화
  
# Prepare

  - SIP Phone (Soft, Hard) or VoIP G/W(ATA/MTA) 2 more.
  
  - SD Card, RPi 2/3, Networking  

  - Option for Outbound : Trunk(SIP)
  
 
# Default Infomation

  [Network]
  - IP : 192.168.17.140  
  - SN : 255.255.255.0 
  - GW : 192.168.17.1
  
  [Service Port]
  - SSH : 55530
  - AMI : 5038
  - HTTP : 5500
  - SIP(UDP) : 55520
  - RTP(UDP) : 10000 ~ 20000

# Access Info
  [System Access]
  - SSH Port : 55530
  - root // RRaspberry

  [DB Access]
  - root // DBRaspberry

  [Web Manager Access]
  - Web Port : 5500
  - admin // Raspberry

  [FreePBX Administration Access]
  - admin // Raspberry
  
# Login 

  [Open browser : http://192.168.17.140:5500]
  - admin // Raspberry
  
# After installation

  - Change all system passwords
  - shell]root# rpbx-admin-passwords
  
  - Change IP Address and Networking
  - http://IPAddress:5500/index.php?menu=network
  
