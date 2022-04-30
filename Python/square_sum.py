# Square(n) Sum
# 8 kyu
# https://www.codewars.com/kata/515e271a311df0350d00000f

def square_sum(numbers):
    sum = 0
    for n in numbers:
        sum += n**2
    return sum    