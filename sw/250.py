#use usb rules,
#make sure you give permission 

#!/usr/bin/python
import serial
import time
ser = serial.Serial('/dev/Vital-Water-Master', 9600)
time.sleep(2)
ser.write('a')
count = 0
time.sleep(1)
readcomplete = ser.read(3)

while True:
	if readcomplete == '255':
		break
	else:
		print "No"

print "Finished Code"

