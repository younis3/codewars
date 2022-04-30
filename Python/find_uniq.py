# Find the unique number
# 6 kyu
# https://www.codewars.com/kata/585d7d5adb20cf33cb000235

def find_uniq(arr):
    for i in range (2, len(arr)):
        if (arr[i] != arr[i-1] and arr[i] != arr[i-2]):
            return arr[i]
    for i in range (1, len(arr)-1):
        if (arr[i] != arr[i-1] and arr[i] != arr[i+1]):
            return arr[i]       
    return arr[0]