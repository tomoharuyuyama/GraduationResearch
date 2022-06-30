import cv2
import numpy as np

image1 = cv2.imread('img/office54.png')
image2 = cv2.imread('img/office54.png')
image3 = cv2.imread('img/office54-eng.png')

img_size = (100, 100)

# 画像をリサイズする
image1 = cv2.resize(image1, img_size)
image2 = cv2.resize(image2, img_size)
image3 = cv2.resize(image3, img_size)

print(np.count_nonzero(image1 == image2) / image1.size)
print(np.count_nonzero(image1 == image3) / image1.size)
# 1.0
# 0.46696666666666664