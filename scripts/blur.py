#!/usr/bin/env python3.6
import cv2 as cv
import sys

#read image file
infile='input/'+sys.argv[1]
img = cv.imread(infile, cv.IMREAD_UNCHANGED)

#apply blur
blur = cv.blur(img,(5,5))

#save image
oldname=sys.argv[1]
fname=oldname[0:len(oldname)-4]
ext=oldname[-4:]
newname=fname+'-blur'+ext
outfile='output/'+newname
cv.imwrite(outfile,blur)