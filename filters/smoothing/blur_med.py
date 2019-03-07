import cv2

image='../../images/abc.jpg'
img=cv2.imread(image, cv2.IMREAD_UNCHANGED)

blur=cv2.medianBlur(img,5)

cv2.imwrite('../../images/abc_blur_med.jpg',blur)
