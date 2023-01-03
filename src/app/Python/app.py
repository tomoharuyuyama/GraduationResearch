import sys
import pytesseract
from PIL import Image

args = sys.argv

print(args)

# url_img = '../public/images/string.png'
url_img = '../storage/app/public/uploadImages/' + args[1]
# url_img = '../public/storage/app/public/uploadImages/' + args[1]
# url_img = '../../public/storage/app/public/uploadimages/'
img = Image.open(url_img)

result = []

result.append(pytesseract.image_to_string(img))
print (result[0].split('\n'))
