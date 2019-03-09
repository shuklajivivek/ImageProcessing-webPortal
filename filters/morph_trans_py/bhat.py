import cv2
import numpy as np

image='../../images/abc.jpg'
img=cv2.imread(image, cv2.IMREAD_UNCHANGED)

kernel=np.ones((5,5),np.uint8)
morph=cv2.morphologyEx(img,cv2.MORPH_BLACKHAT,kernel)

if cv2.imwrite('../../images/abc_morph_bhat.jpg',morph): print('success',end='')
else: print('failed',end='')
