# 944. Delete Columns to Make Sorted

class Solution(object):
    def minDeletionSize(self, strs):
        m = len(strs)
        n = len(strs[0])
        res = 0
        for i in range(n):
            for j in range(1,m):
                if strs[j-1][i]>strs[j][i]:
                    res += 1
                    break
        return res    