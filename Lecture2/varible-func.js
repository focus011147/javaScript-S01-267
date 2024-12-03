let plusFive = (Number) => {
    return number + 5;
};
//f is assigned the value of plusFive
let f = plusFive;

console.log(plusFive(3)); //8

console.log(f(9)); //14