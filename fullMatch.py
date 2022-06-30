# 完全一致判定のプログラム
import cv2
import numpy as np

image1 = cv2.imread('img/office54.png')
image2 = cv2.imread('img/office54.png')
image3 = cv2.imread('img/office54-eng.png')

print(np.array_equal(image1, image2))
print(np.array_equal(image1, image3))
# True
# False