function getBotResponse(input) {
    //rock paper scissors
    if (input == "hii") {
        return "Hello! <br>How may i help you <br> 1. BMI related query <br> 2. Other queries";
    } else if (input == "what should i eat?") {
        return "you should eat healthy food and avoid eating the junk food and start doing exercise";
    }  else if (input == "What type of food i should eat") {
        return "you should eat green vegetables and fruit!";
    }
    if(input==1){
        return "To calculate BMI, we need: <br>1.we require height in m(meters) <br> 2.we require weight in Kg(Kilogram) <br> 3. Formula to calculate the Body Mass Index(BMI) is:<br> BMI = weight/(height)^2 ";
    }else if(input==2) {
        return "Sorry for the inconvinience, other features are currently in process. Will see you soon <br> Thankyou :)";
    }
    if (input == "my BMI(Body Mass Index) is 29") {
        return "you are overweight person!";
    } else if (input == "my BMI is 17") {
        return "you are underweight";
    }
    
}