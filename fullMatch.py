# 完全一致判定のプログラム
import cv2
import numpy as np

image1 = cv2.imread('img/killResult.png')
image2 = cv2.imread('img/killResult.png')
image3 = cv2.imread('img/deathResult.png')

print(np.array_equal(image1, image2))
# True
print(np.array_equal(image1, image3))
# False