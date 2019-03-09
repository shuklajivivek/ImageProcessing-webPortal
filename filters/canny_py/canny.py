import cv2

image='../../images/abc.jpg'
img=cv2.imread(image, cv2.IMREAD_UNCHANGED)

edges = cv2.Canny(img,100,200)

if cv2.imwrite('../../images/abc_canny.jpg',edges): print('success',end='')
else: print('failed',end='')
