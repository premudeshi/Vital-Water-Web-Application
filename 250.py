import serial
ser = serial.Serial('/dev/ttyACM0', 9600)
ser.write('3')
print ('Complete')