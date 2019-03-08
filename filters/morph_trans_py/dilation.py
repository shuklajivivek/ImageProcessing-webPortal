import cv2
import numpy as np

image='../../images/abc.jpg'
img=cv2.imread(image, cv2.IMREAD_UNCHANGED)

kernel=np.ones((5,5),np.uint8)
morph=cv2.dilate(img,kernel,iterations=1)

cv2.imwrite('../../images/abc_morph_dilat.jpg',morph)
