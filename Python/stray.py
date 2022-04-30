# Find the stray number
# 7 kyu
# https://www.codewars.com/kata/57f609022f4d534f05000024

def stray(arr):
    ls = list(arr)
    for x in ls:
        if (ls.count(x) == 1):
            return x