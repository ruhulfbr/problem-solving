#2418. Sort the People

class Solution:
    def sortPeople(self, names: List[str], heights: List[int]) -> List[str]:
        arr=[]
        dict_={}
        for i in range(len(names)):
            if names[i] not in dict_:
                dict_[heights[i]]=names[i]
            else:
                dict_[heights[i]]=names[i]
        for i in sorted(dict_.keys()):
            arr.append(dict_[i])
        return arr[::-1]

