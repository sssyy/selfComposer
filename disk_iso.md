 # 挂载 + iso
 sudo mount -o utf8,remount,rw /home/joshua/下载/Ton8PE_V4.0.iso /media/cdrom
 
 7z x Ton8PE_V4.0.iso
 
 sudo umount /home/joshua/下载/Ton8PE_V4.0.iso 
 
 mkisofs -r -o new_file/ new_file


mkisofs -allow-limited-size -l -J -r -iso-level 3 -o test.iso new_file/
