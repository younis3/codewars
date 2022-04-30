# List Filtering
# 7 kyu
# https://www.codewars.com/kata/53dbd5315a3c69eed20002dd

def filter_list(l):
    list = [x for x in l if type(x)==int]
    return list