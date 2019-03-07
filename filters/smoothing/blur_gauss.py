import cv2

image='../../images/abc.jpg'
img=cv2.imread(image, cv2.IMREAD_UNCHANGED)

blur=cv2.GaussianBlur(img,(5,5),0)

cv2.imwrite('../../images/abc_blur_gauss.jpg',blur)
