# Century From Year
# 8 kyu
# https://www.codewars.com/kata/5a3fe3dde1ce0e8ed6000097

def century(year):
    if (year % 100 == 0):
        return int(year/100)
    else: return int(year/100)+1