var heightInput = document.getElementById("Height");
var weightInput = document.getElementById("Weight");
var calculateButton = document.getElementById("calculate");
var result = document.querySelector(".result");
var statement = document.querySelector(".result-statement");
var BMI, height, weight;

calculateButton.addEventListener("click", ()=>{

    height = heightInput.value;
    weight = weightInput.value;
    BMI = weight/(height**2); 
    result.innerText = BMI.toFixed(2);

    if(BMI < 18.5){
        statement.innerText = "Your BMI falls within the underweight range. You are required to take more than 3000 calories per day";    
    }else if((BMI > 18.5) && (BMI < 24.9)){
        statement.innerText = "Your BMI falls within the normal or healthy weight range. You are required to take more than 2500 calories but less than 3000 per day";
    }else if((BMI > 25) && (BMI < 29.9 )){
        statement.innerText = "Your BMI falls within the overweight range. You are required to take less than 2500 but more than 2000 calories per day";
    }else{
        statement.innerText = "Your BMI falls within the obese range. You are required to take atmost 2000 calories per day";
    }
});
