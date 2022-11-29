# 完全一致判定のプログラム
# import numpy as np
# import cv2
# import sys
# import pyocr

# args = sys.argv

# print( cv2.__version__ )
# print( np.__version__ )
# print( pyocr.__version__ )
# print(args)
# # print(int(args[1]) + 10)




# image1 = cv2.imread('../public/images/isWin.png')
# image2 = cv2.imread('../public/images/kill12.png')
# image3 = cv2.imread('../public/images/weapon1.png')

# img_size = (100, 100)

# # 画像をリサイズする
# image1 = cv2.resize(image1, img_size)
# image2 = cv2.resize(image2, img_size)
# image3 = cv2.resize(image3, img_size)

# print(np.count_nonzero(image1 == image1) / image1.size)
# print(np.count_nonzero(image1 == image3) / image1.size)
# # 1.0
# 0.46696666666666664

# -*- coding: utf-8 -*-
# ocr_card.py
# import os
# from PIL import Image
# import pyocr
# import pyocr.builders

# path_tesseract = 'C:\\Program Files\\Tesseract-OCR'
# if path_tesseract not in os.environ['PATH'].split(os.pathsep):
#     os.environ['PATH'] += os.pathsep + path_tesseract

# tools = pyocr.get_available_tools()
# tool = tools[0]

# img_file = Image.open(r'C:\Users\user\test\test.png')

# builder = pyocr.builders.TextBuilder()
# result = tool.image_to_string(img_file, lang='jpn', builder=builder)

# print(result)

# -*- coding: utf-8 -*-
import pytesseract
from PIL import Image



# url_img = cv2.imread('../public/images/screen.png')
# url_img = '../public/images/screen.png'
# url_img = 'src/public/images/screen.png'
# url_img = 'src/public/images/string.png'
url_img = 'src/public/images/numbers.png'
# url_img = 'src/public/images/screen3.png'
img = Image.open(url_img)
number = pytesseract.image_to_string(img)
print (number)