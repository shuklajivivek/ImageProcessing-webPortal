import cv2

image='../../images/abc.jpg'
img=cv2.imread(image, cv2.IMREAD_UNCHANGED)

soby=cv2.Sobel(img, cv2.CV_64F,0,1,ksize=5)

if cv2.imwrite('../../images/abc_soby.jpg',soby): print('success',end='')
else: print('failed',end='')
