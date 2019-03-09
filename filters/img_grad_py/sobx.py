import cv2

image='../../images/abc.jpg'
img=cv2.imread(image, cv2.IMREAD_UNCHANGED)

sobx=cv2.Sobel(img, cv2.CV_64F,1,0,ksize=5)

if cv2.imwrite('../../images/abc_sobx.jpg',sobx): print('success',end='')
else: print('failed',end='')
