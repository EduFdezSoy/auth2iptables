# auth2iptables [![GitHub issues](https://img.shields.io/github/issues/EduFdezSoy/auth2iptables.svg)](https://github.com/EduFdezSoy/auth2iptables/issues) [![GitHub forks](https://img.shields.io/github/forks/EduFdezSoy/auth2iptables.svg)](https://github.com/EduFdezSoy/auth2iptables/network) [![GitHub stars](https://img.shields.io/github/stars/EduFdezSoy/auth2iptables.svg)](https://github.com/EduFdezSoy/auth2iptables/stargazers) [![GitHub license](https://img.shields.io/github/license/EduFdezSoy/auth2iptables.svg)](https://github.com/EduFdezSoy/auth2iptables)
This web app (is supposed to) transforms an "auth.log" file to iptables rules to prevent brute force attacks.

You upload the "auth.log" file and it will find and catch the ips that try to log in to much times from it.
Then it will make an "iptables.sh" file with those ips. Also the program will exclude your actual ip from the iptables file.

It can order your iptables rules too to shuffle right with the generated ones here.

##### ATTENTION:
You MUST look at the "iptables.sh" file to make sure it is right and it will not ban you from your own server. 


