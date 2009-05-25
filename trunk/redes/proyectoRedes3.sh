#!/bin/bash
echo "Ejercicio 5"
awk '{ print $17; print $19 }' /home/caracol/paqTCP >>puertos3
function puerto()
{
awk '{ FS="."; print $5 }' /home/caracol/puertos
}
function puerto2()
{
awk '{FS="/"; print $1}' /etc/services | awk '{print $2}'
}

awk 'for (i=1;i<=FN;i++)
{
a=`puerto`
b=`puerto2`
if test $a==$b

}'
