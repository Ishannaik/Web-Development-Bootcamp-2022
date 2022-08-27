let maximum = parseInt(prompt("Enter the maximum number!"))
while(!maximum)
{
    let maximum = parseInt(prompt("Enter a valid number!"))
}
const targetNum=Math.floor(Math.random() * maximum)+1;
console.log(targetNum)
let attempts = 1;
let guess = prompt("Enter your frist guess: ")
while(guess!== targetNum)
 {
    if (guess==='q')
    {
        break;
    }
    if(guess>targetNum)
    {
        attempts++;
        guess = (prompt("Too high! Enter a new guess: "));
    }
    else{
        guess = (prompt("Too low! Enter a new guess: "));

    }
}
console.log("You got it!");
