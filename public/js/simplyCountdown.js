  // This is an example with default parameters

    document.addEventListener('DOMContentLoaded', function() {
        var countdownElement = document.getElementById('cuenta');
        simplyCountdown('#cuenta', {
            year: countdownElement.getAttribute('data-year'),
            month: countdownElement.getAttribute('data-month'), // ajuste para JavaScript
            day: countdownElement.getAttribute('data-day'),
            hours: countdownElement.getAttribute('data-hours'),
            minutes: countdownElement.getAttribute('data-minutes'),
            seconds: countdownElement.getAttribute('data-seconds'),
            words: {
                days: { singular: 'día', plural: 'días' },
                hours: { singular: 'hora', plural: 'horas' },
                minutes: { singular: 'minuto', plural: 'minutos' },
                seconds: { singular: 'segundo', plural: 'segundos' }
            },
            plural: true,
            inline: false,
            inlineClass: 'simply-countdown-inline',
            enableUtc: false,
            onEnd: function() {
                // Acciones al terminar el contador
            },
            refresh: 1000,
            sectionClass: 'simply-section',
            amountClass: 'simply-amount',
            wordClass: 'simply-word',
            zeroPad: false,
            countUp: true
        });
    });

    // Also, you can init with already existing Javascript Object.
    let myElement = document.querySelector('.my-countdown');
    simplyCountdown(myElement, { /* options */ });

    let multipleElements = document.querySelectorAll('.my-countdown');
    simplyCountdown(multipleElements, { /* options */ });

