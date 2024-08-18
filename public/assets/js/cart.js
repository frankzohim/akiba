"use strict";

const addCart = document.querySelector('#addToCart');
const addCartForm =  document.querySelector('#addCartForm');
const quantity = document.querySelector('#quantity');
const up = document.querySelector('.up');
const down = document.querySelector('.down');

//Add event on click
addCart.addEventListener('click', function(e){
   e.preventDefault();
   console.log('click on add');
   addCartForm.submit();
})

up.addEventListener('click', function(e){
   e.preventDefault();
   quantity.value = Number(quantity.value) +1;
})

down.addEventListener('click', function(e){
   e.preventDefault();
   if(Number(quantity.value) > 1)
      quantity.value = Number(quantity.value) - 1;
})

 