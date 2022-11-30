import sys
import pytesseract
from PIL import Image

args = sys.argv

print(args)

url_img = '../public/images/string.png'
img = Image.open(url_img)
number = pytesseract.image_to_string(img)
print (number)