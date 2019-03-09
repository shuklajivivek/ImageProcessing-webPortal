import cv2

image='../../images/abc.jpg'
img=cv2.imread(image, cv2.IMREAD_UNCHANGED)

lap=cv2.Laplacian(img, cv2.CV_64F)

if cv2.imwrite('../../images/abc_lap.jpg',lap): print('success',end='')
else: print('failed',end='')
