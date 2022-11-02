//1629. Slowest Key

var slowestKey = function(releaseTimes, keysPressed) {
    releaseTimes.unshift(0)
    let str = "", min = 0, max = 0;
    for (let i = 1; i < releaseTimes.length; i++) {
        max = releaseTimes[i] - releaseTimes[i - 1];
        if (max > min) {
            str = keysPressed[i - 1]
        } else if (max === min) {
            if (str < keysPressed[i - 1]) {
                str = keysPressed[i - 1];
            }
        }
        if (max > min) {
            min = max;
        }
    }
    return str;
};