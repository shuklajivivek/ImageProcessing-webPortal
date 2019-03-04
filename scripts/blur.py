import cv2 as cv
import sys

def main():
	#read image file
	infile='input/'+sys.argv[1]
	img = cv.imread(infile, cv.IMREAD_UNCHANGED)

	#apply blur
	blur = cv.blur(img,(5,5))

	#save image
	oldname=sys.argv[1]
	ext=sys.argv[2]
	fname=oldname[0:len(oldname)-len(ext)-1]
	newname=fname+'-blur.'+ext
	outfile='output/'+newname
	cv.imwrite(outfile,blur)
	print(outfile)

if __name__=="__main__": main()