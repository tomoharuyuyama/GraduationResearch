# ヒストグラムとは、「ピクセル」の色の明るさをレベル別に分布したグラフ
import cv2

image1 = cv2.imread('img/killResult.png')
image2 = cv2.imread('img/killResult.png')
image3 = cv2.imread('img/deathResult.png')

img_size = (100, 100)

# 画像をリサイズする
image1 = cv2.resize(image1, img_size)
image2 = cv2.resize(image2, img_size)
image3 = cv2.resize(image3, img_size)

# 画像をヒストグラム化する
# calcHistでヒストグラムを出す
image1_hist = cv2.calcHist([image1], [0], None, [256], [0, 256])
image2_hist = cv2.calcHist([image2], [0], None, [256], [0, 256])
image3_hist = cv2.calcHist([image3], [0], None, [256], [0, 256])

# cv2.calcHist([image], [channel], [mask], [hist size], [range])
# image	入力画像を指定
# channel	画像のチェンネルインデックスを指定。グレースケールは[0]、カラー画像は色相（B, G, R）に対応する[0],[1],[2]のどれか値を指定
# mask	マスク画像画像の指定。全画素を計算するなら[None]を指定してマスク無しに設定
# hist size	ビンの数を指定。全画素対象であれば[256]を指定
# range	計算範囲を指定。基本は[0, 256]

# ヒストグラムした画像を比較
# compareHistで出力したヒストグラムを比較する
print(cv2.compareHist(image1_hist, image2_hist, 0))
# 1.0
# 1.0は完全一致
print(cv2.compareHist(image1_hist, image3_hist, 0))
# 0.7092814201425337