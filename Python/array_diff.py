# Array.diff
# 6 kyu
# https://www.codewars.com/kata/523f5d21c841566fde000009

def array_diff(a, b):
    list = [x for x in a if x not in b]
    return list