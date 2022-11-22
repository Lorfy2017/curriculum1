class Car {
    constructor(gas, num) {
        this.gas = gas;
        this.num = num;
    }


    getNumGas() {
        console.log(`ガソリンは${this.gas}です。ナンバーは${this.num}です。`);

    }
}

let kuruma1 = new Car(3.5, 6782);
let kuruma2 = new Car(48, 2093);

kuruma1.getNumGas();
kuruma2.getNumGas();