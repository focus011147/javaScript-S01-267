function createQuote(quote ,callback ) {
    let myQuote = "Like I always say," + quote;
    callback(myQuote); //2
}

function logQuote(quote)  {
    concole.log (quote +'Yes..');
}

createQuote("you will getting better!",logQuote); //1