import cv2 as cv
import sys

#read image file
infile='input/'+sys.argv[1]
img = cv.imread(infile, cv.IMREAD_UNCHANGED)

#apply blur
mblur=cv.medianBlur(img,5)

#save image
oldname=sys.argv[1]
ext=sys.argv[2]
fname=oldname[0:len(oldname)-len(ext)-1]
newname=fname+'-mblur.'+ext
outfile='output/'+newname
cv.imwrite(outfile,mblur)
print(outfile)