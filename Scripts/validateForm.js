'use strict';

(function() {
    function validateForm() {
        var inputs = $('#loginForm input');
        var validity = [];
        inputs.each(function(index, elem) {
            if (elem.checkValidity()) {
                $(elem).css('border-color', 'lightblue');
            } else {
                $(elem).css('border-color', 'red');

            }
        });

        return validity.reduce((total, value) => {
            return total && value;
        }, true);

    };

    var input1 = document.querySelector('#loginForm button').addEventListener('click', function(event) {
        var result = validateForm();
        console.log(result);
    });


    var input = document.querySelector("#campoUser input").addEventListener('click', (event) => {
        $('#campoPass label').css('tranform', 'translateY(-20px)');
        console.log('holass!!');
    });

})();