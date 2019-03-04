import cv2 as cv
import sys

#read image file
infile='input/'+sys.argv[1]
img = cv.imread(infile, cv.IMREAD_UNCHANGED)

#apply blur
gblur=cv.GaussianBlur(img,(5,5),0)

#save image
oldname=sys.argv[1]
ext=sys.argv[2]+1
fname=oldname[0:len(oldname)-len(ext)-1]
newname=fname+'-gblur.'+ext
outfile='output/'+newname
cv.imwrite(outfile,gblur)
print(outfile)