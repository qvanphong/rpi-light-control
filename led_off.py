import RPi.GPIO as GPIO
import time 


GPIO.setmode(GPIO.BCM)
GPIO.setup(21, GPIO.OUT)
GPIO.output(21, GPIO.LOW)
GPIO.cleanup()

print("Light is off")
