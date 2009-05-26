#!/bin/bash
echo "Introduzca el IP de origen"
read origen
echo "Introduzca el IP de destino"
read destino
awk -v iporigen=$origen '$origen {print $0}' /home/caracol/traficoproyecto >puertos3
echo "destino"
awk -v ipdestino=$destino '$20 ~ /'$destino'/ { print $20 } ' /home/caracol/puertos3 | awk '{ FS="."; print $5 }' | uniq


