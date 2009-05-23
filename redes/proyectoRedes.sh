#!/bin/bash
sum=0
sum2=0
echo "Haga telnet"
#tcpdump -vvvv tcp and host 192.168.56.1 -c2 >>paqTCP 
echo "Paquetes IP"
echo "ttl 64"
awk '/IP/ { print $0 }' /home/caracol/traficoproyecto >paqIP
awk '/ttl 64/ { sum += 1 } END { print sum }' /home/caracol/paqIP
echo "ttl 128"
awk '/ttl 128/ { sum2 += 1 } END { print sum2 }' /home/caracol/paqIP
sum=0
sum2=0
#tcpdump -vvvv ether host 08:00:27:00:C8:B9 -c10 >>paqETH
echo "Paquetes ETHE"
echo "ttl 64"
awk '/proto TCP/ { print $0 }' /home/caracol/traficoproyecto >paqETH
awk '/ttl 64/ { sum += 1 } END { print sum }' /home/caracol/paqETH
echo "ttl 128"
awk '/ttl 128/ { sum2 += 1 } END { print sum2 }' /home/caracol/paqETH
sum=0
sum2=0
#tcpdump -vvvv host 192.168.56.1 -c10 >>paqIP 
echo "Paquetes TCP"
echo "ttl 64"
awk '/proto TCP/ { print $0 }' /home/caracol/traficoproyecto >paqTCP
awk '/ttl 64/ { sum += 1 } END { print sum }' /home/caracol/paqTCP
echo "ttl 128"
awk '/ttl 128/ { sum2 += 1 } END { print sum2 }' /home/caracol/paqTCP
