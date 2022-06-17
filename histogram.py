# ヒストグラムとは、「ピクセル」の色の明るさをレベル別に分布したグラフ
import cv2

image1 = cv2.imread('office54.png')
image2 = cv2.imread('office54.png')
image3 = cv2.imread('office54-eng.png')

img_size = (100, 100)

# 画像をリサイズする
image1 = cv2.resize(image1, img_size)
image2 = cv2.resize(image2, img_size)
image3 = cv2.resize(image3, img_size)

# 画像をヒストグラム化する
# calcHistでヒストグラムを出す。
image1_hist = cv2.calcHist([image1], [0], None, [256], [0, 256])
image2_hist = cv2.calcHist([image2], [0], None, [256], [0, 256])
image3_hist = cv2.calcHist([image3], [0], None, [256], [0, 256])

# ヒストグラムした画像を比較
# compareHistで出力したヒストグラムを比較する
print(cv2.compareHist(image1_hist, image2_hist, 0))
print(cv2.compareHist(image1_hist, image3_hist, 0))
# 1.0
# 1.0は完全一致ということになる
# 0.8882466100801328