// Stop gninnipS My sdroW!
// 6 kyu
// https://www.codewars.com/kata/5264d2b162488dc400000001

def spin_words(sentence):
    sentence_array = sentence.split(" ")
    for i, word in enumerate(sentence_array):
        if len(word) >= 5:
            sentence_array[i] = word[::-1]   
    return (" ".join(sentence_array))
