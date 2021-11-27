let s= 7
let t= 11
let a= 5
let b= 15
let apples= [-2, 2, 1]
let oranges= [5, -6]

let appleCounter = 0
let orangeCounter = 0
let m = apples.length
let n = oranges.length
let x= 0
let y = 0

for (let i = 0; i<m; i++){
x= a+apples[i]

if (x>=s && x<=t){
appleCounter+=1
}
else{appleCounter+=0}
}

for (let j = 0; j<n;j++){
y= b+oranges[j]
if (y<=t && y>=s){
orangeCounter+=1
}
else{orangeCounter+=0}
}

console.log(appleCounter)
console.log(orangeCounter)