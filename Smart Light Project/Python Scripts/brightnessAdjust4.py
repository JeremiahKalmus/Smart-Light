#!/usr/local/bin/python
# -*- coding: utf-8 -*-

import RPi.GPIO as GPIO
import time


GPIO.setmode(GPIO.BOARD)

led_pin = 13

#For LED
GPIO.setup(led_pin, GPIO.OUT) #set pin 11 to output
p = GPIO.PWM(led_pin,100) #set the PWM for LED to 50%
p.start(100) #I don’t remember what this does but trust me, you need it.
    

#Catch when script is interupted, cleanup correctly
try:
    # Main loop
    while True:
        p.ChangeDutyCycle(100)
    
        
except KeyboardInterrupt:
    pass

p.stop()
GPIO.cleanup()
