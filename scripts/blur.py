import cv2
import sys

def main():
	#read image file
	infile='input/'+sys.argv[1]
	img = cv2.imread(infile, cv2.IMREAD_UNCHANGED)

	#apply blur
	blur = cv2.blur(img,(5,5))

	#save image
	oldname=sys.argv[1]
	ext=sys.argv[2]
	fname=oldname[0:len(oldname)-len(ext)-1]
	newname=fname+'-blur.'+ext
	outfile='output/'+newname
	cv2.imwrite(outfile,blur)
	print(outfile,end='')

if __name__=="__main__": main()