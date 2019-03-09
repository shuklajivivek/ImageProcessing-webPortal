import cv2

image='../../images/abc.jpg'
img=cv2.imread(image, cv2.IMREAD_UNCHANGED)

blur=cv2.bilateralFilter(img,9,75,75)

if cv2.imwrite('../../images/abc_blur_bilat.jpg',blur): print('success',end='')
else: print('failed',end='')