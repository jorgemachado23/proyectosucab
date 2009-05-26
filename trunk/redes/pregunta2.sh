#!/bin/bash
echo "Indique el campo"
read campo
echo "Indique el valor"
read valor
awk ' $2~/IP/ { print $0 }' /home/caracol/traficoproyecto | awk -v campo2=$campo '$campo2 { print $0 }' >trafico
awk ' $14~/TCP/ { print $0 }' /home/caracol/traficoproyecto | awk -v campo2=$campo '$campo2 { print $0 }' >>trafico
 
if [ $campo = "ttl" ]
then
awk -v valor2=$valor '{ if ($5~/ttl/) { if($6~/'$valor'/) {print "Origen: ", $18, "> Destino: ", $20} } }' /home/caracol/trafico | uniq
else 
if [ $campo = "tos" ]
then
awk -v valor2=$valor '{ if ($3~/tos/) { if($4~/'$valor'/) {print "Origen: ", $18, "> Destino: ", $20} } }' /home/caracol/trafico | uniq
else
if [ $campo = "id" ]
then
awk -v valor2=$valor '{ if ($7~/tos/) { if($8~/'$valor'/) {print "Origen: ", $18, "> Destino: ", $20} } }' /home/caracol/trafico | uniq
else
if [ $campo = "offset" ]
then
awk -v valor2=$valor '{ if ($9~/tos/) { if($10~/'$valor'/) {print "Origen: ", $18, "> Destino: ", $20} } }' /home/caracol/trafico | uniq
else
if [ $campo = "flags" ]
then
awk -v valor2=$valor '{ if ($11~/tos/) { if($12~/'$valor'/) {print "Origen: ", $18, "> Destino: ", $20} } }' /home/caracol/trafico | uniq
else
if [ $campo = "length" ]
then
awk -v valor2=$valor '{ if ($16~/tos/) { if($17~/'$valor'/) {print "Origen: ", $18, "> Destino: ", $20} } }' /home/caracol/trafico | uniq
fi
fi
fi
fi
fi
fi
echo "Presione cualquier tecla para continuar..."
read
