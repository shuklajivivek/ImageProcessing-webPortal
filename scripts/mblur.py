import cv2
import sys

#read image file
infile='input/'+sys.argv[1]
img = cv2.imread(infile, cv2.IMREAD_UNCHANGED)

#apply blur
mblur=cv2.medianBlur(img,5)

#save image
oldname=sys.argv[1]
ext=sys.argv[2]
fname=oldname[0:len(oldname)-len(ext)-1]
newname=fname+'-mblur.'+ext
outfile='output/'+newname
cv2.imwrite(outfile,mblur)
print(outfile,end='')