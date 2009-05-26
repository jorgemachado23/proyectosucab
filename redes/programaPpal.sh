#!/bin/bash
while :
do
clear
echo "1. Pregunta 1"
echo "2. Pregunta 2"
echo "3. Pregunta 3"
echo "4. Pregunta 4"
echo "5. Pregunta 5"
read opt
case $opt in
    1)
	chmod +x ./pregunta1.sh
	./pregunta1.sh
	;;
    2)
	chmod +x ./pregunta2.sh
	./pregunta2.sh
	;;
    4)
	chmod +x ./pregunta4.sh
	./pregunta4.sh
	;;
    5) 
	chmod +x ./pregunta5.sh
	./pregunta5.sh
	;;
esac
done
