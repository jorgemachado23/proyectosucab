#!/bin/bash
awk ' $14~/TCP/ { print $0 }' /home/caracol/traficoproyecto | awk -v campo2=$campo '$campo2 { print $0 }' >>trafico2
awk '{ print $18 }' /home/caracol/trafico2 | awk '{FS=".";print $5}' | awk '{for(i=1;i<=NF;i++) num[$i]++ } END {for(palabra in num) print palabra,num[palabra]}' 
awk '{ print $20 }' /home/caracol/trafico2 | awk '{FS=".";print $5}' | awk '{for(i=1;i<=NF;i++) num[$i]++ } END {for(palabra in num) print palabra,num[palabra]}'
