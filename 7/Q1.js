let numbers = [2, 5, 12, 13, 15, 18, 22];
//ここに答えを実装してください。↓↓↓
function isEven(num) {
    if ((num % 2) == 0) {
        console.log(`${num}は偶数です`);
    }
}

numbers.forEach(element => {
    isEven(element);
});