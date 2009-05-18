#!/bin/bash
sum=0
sum2=0
echo "Haga telnet"
tcpdump -vvvv tcp and host 192.168.56.1 -c2 >>paqTCP 
sleep 2
echo "ttl 64"
awk '/ttl 64/ { sum += 1 } END { print sum }' /home/dory/paqTCP
echo "ttl 128"
awk '/ttl 128/ { sum2 += 1 } END { print sum2 }' /home/dory/paqTCP
echo "blah"
read a
sum=0
sum2=0
tcpdump -vvvv ether host 08:00:27:00:C8:B9 -c10 >>paqETH
sleep 2
echo "ttl 64"
awk '/ttl 64/ { sum += 1 } END { print sum }' /home/dory/paqETH
echo "ttl 128"
awk '/ttl 128/ { sum2 += 1 } END { print sum2 }' /home/dory/paqETH
echo "Escriba la IP"
read a
sum=0
sum2=0
tcpdump -vvvv host 192.168.56.1 -c10 >>paqIP 
sleep 2
echo "ttl 64"
awk '/ttl 64/ { sum += 1 } END { print sum }' /home/dory/paqIP
echo "ttl 128"
awk '/ttl 128/ { sum2 += 1 } END { print sum2 }' /home/dory/paqIP
