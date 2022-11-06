#2446. Determine if Two Events Have Conflict

class Solution:
    def haveConflict(self, event1: List[str], event2: List[str]) -> bool:
        a1, a2 = event1
        b1, b2 = event2
        return max(a1, b1) <= min(a2, b2)
