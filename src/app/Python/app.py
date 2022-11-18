# 完全一致判定のプログラム
import numpy as np
import cv2
import sys

args = sys.argv

print( cv2.__version__ )
print( np.__version__ )
print(args)
print(int(args[1]) + 10)




image1 = cv2.imread('../public/images/isWin.png')
image2 = cv2.imread('../public/images/kill12.png')
image3 = cv2.imread('../public/images/weapon1.png')

img_size = (100, 100)

# 画像をリサイズする
image1 = cv2.resize(image1, img_size)
image2 = cv2.resize(image2, img_size)
image3 = cv2.resize(image3, img_size)

print(np.count_nonzero(image1 == image1) / image1.size)
print(np.count_nonzero(image1 == image3) / image1.size)
# 1.0
# 0.46696666666666664