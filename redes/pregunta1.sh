#!/bin/bash
echo "Indique el campo"
read campo
awk ' $2~/IP/ { print $0 }' /home/caracol/traficoproyecto | awk -v campo2=$campo '$campo2 { print $0 }' >trafico
awk ' $14~/TCP/ { print $0 }' /home/caracol/traficoproyecto | awk -v campo2=$campo '$campo2 { print $0 }' >>trafico
 
if [ $campo = "ttl" ]
then
awk '{ if ($5~/ttl/) { print $6 } }' /home/caracol/trafico | awk '{for(i=1;i<=NF;i++) num[$i]++ } END {for(palabra in num) print palabra, num[palabra]}'
else 
if [ $campo = "tos" ]
then
awk '{ if ($3~/tos/) { print $4 } }' /home/caracol/trafico | awk '{for(i=1;i<=NF;i++) num[$i]++ } END {for(palabra in num) print palabra, num[palabra]}'
else
if [ $campo = "id" ]
then
awk '{ if ($7~/id/) { print $8 } }' /home/caracol/trafico | awk '{for(i=1;i<=NF;i++) num[$i]++ } END {for(palabra in num) print palabra, num[palabra]}'
else
if [ $campo = "offset" ]
then
awk '{ if ($9~/offset/) { print $10 } }' /home/caracol/trafico | awk '{for(i=1;i<=NF;i++) num[$i]++ } END {for(palabra in num) print palabra, num[palabra]}'
else
if [ $campo = "flags" ]
then
awk '{ if ($11~/flags/) { print $12 } }' /home/caracol/trafico | awk '{for(i=1;i<=NF;i++) num[$i]++ } END {for(palabra in num) print palabra, num[palabra]}'
else
if [ $campo = "length" ]
then
awk '{ if ($16~/length/) { print $17 } }' /home/caracol/trafico | awk '{FS=")";print $1}' | awk '{for(i=1;i<=NF;i++) num[$i]++ } END {for(palabra in num) print palabra, num[palabra]}'
fi
fi
fi
fi
fi
fi
echo "Presione cualquier tecla para continuar..."
read
