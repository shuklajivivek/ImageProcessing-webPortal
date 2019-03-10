import cv2
import numpy as np

def hist_lines(im):
    h = np.zeros((300,256,3))
    if len(im.shape)!=2:
        #hist_lines applicable only for grayscale images
        #so converting image to grayscale for representation
        im = cv2.cvtColor(im,cv2.COLOR_BGR2GRAY)
    hist_item = cv2.calcHist([im],[0],None,[256],[0,256])
    cv2.normalize(hist_item,hist_item,0,255,cv2.NORM_MINMAX)
    hist=np.int32(np.around(hist_item))
    for x,y in enumerate(hist):
        cv2.line(h,(x,0),(x,y),(255,255,255))
    y = np.flipud(h)
    return y

img=cv2.imread('../../images/abc.jpg', cv2.IMREAD_UNCHANGED)
gray = cv2.cvtColor(img,cv2.COLOR_BGR2GRAY)
bins = np.arange(256).reshape(256,1)
equ = cv2.equalizeHist(gray)
before = hist_lines(img)
lines = hist_lines(equ)
cv2.imwrite('../../images/abc_hist_gray.jpg',before,[100]);
cv2.imwrite('../../images/abc_gray.jpg',gray,[100])
cv2.imwrite('../../images/abc_gray_eq.jpg',equ,[100])
if cv2.imwrite('../../images/abc_hist_gray_eq.jpg',lines,[100]): print('success',end='')
else: print('failed',end='')