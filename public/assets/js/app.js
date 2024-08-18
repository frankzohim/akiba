"use strict";

 // Internationalizing Numbers (Intl)
 const num = 3884764.23;

 const options = {
    style: 'currency',
    unit: 'celsius',
    currency: 'XAF',
    useGrouping: true,
    };

//  console.log('US:      ', new Intl.NumberFormat('en-US', options).format(num));
//  console.log('Germany: ', new Intl.NumberFormat('de-DE', options).format(num));
//  console.log('Syria:   ', new Intl.NumberFormat('ar-SY', options).format(num));


//  const formatCur = function (value, locale, currency) {
//   return new Intl.NumberFormat(locale, {
//     style: "currency",
//     currency: currency,
//   }).format(value);
// };

const formatPrice = function(ids){
 console.log(ids);
 ids.forEach(element => {
   
    document.querySelector(`#product-price-${element}`).textContent = new Intl.NumberFormat('en-US', options).format(Number(document.querySelector(`#product-price-${element}`).textContent));

    //  document.querySelector(`#product-date-${element}`).textContent = new Intl.NumberFormat('en-US', options).format(Number(document.querySelector(`#product-price-${element}`).textContent));
    //console.log(new Date(document.querySelector(`#product-date-${element}`).textContent));
 });
}