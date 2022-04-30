# Exes and Ohs
# 7 kyu
# https://www.codewars.com/kata/55908aad6620c066bc00002a

def xo(s):
    countO, countX = 0 , 0
    s = s.lower()
    for char in s:
        if (char == 'o'):
            countO += 1
        if (char == 'x'):
            countX += 1
    return (countO == countX)