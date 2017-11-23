import serial
import time

ser = serial.Serial('/dev/ttyACM0', 9600)
ser.write('r')

readcomplete = ser.readline()
completed = ("complete")
count = 0

while (readcomplete != completed ):
   print 'The count is:', count
   count = count + 1
print ('Complete')