"C:\Program Files\CollabNet Subversion Server\svnlook.exe" author %1 >C:\svn_repos\hooks\archivo.txt
echo />>C:\svn_repos\hooks\archivo.txt
"C:\Program Files\CollabNet Subversion Server\svnlook.exe" log -t %2 %1 >>C:\svn_repos\hooks\archivo.txt
echo />>C:\svn_repos\hooks\archivo.txt
"C:\Program Files\CollabNet Subversion Server\svnlook.exe" changed %1 >>C:\svn_repos\hooks\archivo.txt
echo />>C:\svn_repos\hooks\archivo.txt
"C:\Program Files\CollabNet Subversion Server\svnlook.exe" cat -t %2 %1 >>C:\svn_repos\hooks\archivo.txt
START /MAX C:\svn_repos\hooks\ConsoleApplication5.exe
ping localhost
if exist "C:\svn_repos\hooks\temp.txt" EXIT 0
EXIT 1